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
        'attack_count' => 0,
        'top_attacker_character_id' => 0,
        'top_attacker_count' => 0,
        'top_attacker_name' => '',
        'winning_attacker_name' => ''
    ];
}
