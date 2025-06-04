# Worldboss Tables

This project defines two tables used for global boss events.

## `worldboss_event`
Fields:
- `id` — primary key
- `identifier` — internal name of the event
- `npc_identifier` — NPC identifier
- `status` — current state
- `ts_start` and `ts_end` — event timings
- `npc_hitpoints_total` and `npc_hitpoints_current`
- `attack_count` — number of completed attacks
- `top_attacker_character_id`, `top_attacker_count`, `top_attacker_name`
- `winning_attacker_name`

## `worldboss_attack`
Fields:
- `id` — primary key
- `worldboss_event_id` — references `worldboss_event`
- `character_id` — attacking character
- `battle_id` — ID of the related battle
- `damage` — damage dealt
- `ts_start` and `ts_complete`
- `status` — 1 active, 2 finished
