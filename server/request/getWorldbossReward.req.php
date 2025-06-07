<?php
namespace Request;

use Srv\Core;
use Schema\WorldbossReward;

class getWorldbossReward{
    public function __request($player){
        if(!$player->character->worldboss_event_id)
            return Core::setError('errNoWorldbossEvent');
        $reward = WorldbossReward::find(function($q) use ($player){
            $q->where('worldboss_event_id',$player->character->worldboss_event_id);
            $q->where('character_id',$player->character->id);
        });
        if(!$reward){
            $reward = new WorldbossReward([
                'worldboss_event_id'=>$player->character->worldboss_event_id,
                'character_id'=>$player->character->id
            ]);
            $reward->save();
        }
        Core::req()->data = [
            'worldboss_reward'=>$reward
        ];
    }
}
