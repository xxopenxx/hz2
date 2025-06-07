<?php
namespace Request;

use Srv\Core;
use Schema\WorldbossAttack;
use Schema\WorldbossEvent;

class finishWorldbossAttack{
    public function __request($player){
        $attack = WorldbossAttack::find(function($q) use ($player){
            $q->where('id',$player->character->active_worldboss_attack_id);
        });
        if(!$attack)
            return Core::setError('errNoActiveWorldbossAttack');

        $damage = intval(getField('damage', FIELD_NUM));
        $attack->damage = $damage;
        $attack->ts_complete = time();
        $attack->status = 2;

        $event = WorldbossEvent::find(function($q) use ($attack){
            $q->where('id',$attack->worldboss_event_id);
        });
        if($event){
            $event->npc_hitpoints_current = max(0,$event->npc_hitpoints_current - $damage);
            $event->attack_count += 1;
            $event->save();
        }

        $player->character->active_worldboss_attack_id = 0;
        $player->character->worldboss_event_attack_count += 1;
        $attack->save();

        Core::req()->data = [
            'character'=>$player->character,
            'worldboss_attack'=>$attack,
            'worldboss_event'=>$event
        ];
    }
}
