<?php
namespace Request;

use Srv\Core;
use Schema\WorldbossReward;

class claimWorldbossEventRewards{
    public function __request($player){
        if(!$player->character->worldboss_event_id)
            return Core::setError('errNoWorldbossEvent');

        $reward = WorldbossReward::find(function($q) use ($player){
            $q->where('worldboss_event_id', $player->character->worldboss_event_id);
            $q->where('character_id', $player->character->id);
        });
        if(!$reward)
            return Core::setError('errWorldbossRewardMissing');
        if($reward->claimed)
            return Core::setError('errWorldbossRewardAlreadyClaimed');

        $player->giveMoney($reward->game_currency);
        $player->giveExp($reward->xp);
        if($reward->rewards)
            $player->giveRewards($reward->rewards);
        $reward->claimed = 1;
        $reward->save();

        Core::req()->data = [
            'character' => $player->character,
            'worldboss_reward' => $reward
        ];
    }
}
