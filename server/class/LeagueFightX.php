<?php
namespace Cls;

use Cls\BaseBattle;
use Cls\Utils;
use Schema\LeagueFight;
use Cls\Utils\Item;
use Srv\Config;

class LeagueFightX extends BaseBattle{
    
    public function start(){
        $this->fight->fight();
        $this->rounds = [
            'rounds'=>$this->fight->getRounds(),
            'profile_a_appearance'=>$this->characterAAppearance(),
            'profile_b_appearance'=>$this->characterBAppearance()
        ];
		
        if($this->fight->getWinner() == 1){
            $coins = Utils::duelCoinWinReward($this->op2->getLVL());

            // Apply league division multiplier
            $league_id = floor($this->op1->character->league_group_id / 100000);
            if ($league_id > 0 && $league_id <= 10) {
                $league_multiplier = Config::get("constants.league_divisions.$league_id.game_currency_bonus");
                $coins = round($coins * $league_multiplier);
            }

            if($this->op1->character->guild_id != 0 && ($booster = $this->op1->guild->getBoosters('duel')) != null)
                $coins = round($coins * ((100+Config::get("constants.guild_boosters.$booster.amount"))/100));
            $this->a_rewards = Utils::rewards($coins, 0, 0, 0, 0, 0, Utils::duelLeagueFightWinReward($this->op1->getLeaguePoints(), $this->op2->getLeaguePoints()));
            $this->b_rewards = Utils::rewards(0, 0, 0, 0, 0, 0, Utils::duelLeaguePointsLostReward($this->op1->getLeaguePoints(), $this->op2->getLeaguePoints()));
            $this->winner = 'a';

            // Goals
            $leagueFightsWon = $this->op1->getCurrentGoalValue('league_fights_won');
            $this->op1->updateCurrentGoalValue('league_fights_won', $leagueFightsWon + 1);

            $leagueFightsWonInRow = $this->op1->getCurrentGoalValue('league_fights_won_in_row');
            $this->op1->updateCurrentGoalValue('league_fights_won_in_row', $leagueFightsWonInRow + 1);
            $this->op2->updateCurrentGoalValue('league_fights_won_in_row', 0);
        }else{
            $coins = Utils::duelCoinWinReward($this->op1->getLVL());

            // Apply league division multiplier
            $league_id = floor($this->op2->character->league_group_id / 100000);
            if ($league_id > 0 && $league_id <= 10) {
                $league_multiplier = Config::get("constants.league_divisions.$league_id.game_currency_bonus");
                $coins = round($coins * $league_multiplier);
            }

            if($this->op2->character->guild_id != 0 && ($booster = $this->op2->guild->getBoosters('duel')) != null)
                $coins = round($coins * ((100+Config::get("constants.guild_boosters.$booster.amount"))/100));
            $this->a_rewards = Utils::rewards(0, 0, 0, 0, 0, 0, Utils::duelLeaguePointsLostReward($this->op2->getLeaguePoints(), $this->op1->getLeaguePoints()));
            $this->b_rewards = Utils::rewards($coins, 0, 0, 0, 0, 0, Utils::duelLeagueFightWinReward($this->op2->getLeaguePoints(), $this->op1->getLeaguePoints()));
            $this->winner = 'b';

            $this->op1->updateCurrentGoalValue('league_fights_won_in_row', 0);
        }
    }
    
    public function characterAAppearance(){
        return $this->characterAppearance($this->op1);
    }
    
    public function characterBAppearance(){
        return $this->characterAppearance($this->op2);
    }
    
    private function characterAppearance($op){
        $data = [
            'name'=> $op->character->name,
			'gender'=> $op->character->gender,
			'appearance_skin_color'=> $op->character->appearance_skin_color,
			'appearance_hair_color'=> $op->character->appearance_hair_color,
			'appearance_hair_type'=> $op->character->appearance_hair_type,
			'appearance_head_type'=> $op->character->appearance_head_type,
			'appearance_eyes_type'=> $op->character->appearance_eyes_type,
			'appearance_eyebrows_type'=> $op->character->appearance_eyebrows_type,
			'appearance_nose_type'=> $op->character->appearance_nose_type,
			'appearance_mouth_type'=> $op->character->appearance_mouth_type,
			'appearance_facial_hair_type'=> $op->character->appearance_facial_hair_type,
			'appearance_decoration_type'=> $op->character->appearance_decoration_type,
			'show_mask'=> $op->character->show_mask
        ];
        $eqItems = $op->getOnlyEquipedItems()['items'];
        foreach($eqItems as $it){
            if($it->type == 7 || $it->type == 6)
                continue;
            $data[Item::$TYPE[$it->type]] = $it->identifier;
        }
        if($op->sidekicks){
            $data["sidekick"] = $op->sidekicks;
        }
        return $data;
    }

    private function saveDuel(){
        $this->duel = new LeagueFight([
			'battle_id'=>$this->battle->id,
            'ts_creation'=>time(),
            'character_a_id'=>$this->op1->character->id,
            'character_b_id'=>$this->op2->character->id,
            'character_a_rewards'=>$this->a_rewards,
            'character_b_rewards'=>$this->b_rewards
        ]);
        $this->duel->save();
    }
    
    public function save(){
        $this->saveBattle();
        $this->saveDuel();
    }
}