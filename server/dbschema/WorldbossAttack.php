<?php
namespace Schema;

use Srv\Record;
use JsonSerializable;

class WorldbossAttack extends Record implements JsonSerializable{
    protected static $_TABLE = 'worldboss_attack';

    public function jsonSerialize(){
        return $this->getData();
    }

    protected static $_FIELDS = [
        'id' => 0,
        'worldboss_event_id' => 0,
        'character_id' => 0,
        'battle_id' => 0,
        'damage' => 0,
        'ts_start' => 0,
        'ts_complete' => 0,
        'status' => 1
    ];
}
