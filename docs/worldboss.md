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

### Activating an event

An admin helper is available at `admin/worldboss.php`. Set `admin_secret` in
`server/config.php` and provide it in the form along with event data. The script
creates a new `worldboss_event` record and assigns it to all characters.
