<?php
namespace Request;

use Srv\Core;
use Schema\WorldbossEvent;
use Schema\WorldbossAttack;

class startWorldbossAttack{
    public function __request($player){
        if($player->character->active_worldboss_attack_id)
            return Core::setError('errWorldbossAttackActive');
        if(!$player->character->worldboss_event_id)
            return Core::setError('errNoWorldbossEvent');

        $event = WorldbossEvent::find(function($q) use ($player){
            $q->where('id',$player->character->worldboss_event_id);
        });
        if(!$event || $event->status != 1)
            return Core::setError('errWorldbossInvalidEvent');

        $now = time();
        if($now < $event->ts_start || $now >= $event->ts_end)
            return Core::setError('errWorldbossInvalidEvent');

        $attack = new WorldbossAttack([
            'worldboss_event_id'=>$event->id,
            'character_id'=>$player->character->id,
            'ts_start'=>time(),
            'status'=>1
        ]);
        $attack->save();
        $player->character->active_worldboss_attack_id = $attack->id;

        Core::req()->data = [
            'character'=>$player->character,
            'worldboss_attack'=>$attack
        ];
    }
}
