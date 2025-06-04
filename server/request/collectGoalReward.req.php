<?php
namespace Request;

use Srv\Core;
use Cls\Utils;
use Cls\GameSettings;
use Srv\DB;
use PDO;
use Schema\Items;
use Schema\GoalItems;
use Schema\Sidekicks;

use Cls\Utils\ItemsList;
use Cls\Utils\Item;

class collectGoalReward {
    public function __request($player) {
    	$identifier = getField('identifier');
    	$value = getField('value');

        $date = date('Y-m-d H:i:s');

        $goals = GameSettings::getConstant("goals.{$identifier}");
        if (!$goals) {
            return Core::setError('errInvalidGoalIdentifier');
        }

        $reward_factor = $goals['values'][$value]['reward_factor'] ?? null;
        $estimated_level = $goals['values'][$value]['estimated_level'] ?? null;

        if ($reward_factor === null || $estimated_level === null) {
            return Core::setError('errInvalidGoalValue');
        }

        $collected = null;
        if (!empty($player->collected_goals)) {
            foreach ($player->collected_goals as $key => $data) {
                foreach ($data as $k => $v) {
                    if ($k == $identifier && $v['value'] == $value) {
                        $collected = $data;
                        break 2;
                    }
                }
            }
        }
    
        if ($collected) {
            return Core::setError('errCollectGoalAlreadyExists');
        }

        switch ($goals['values'][$value]['reward_type']) {
            case 1: # Game currency
                $player->giveMoney(Utils::getGoalRewardCoins($estimated_level, $reward_factor));
                break;
            case 2: # Premium currency
                $player->givePremium($reward_factor);
                break;
            case 3: # Stat points
                $player->character->stat_points_available += $reward_factor;
                break;
            case 4: # Experience
                $player->giveExp(Utils::getGoalRewardXp($estimated_level, $reward_factor));
                break;
            case 5: # Item
            case 9: # Sidekick
                $freeSlot = $player->findEmptyInventorySlot();
                if ($freeSlot === null) {
                    return Core::setError('errInventoryNoEmptySlot');
                }

                $goalItem = GoalItems::find(function($q)use($identifier,$player){ 
                    $q->where('goal_identifier', $identifier)
                        ->where('character_id', $player->character->id);
                });

                if (!$goalItem) {
                    return Core::setError('errGoalItemNotFound');
                }
                
                $item = new Items([
                    'character_id'=>$player->character->id,
                    'identifier'=>$goalItem->identifier,
                    'type'=>$goalItem->type,
                    'quality'=>$goalItem->quality,
                    'required_level'=>$goalItem->required_level,
                    'charges'=>$goalItem->charges,
                    'item_level'=>$goalItem->item_level,
                    'ts_availability_start'=>$goalItem->ts_availability_start,
                    'ts_availability_end'=>$goalItem->ts_availability_end,
                    'premium_item'=>$goalItem->premium_item,
                    'buy_price'=>$goalItem->buy_price,
                    'sell_price'=>$goalItem->sell_price,
                    'stat_stamina'=>$goalItem->stat_stamina,
                    'stat_strength'=>$goalItem->stat_strength,
                    'stat_critical_rating'=>$goalItem->stat_critical_rating,
                    'stat_dodge_rating'=>$goalItem->stat_dodge_rating,
                    'stat_weapon_damage'=>$goalItem->stat_weapon_damage
                ]);
                $item->save();
                $player->items[] = $item;
                $player->inventory->{$freeSlot} = $item->id;

                GoalItems::delete(function($q)use($goalItem){ $q->where('id',$goalItem->id); });
                break;
            case 6: # Training sessions
                $player->character->training_count += $reward_factor;
                break;
            case 7: # Energy
                $player->character->quest_energy += $reward_factor;
                break;
            case 8: # Booster
                $reward_identifier = $goals['values'][$value]['reward_identifier'] ?? null;
                if ($reward_identifier === null) {
                    return Core::setError('errInvalidBoosterIdentifier');
                }

                $booster = GameSettings::getConstant("boosters.{$reward_identifier}");
                if(!$booster) {
                    return Core::setError("errInvalidBoosterId");
                }
                
                $types = ["quest", "stats", "work"];
                $actId = 'active_'.$types[$booster['type']-1].'_booster_id';
                $tsCol = 'ts_active_'.$types[$booster['type']-1].'_boost_expires';

                $addTime = time();
                if($player->character->{$tsCol} > time())
                    $addTime = $player->character->{$tsCol};
                $player->character->{$tsCol} = $addTime + $booster['duration'];
                $player->character->{$actId} = $reward_identifier;
                
                $player->calculateStats();
                break;
            case 10: # Hideout glue
                $player->giveHideoutGlue($reward_factor);
                break;
            case 11: # Hideout stone
                $player->giveHideoutStone($reward_factor);
                break;
        }

        $player->collected_goals[] = [
            $identifier => [
                'value' => intval($value),
                'date' => $date
            ]
        ];

        DB::sql("UPDATE `character` SET `collected_goals` = ? WHERE `id` = ?", [
            json_encode($player->collected_goals),
            $player->character->id
        ]);

        $player->checkCollectedGoals();
		Core::req()->data = [
		    'user'=>$player->user,
		    'character'=>$player->character,
            'collected_goals'=>$player->collected_goals,
            'inventory'=>$player->inventory,
            'items'=>$player->items
		];
    }
}