<?php
namespace Request;

use Srv\Core;
use Schema\WorldbossEvent;

class assignWorldbossEvent{
    public function __request($player){
        $event_id = intval(getField('worldboss_event_id', FIELD_NUM));
        $event = WorldbossEvent::find(function($q) use ($event_id){
            $q->where('id',$event_id);
        });
        if(!$event)
            return Core::setError('errWorldbossInvalidEvent');
        $player->character->worldboss_event_id = $event->id;
        Core::req()->data = [
            'character'=>$player->character,
            'worldboss_event'=>$event
        ];
    }
}
