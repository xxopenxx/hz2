# Worldboss Schema

Two new tables define world boss functionality. They must be created in the database before events or attacks can be stored.

## `worldboss_event`
| Column | Type | Description |
| --- | --- | --- |
| id | int(11) AUTO_INCREMENT | Primary key. |
| identifier | varchar(64) | Unique id of the event. |
| npc_identifier | varchar(64) | NPC template id used for the boss. |
| status | int(11) | Current status value. |
| ts_start | int(11) | Unix time when the event begins. |
| ts_end | int(11) | Unix time when the event ends. |
| npc_hitpoints_total | int(11) | Boss starting hitpoints. |
| npc_hitpoints_current | int(11) | Remaining hitpoints. |
| attack_count | int(11) | Total attacks made. |
| top_attacker_character_id | int(11) | Character id of the top attacker. |
| top_attacker_count | int(11) | Attack count for the top attacker. |
| top_attacker_name | varchar(64) | Name of the top attacker. |
| winning_attacker_name | varchar(64) | Name of the final attacker. |

## `worldboss_attack`
| Column | Type | Description |
| --- | --- | --- |
| id | int(11) AUTO_INCREMENT | Primary key. |
| worldboss_event_id | int(11) | Event this attack belongs to. |
| character_id | int(11) | Attacking character. |
| battle_id | int(11) | Related battle record. |
| damage | int(11) | Damage dealt. |
| ts_start | int(11) | Attack start time. |
| ts_complete | int(11) | Attack completion time. |
| status | tinyint(1) | Attack status. |

Both tables use InnoDB and have primary key indexes. Additional indexes are defined in `DATABASE.sql` to improve lookups by event id, character id and status.
