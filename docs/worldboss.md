# Worldboss Tables

This project defines several tables used for global boss events.

## `worldboss_event`
Fields:
- `id` — primary key
- `identifier` — internal name of the event
- `npc_identifier` — NPC identifier
- `status` — current state
- `ts_start` and `ts_end` — event timings
- `npc_hitpoints_total` and `npc_hitpoints_current`
- `min_level` and `max_level` — allowed character level range
- `stage` — progression stage
- `attack_count` — number of completed attacks
- `top_attacker_character_id`, `top_attacker_count`, `top_attacker_name`
- `winning_attacker_name`
- `ranking`, `coin_reward_total`, `coin_reward_next_attack`
- `xp_reward_total`, `xp_reward_next_attack`
- `reward_top_rank_item_identifier`, `reward_top_pool_item_identifier`

## `worldboss_attack`
Fields:
- `id` — primary key
- `worldboss_event_id` — references `worldboss_event`
- `character_id` — attacking character
- `battle_id` — ID of the related battle
- `damage` — damage dealt
- `ts_start` and `ts_complete`
- `status` — 1 active, 2 finished

## `worldboss_reward`
Fields:
- `id` — primary key
- `worldboss_event_id` and `character_id` — associated event and player
- `game_currency` and `xp` — reward amounts
- `item_id` and `sidekick_item_id` — rewarded items
- `rewards` — serialized additional rewards
- `claimed` — 1 if the player has claimed the reward

`worldboss_reward` has a unique index on `(worldboss_event_id, character_id)` to
ensure each player receives at most one reward per event.

### Activating an event

An admin helper is available at `admin/worldboss.php`. Set `admin_secret` in
`server/config.php` and provide it in the form along with event data. The script
creates a new `worldboss_event` record and assigns it to all characters.

### Example event

You can manually insert a small test event with SQL:

```sql
INSERT INTO worldboss_event
(identifier, npc_identifier, status, ts_start, ts_end,
 npc_hitpoints_total, npc_hitpoints_current, min_level, max_level, stage)
VALUES (
  'testboss01',
  'npc_mastermind',
  1,
  UNIX_TIMESTAMP(),
  UNIX_TIMESTAMP() + 86400,
  500000,
  500000,
  1,
  100,
  1
);
```

### Checking event status

To confirm an event is running, query the table:

```sql
SELECT * FROM worldboss_event
WHERE status = 1
  AND ts_start <= UNIX_TIMESTAMP()
  AND ts_end > UNIX_TIMESTAMP();
```

If the query returns a row, that event is active and should be loaded for
characters whose `worldboss_event_id` matches the row's `id`.

### Claiming rewards

After an event ends, players can claim their rewards using the
`claimWorldbossEventRewards` request. The request takes no parameters.
It grants the coin, XP and item rewards stored in `worldboss_reward` and
marks the record as claimed.

Response fields:
- `character` – updated character data
- `worldboss_reward` – the reward record after claiming
