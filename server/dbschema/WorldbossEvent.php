<?php
namespace Schema;

use Srv\Record;
use JsonSerializable;

class WorldbossEvent extends Record implements JsonSerializable{
    protected static $_TABLE = 'worldboss_event';

    public function jsonSerialize(){
        return $this->getData();
    }

    protected static $_FIELDS = [
        'id' => 0,
        'identifier' => '',
        'npc_identifier' => '',
        'status' => 0,
        'ts_start' => 0,
        'ts_end' => 0,
        'npc_hitpoints_total' => 0,
        'npc_hitpoints_current' => 0,
        'min_level' => 1,
        'max_level' => 1,
        'stage' => 1,
        'attack_count' => 0,
        'top_attacker_character_id' => 0,
        'top_attacker_count' => 0,
        'top_attacker_name' => '',
        'winning_attacker_name' => '',
        'ranking' => 0,
        'coin_reward_total' => 0,
        'coin_reward_next_attack' => 0,
        'xp_reward_total' => 0,
        'xp_reward_next_attack' => 0,
        'reward_top_rank_item_identifier' => '',
        'reward_top_pool_item_identifier' => ''
    ];
}
