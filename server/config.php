<?php
if(!defined('IN_ENGINE')) exit(http_response_code(404));
return [
        "database"=>[
            //Connection type:
            //  'mysql' for database server
            //  otherwise connection will be set to file located in 'data/{file}.sqlite'
            'type'=>            'mysql',
            //
            //Connection credentials
            'hostname'=>        'localhost',
            'username'=>        'root',
            'password'=>        '',
            'database'=>        'hz',
            'charset'=>         'utf8',
            
            //For file connection
            'file'=>            'data',
            
            //Optional
            'querylog'=>        FALSE, //Show all SQL Query information in request
            'prefix'=>          '' //'yourprefix' -> yourprefix_{table}
        ],
        'site'=>[
            'base_url'=>        'http://localhost/hzclean',
            'forum_url'=>       '',
            'tos_url'=>         '',
            'support_url'=>     '',
            'changelog_url'=>   '',
            'forumteams_url'=>  '',
            'facebook_url'=>    '',
            //
			'resource_cdn'=>    'assets/save/',
            //'resource_cdn'=>    'assets/proxy.php?source=',
            'public_url'=>      '/',
            'socket_url'=>      '',
            'request_url'=>     'server/request.php',
            //SWF's
            'swf_main'=>        'swf/main_new.swf',
            'swf_character'=>   'swf/character.swf',
            'swf_ui'=>          'swf/ui_new.swf',
            'swf_install'=>     'http://hz-static-2.akamaized.net/swf/expressInstall.swf',
            //Server
            'server_id'=>       'S1',
            'server_name'=>     'ZeroGame',
            'server_domain'=>   'localhost',
            'title'=>           'ZeroGame',
            'mail'=>            'none',
			//Game language
			'available_locales' => ['cs_CZ' ,'de_DE' ,'el_GR' ,'en_GB' ,'es_ES' ,'fr_FR' ,'it_IT' ,'lt_LT' ,'pl_PL' ,'pt_BR' ,'ro_RO' ,'ru_RU' ,'tr_TR'],
			'default_locale' => 'pl_PL'
			],
        "server"=>[
            'flash_ver'=>       'flash_129',
        ],
        "constants"=>[
            //Init
            "init_game_currency"=>1,
            "init_premium_currency"=>1000000,
            "init_honor"=>100,
            "init_base_stat_value"=>10,
            "init_quest_energy"=>1000,
            "init_quest_energy_friend_invite_platform"=>5,
            "init_max_quest_energy"=>1000,
            "init_duel_stamina"=>250,
            "init_max_duel_stamina"=>250,
            "init_league_stamina"=>20,
            "init_max_league_stamina"=>20,
			"league_elo_calculation_k"=>21,
            "init_max_free_shop_refreshes"=>1,
            "init_resource_quest_amount"=>4,
            "tutorial_finished_premium_currency"=>5,
            "account_confirmed_premium_currency"=>10,
            "account_reactivated_premium_currency"=>30,
            //
			"slotmachine_event_start"=>"2016-04-15 00:00:00",
			"slotmachine_event_end"=>"2020-04-17 23:59:59",
			//
            "daily_login_bonus_reward_game_currency_base"=>600,
            "daily_login_bonus_reward_xp_base"=>600,
            "daily_login_bonus_reward_premium_currency_base"=>1,
            "daily_login_bonus_reward_fixed_days"=>5,
            "daily_login_bonus_reward_pool_size"=>12,
            "daily_login_bonus_rewards"=>[
                1=>[
                    'reward_type1'=>1,
                    'reward_type2'=>0,
                    'reward_type1_factor'=>1,
                    'reward_type2_factor'=>0,
                ],
                2=>[
                    'reward_type1'=>2,
                    'reward_type2'=>0,
                    'reward_type1_factor'=>1,
                    'reward_type2_factor'=>0,
                ],
                3=>[
                    'reward_type1'=>1,
                    'reward_type2'=>2,
                    'reward_type1_factor'=>2,
                    'reward_type2_factor'=>1,
                ],
                4=>[
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>2,
                    'reward_type2_factor'=>1,
                ],
                5=>[
                    'reward_type1'=>3,
                    'reward_type2'=>0,
                    'reward_type1_factor'=>3,
                    'reward_type2_factor'=>0,
                ],
            ],
            "daily_login_bonus_rewards_pool"=>[
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>2,
                    'reward_type2_factor'=>2,
                ],
                [
                    'reward_type1'=>3,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>1,
                    'reward_type2_factor'=>2,
                ],
                [
                    'reward_type1'=>3,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>1,
                    'reward_type2_factor'=>2,
                ],
                [
                    'reward_type1'=>3,
                    'reward_type2'=>0,
                    'reward_type1_factor'=>3,
                    'reward_type2_factor'=>0,
                ],
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>2,
                    'reward_type2_factor'=>2,
                ],
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>1,
                    'reward_type2_factor'=>1,
                ],
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>1,
                    'reward_type2_factor'=>1,
                ],
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>2,
                    'reward_type2_factor'=>2,
                ],
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>1,
                    'reward_type2_factor'=>2,
                ],
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>2,
                    'reward_type2_factor'=>2,
                ],
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>1,
                    'reward_type2_factor'=>1,
                ],
                [
                    'reward_type1'=>2,
                    'reward_type2'=>1,
                    'reward_type1_factor'=>2,
                    'reward_type2_factor'=>2,
                ]
            ],
            //
            "slotmachine_min_level"=>15,
            "resource_free_slotmachine_spin_usage_amount"=>1,
            "resource_slotmachine_jeton_usage_amount"=>10,
            "slotmachine_max_daily_spins"=>30,
            "slotmachine_premium_currency_amount"=>1,
            "slotmachine_coin_reward_base_time"=>180,
	        "slotmachine_xp_reward_base_time"=>180,
            //
            "sidekick_rename_premium_currency_amount"=>30,
            //
            "guild_dungeon_unlock_level"=>50,
    		"guild_dungeon_min_npc_count_percentage"=>0.8,
    		"guild_dungeon_max_npc_count_percentage"=>1.2,
    		"guild_dungeon_min_npc_level_percentage"=>0.8,
    		"guild_dungeon_max_npc_level_percentage"=>1.2,
    		"guild_dungeon_min_stat_type_percentage"=>0.22,
    		"guild_dungeon_reward_coin_duration"=>1800,
    		"guild_dungeon_reward_xp_duration"=>1800,
    		"guild_dungeon_selection_lock_time"=>300,
    		"guild_dungeon_new_enemy_premium_amount"=>10,
    		"guild_dungeon_enemy_chance_easy"=>0.5,
    		"guild_dungeon_enemy_chance_medium"=>0.3,
    		"guild_dungeon_enemy_chance_hard"=>0.2,
    		"guild_dungeon_enemy_stat_factor_easy"=>1,
    		"guild_dungeon_enemy_stat_factor_medium"=>1.1,
    		"guild_dungeon_enemy_stat_factor_hard"=>1.25,
    		"guild_dungeon_reward_factor_start"=>0.9, //CUSTOM
    		"guild_dungeon_reward_factor_easy"=>1,
    		"guild_dungeon_reward_factor_medium"=>1.2,
    		"guild_dungeon_reward_factor_hard"=>1.66,
    		"guild_dungeon_reward_factor_end"=>2, //CUSTOM
    		"guild_dungeon_reward_guild_missiles_chance_easy"=>0.04,
    		"guild_dungeon_reward_guild_missiles_chance_medium"=>0.06,
    		"guild_dungeon_reward_guild_missiles_chance_hard"=>0.1,
    		"guild_dungeon_reward_guild_improvement_chance_easy"=>0.03,
    		"guild_dungeon_reward_guild_improvement_chance_medium"=>0.04,
    		"guild_dungeon_reward_guild_improvement_chance_hard"=>0.05,
    		"guild_dungeon_reward_guild_premium_currency_chance_easy"=>0.05,
    		"guild_dungeon_reward_guild_premium_currency_chance_medium"=>0.15,
    		"guild_dungeon_reward_guild_premium_currency_chance_hard"=>0.25,
    		"guild_dungeon_reward_item_chance_easy"=>0.15,
    		"guild_dungeon_reward_item_chance_medium"=>0.25,
    		"guild_dungeon_reward_item_chance_hard"=>0.35,
    		"guild_dungeon_reward_xp_increased_chance_easy"=>0.1,
    		"guild_dungeon_reward_xp_increased_chance_medium"=>0.15,
    		"guild_dungeon_reward_xp_increased_chance_hard"=>0.2,
    		"guild_dungeon_reward_game_currency_increased_chance_easy"=>0.1,
    		"guild_dungeon_reward_game_currency_increased_chance_medium"=>0.15,
    		"guild_dungeon_reward_game_currency_increased_chance_hard"=>0.2,
    		"guild_dungeon_reward_value_guild_premium_currency_min_easy"=>1,
    		"guild_dungeon_reward_value_guild_premium_currency_max_easy"=>2,
    		"guild_dungeon_reward_value_guild_premium_currency_min_medium"=>1,
    		"guild_dungeon_reward_value_guild_premium_currency_max_medium"=>4,
    		"guild_dungeon_reward_value_guild_premium_currency_min_hard"=>1,
    		"guild_dungeon_reward_value_guild_premium_currency_max_hard"=>6,
    		"guild_dungeon_reward_value_guild_missiles_min_easy"=>1,
    		"guild_dungeon_reward_value_guild_missiles_max_easy"=>15,
    		"guild_dungeon_reward_value_guild_missiles_min_medium"=>1,
    		"guild_dungeon_reward_value_guild_missiles_max_medium"=>20,
    		"guild_dungeon_reward_value_guild_missiles_min_hard"=>1,
    		"guild_dungeon_reward_value_guild_missiles_max_hard"=>25,
    		"guild_dungeon_reward_value_xp_increased_easy"=>0.3,
    		"guild_dungeon_reward_value_xp_increased_medium"=>0.3,
    		"guild_dungeon_reward_value_xp_increased_hard"=>0.3,
    		"guild_dungeon_reward_value_game_currency_increased_easy"=>0.3,
    		"guild_dungeon_reward_value_game_currency_increased_medium"=>0.3,
    		"guild_dungeon_reward_value_game_currency_increased_hard"=>0.3,
    		"guild_dungeon_reward_distribution_common_item_chance_easy"=>0.5,
    		"guild_dungeon_reward_distribution_rare_item_chance_easy"=>0.5,
    		"guild_dungeon_reward_distribution_epic_item_chance_easy"=>0,
    		"guild_dungeon_reward_distribution_sidekick_item_chance_easy"=>0,
    		"guild_dungeon_reward_distribution_surprisebox_1_item_chance_easy"=>0,
    		"guild_dungeon_reward_distribution_surprisebox_2_item_chance_easy"=>0,
    		"guild_dungeon_reward_distribution_common_item_chance_medium"=>0.4,
    		"guild_dungeon_reward_distribution_rare_item_chance_medium"=>0.3,
    		"guild_dungeon_reward_distribution_epic_item_chance_medium"=>0,
    		"guild_dungeon_reward_distribution_sidekick_item_chance_medium"=>0.1,
    		"guild_dungeon_reward_distribution_surprisebox_1_item_chance_medium"=>0.2,
    		"guild_dungeon_reward_distribution_surprisebox_2_item_chance_medium"=>0,
    		"guild_dungeon_reward_distribution_common_item_chance_hard"=>0.2,
    		"guild_dungeon_reward_distribution_rare_item_chance_hard"=>0.2,
    		"guild_dungeon_reward_distribution_epic_item_chance_hard"=>0.2,
    		"guild_dungeon_reward_distribution_sidekick_item_chance_hard"=>0.2,
    		"guild_dungeon_reward_distribution_surprisebox_1_item_chance_hard"=>0,
    		"guild_dungeon_reward_distribution_surprisebox_2_item_chance_hard"=>0.2,
    		"guild_dungeon_reward_surprisebox_1_indentifier"=>"surprise_box_gangset1",
    		"guild_dungeon_reward_surprisebox_2_indentifier"=>"surprise_box_gangset2",
    		"guild_booster_cost_game_currency_per_improvement"=>30000,
		    "guild_booster_cost_premium_currency"=>69,
    		"guild_boosters"=>[
    			"guild_booster_training1"=>[
    				"type"=>1,
    				"amount"=>4,
    				"duration"=>604800,
    				"premium_item"=>false
    			],
    			"guild_booster_training2"=>[
    				"type"=>1,
    				"amount"=>7,
    				"duration"=>604800,
    				"premium_item"=>true
    			],
    			"guild_booster_quest1"=>[
    				"type"=>2,
    				"amount"=>10,
    				"duration"=>604800,
    				"premium_item"=>false
    			],
    			"guild_booster_quest2"=>[
    				"type"=>2,
    				"amount"=>20,
    				"duration"=>604800,
    				"premium_item"=>true
    			],
    			"guild_booster_duel1"=>[
    				"type"=>3,
    				"amount"=>10,
    				"duration"=>604800,
    				"premium_item"=>false
    			],
    			"guild_booster_duel2"=>[
    				"type"=>3,
    				"amount"=>20,
    				"duration"=>604800,
    				"premium_item"=>true
    			]
    		],
    		//
            "training_storage_cost"=>1,
		    "training_storage_cost_maximum"=>3,
		    "maximum_training_storage_amount_upgraded"=>10,
    		"maximum_training_storage_amount"=>5,
    		"maximum_energy_storage_amount_upgraded"=>100,
    		"maximum_energy_storage_amount"=>50,
    		"energy_storage_cost_50"=>2,
		    "energy_storage_cost_100"=>4,
            "ammo_belt_slot1_unlock_premium_currency_amount"=>10,
		    "ammo_belt_slot2_unlock_premium_currency_amount"=>15,
		    "ammo_belt_slot3_unlock_premium_currency_amount"=>20,
		    "ammo_belt_slot4_unlock_premium_currency_amount"=>25,
		    "ammo_belt_min_required_level"=>25,
            "fight_quest_npc_stat_percentage_min_easy"=>0.89,
    		"fight_quest_npc_stat_percentage_max_easy"=>0.94,
    		"fight_quest_npc_stat_percentage_min_medium"=>0.93,
    		"fight_quest_npc_stat_percentage_max_medium"=>0.96,
    		"fight_quest_npc_stat_percentage_min_hard"=>0.97,
    		"fight_quest_npc_stat_percentage_max_hard"=>0.985,
    		"fight_quest_reward_coin_scale_easy"=>1.07,
    		"fight_quest_reward_coin_scale_medium"=>1.35,
    		"fight_quest_reward_coin_scale_hard"=>2,
    		"fight_quest_reward_xp_scale_easy"=>1.07,
    		"fight_quest_reward_xp_scale_medium"=>1.35,
    		"fight_quest_reward_xp_scale_hard"=>2,
    		"fight_quest_reward_lost_xp"=>0.1,
    		"fight_quest_reward_lost_coin"=>0.1,
            "duel_stamina_refresh_amount_per_minute_first_duel"=>2,
		    "duel_stamina_refresh_amount_per_minute"=>0.333334,
		    "duel_single_attack_premium_amount"=>2,
			"league_max_daily_league_fights"=>50,
			"league_stamina_refresh_amount_per_minute_first_fight_nonbooster" => 0.333334,
			"league_stamina_refresh_amount_per_minute_first_fight_booster1" => 0.444445,
			"league_stamina_refresh_amount_per_minute_first_fight_booster2" => 0.666667,
			"league_stamina_refresh_amount_per_minute" => 0.333334,
			"league_stamina_cost"=>20,
			"league_stamina_cost_premium"=>4,
	"league_divisions" => [
		"1" => [
			"identifier" => "bronze3",
			"demotion" => -1,
			"entry_points" => 0,
			"max_points" => 49,
			"group_size" => 100,
			"game_currency_bonus" => 1,
			"base_attribute_bonus" => 0.03
		],
		"2" => [
			"identifier" => "bronze2",
			"demotion" => -1,
			"entry_points" => 50,
			"max_points" => 99,
			"group_size" => 100,
			"game_currency_bonus" => 1.2,
			"base_attribute_bonus" => 0.06
		],
		"3" => [
			"identifier" => "bronze1",
			"demotion" => 0,
			"entry_points" => 100,
			"max_points" => 199,
			"group_size" => 100,
			"game_currency_bonus" => 1.4,
			"base_attribute_bonus" => 0.09
		],
		"4" => [
			"identifier" => "silver3",
			"demotion" => 50,
			"entry_points" => 200,
			"max_points" => 299,
			"group_size" => 100,
			"game_currency_bonus" => 1.6,
			"base_attribute_bonus" => 0.12
		],
		"5" => [
			"identifier" => "silver2",
			"demotion" => 125,
			"entry_points" => 300,
			"max_points" => 399,
			"group_size" => 100,
			"game_currency_bonus" => 1.8,
			"base_attribute_bonus" => 0.15
		],
		"6" => [
			"identifier" => "silver1",
			"demotion" => 250,
			"entry_points" => 400,
			"max_points" => 524,
			"group_size" => 100,
			"game_currency_bonus" => 2,
			"base_attribute_bonus" => 0.18
		],
		"7" => [
			"identifier" => "gold3",
			"demotion" => 400,
			"entry_points" => 525,
			"max_points" => 649,
			"group_size" => 100,
			"game_currency_bonus" => 2.2,
			"base_attribute_bonus" => 0.21
		],
		"8" => [
			"identifier" => "gold2",
			"demotion" => 550,
			"entry_points" => 650,
			"max_points" => 774,
			"group_size" => 100,
			"game_currency_bonus" => 2.4,
			"base_attribute_bonus" => 0.24
		],
		"9" => [
			"identifier" => "gold1",
			"demotion" => 700,
			"entry_points" => 775,
			"max_points" => 899,
			"group_size" => 100,
			"game_currency_bonus" => 2.6,
			"base_attribute_bonus" => 0.27
		],
		"10" => [
			"identifier" => "champion",
			"demotion" => 800,
			"entry_points" => 900,
			"max_points" => 0,
			"group_size" => 0,
			"game_currency_bonus" => 2.8,
			"base_attribute_bonus" => 0.3
		]
	],
            "battle_hp_scale"=>10,
            "booster_sense_costs_premium_currency_amount"=>2,
		    "booster_sense_duration"=>3600,
            "character_show_mask_min_level"=>1,
            "battle_critical_factor"=>2.5,
            "guild_percentage_total_base"=>175,
            "battle_damage_tolerance"=>0.3,
            "item_premium_chance_percentage_common"=>0.15,
            "item_premium_chance_percentage_rare"=>0.5,
            "item_premium_chance_percentage_epic"=>0.5,
            "item_buy_price_premium_common"=>1,
            "item_buy_price_premium_rare"=>4,
            "item_buy_price_premium_epic"=>9,
            "item_sell_price_premium_factor"=>1.25,
            "item_sell_price_percentage"=>0.5,
            "item_stats_per_level"=>3,
            "item_weapon_damage_factor"=>2.7,
            "item_missile_damage_factor"=>3.9,
            "item_level_character_level_min_percentage"=>0.7,
            "level_up_stat_points"=>2,
		    "stage_level_up_premium_amount"=>5,
            "max_level"=>698,
            "levels"=>[
            	1=>['xp'=>0,'rank'=>1],
            	2=>['xp'=>547,'rank'=>2],
            	3=>['xp'=>1458,'rank'=>3],
            	4=>['xp'=>2734,'rank'=>4],
            	5=>['xp'=>4374,'rank'=>5],
            	6=>['xp'=>6379,'rank'=>6],
            	7=>['xp'=>8748,'rank'=>7],
            	8=>['xp'=>11482,'rank'=>8],
            	9=>['xp'=>14580,'rank'=>9],
            	10=>['xp'=>18043,'rank'=>10],
            	11=>['xp'=>21870,'rank'=>11],
            	12=>['xp'=>26062,'rank'=>12],
            	13=>['xp'=>30618,'rank'=>13],
            	14=>['xp'=>35539,'rank'=>14],
            	15=>['xp'=>40824,'rank'=>15],
            	16=>['xp'=>46474,'rank'=>16],
            	17=>['xp'=>52488,'rank'=>17],
            	18=>['xp'=>58867,'rank'=>18],
            	19=>['xp'=>65610,'rank'=>19],
            	20=>['xp'=>72718,'rank'=>20],
            	21=>['xp'=>80190,'rank'=>21],
            	22=>['xp'=>88027,'rank'=>22],
            	23=>['xp'=>96228,'rank'=>23],
            	24=>['xp'=>104794,'rank'=>24],
            	25=>['xp'=>113724,'rank'=>25],
            	26=>['xp'=>123019,'rank'=>26],
            	27=>['xp'=>132678,'rank'=>27],
            	28=>['xp'=>142702,'rank'=>28],
            	29=>['xp'=>153090,'rank'=>29],
            	30=>['xp'=>163843,'rank'=>30],
            	31=>['xp'=>174960,'rank'=>31],
            	32=>['xp'=>186442,'rank'=>32],
            	33=>['xp'=>198288,'rank'=>33],
            	34=>['xp'=>210499,'rank'=>34],
            	35=>['xp'=>223074,'rank'=>35],
            	36=>['xp'=>236014,'rank'=>36],
            	37=>['xp'=>249318,'rank'=>37],
            	38=>['xp'=>262987,'rank'=>38],
            	39=>['xp'=>277020,'rank'=>39],
            	40=>['xp'=>291418,'rank'=>40],
            	41=>['xp'=>306180,'rank'=>41],
            	42=>['xp'=>321307,'rank'=>42],
            	43=>['xp'=>336798,'rank'=>43],
            	44=>['xp'=>352654,'rank'=>44],
            	45=>['xp'=>368874,'rank'=>45],
            	46=>['xp'=>385459,'rank'=>46],
            	47=>['xp'=>402408,'rank'=>47],
            	48=>['xp'=>419722,'rank'=>48],
            	49=>['xp'=>437400,'rank'=>49],
            	50=>['xp'=>455443,'rank'=>50],
            	51=>['xp'=>473850,'rank'=>50],
            	52=>['xp'=>492622,'rank'=>51],
            	53=>['xp'=>511758,'rank'=>51],
            	54=>['xp'=>531259,'rank'=>52],
            	55=>['xp'=>551124,'rank'=>52],
            	56=>['xp'=>571354,'rank'=>53],
            	57=>['xp'=>591948,'rank'=>53],
            	58=>['xp'=>612907,'rank'=>54],
            	59=>['xp'=>634230,'rank'=>54],
            	60=>['xp'=>655918,'rank'=>55],
            	61=>['xp'=>677970,'rank'=>55],
            	62=>['xp'=>700387,'rank'=>56],
            	63=>['xp'=>723168,'rank'=>56],
            	64=>['xp'=>746314,'rank'=>57],
            	65=>['xp'=>769824,'rank'=>57],
            	66=>['xp'=>793699,'rank'=>58],
            	67=>['xp'=>817938,'rank'=>58],
            	68=>['xp'=>842542,'rank'=>59],
            	69=>['xp'=>867510,'rank'=>59],
            	70=>['xp'=>892843,'rank'=>60],
            	71=>['xp'=>918540,'rank'=>60],
            	72=>['xp'=>944602,'rank'=>61],
            	73=>['xp'=>971028,'rank'=>61],
            	74=>['xp'=>997819,'rank'=>62],
            	75=>['xp'=>1024974,'rank'=>62],
            	76=>['xp'=>1052494,'rank'=>63],
            	77=>['xp'=>1080378,'rank'=>63],
            	78=>['xp'=>1108627,'rank'=>64],
            	79=>['xp'=>1137240,'rank'=>64],
            	80=>['xp'=>1166218,'rank'=>65],
            	81=>['xp'=>1195560,'rank'=>65],
            	82=>['xp'=>1225267,'rank'=>66],
            	83=>['xp'=>1255338,'rank'=>66],
            	84=>['xp'=>1285774,'rank'=>67],
            	85=>['xp'=>1316574,'rank'=>67],
            	86=>['xp'=>1347739,'rank'=>68],
            	87=>['xp'=>1379268,'rank'=>68],
            	88=>['xp'=>1411162,'rank'=>69],
            	89=>['xp'=>1443420,'rank'=>69],
            	90=>['xp'=>1476043,'rank'=>70],
            	91=>['xp'=>1509030,'rank'=>70],
            	92=>['xp'=>1542382,'rank'=>71],
            	93=>['xp'=>1576098,'rank'=>71],
            	94=>['xp'=>1610179,'rank'=>72],
            	95=>['xp'=>1644624,'rank'=>72],
            	96=>['xp'=>1679434,'rank'=>73],
            	97=>['xp'=>1714608,'rank'=>73],
            	98=>['xp'=>1750147,'rank'=>74],
            	99=>['xp'=>1786050,'rank'=>74],
            	100=>['xp'=>1822318,'rank'=>75],
            	101=>['xp'=>1858950,'rank'=>75],
            	102=>['xp'=>1895947,'rank'=>76],
            	103=>['xp'=>1933308,'rank'=>76],
            	104=>['xp'=>1971034,'rank'=>77],
            	105=>['xp'=>2009124,'rank'=>77],
            	106=>['xp'=>2047579,'rank'=>78],
            	107=>['xp'=>2086398,'rank'=>78],
            	108=>['xp'=>2125582,'rank'=>79],
            	109=>['xp'=>2165130,'rank'=>79],
            	110=>['xp'=>2205043,'rank'=>80],
            	111=>['xp'=>2245320,'rank'=>80],
            	112=>['xp'=>2285962,'rank'=>81],
            	113=>['xp'=>2326968,'rank'=>81],
            	114=>['xp'=>2368339,'rank'=>82],
            	115=>['xp'=>2410074,'rank'=>82],
            	116=>['xp'=>2452174,'rank'=>83],
            	117=>['xp'=>2494638,'rank'=>83],
            	118=>['xp'=>2537467,'rank'=>84],
            	119=>['xp'=>2580660,'rank'=>84],
            	120=>['xp'=>2624218,'rank'=>85],
            	121=>['xp'=>2668140,'rank'=>85],
            	122=>['xp'=>2712427,'rank'=>86],
            	123=>['xp'=>2757078,'rank'=>86],
            	124=>['xp'=>2802094,'rank'=>87],
            	125=>['xp'=>2847474,'rank'=>87],
            	126=>['xp'=>2893219,'rank'=>88],
            	127=>['xp'=>2939328,'rank'=>88],
            	128=>['xp'=>2985802,'rank'=>89],
            	129=>['xp'=>3032640,'rank'=>89],
            	130=>['xp'=>3079843,'rank'=>90],
            	131=>['xp'=>3127410,'rank'=>90],
            	132=>['xp'=>3175342,'rank'=>91],
            	133=>['xp'=>3223638,'rank'=>91],
            	134=>['xp'=>3272299,'rank'=>92],
            	135=>['xp'=>3321324,'rank'=>92],
            	136=>['xp'=>3370714,'rank'=>93],
            	137=>['xp'=>3420468,'rank'=>93],
            	138=>['xp'=>3470587,'rank'=>94],
            	139=>['xp'=>3521070,'rank'=>94],
            	140=>['xp'=>3571918,'rank'=>95],
            	141=>['xp'=>3623130,'rank'=>95],
            	142=>['xp'=>3674707,'rank'=>96],
            	143=>['xp'=>3726648,'rank'=>96],
            	144=>['xp'=>3778954,'rank'=>97],
            	145=>['xp'=>3831624,'rank'=>97],
            	146=>['xp'=>3884659,'rank'=>98],
            	147=>['xp'=>3938058,'rank'=>98],
            	148=>['xp'=>3991822,'rank'=>99],
            	149=>['xp'=>4045950,'rank'=>99],
            	150=>['xp'=>4100443,'rank'=>100],
            	151=>['xp'=>4155300,'rank'=>100],
            	152=>['xp'=>4210522,'rank'=>100],
            	153=>['xp'=>4266108,'rank'=>101],
            	154=>['xp'=>4322059,'rank'=>101],
            	155=>['xp'=>4378374,'rank'=>101],
            	156=>['xp'=>4435054,'rank'=>102],
            	157=>['xp'=>4492098,'rank'=>102],
            	158=>['xp'=>4549507,'rank'=>102],
            	159=>['xp'=>4607280,'rank'=>103],
            	160=>['xp'=>4665418,'rank'=>103],
            	161=>['xp'=>4723920,'rank'=>103],
            	162=>['xp'=>4782787,'rank'=>104],
            	163=>['xp'=>4842018,'rank'=>104],
            	164=>['xp'=>4901614,'rank'=>104],
            	165=>['xp'=>4961574,'rank'=>105],
            	166=>['xp'=>5021899,'rank'=>105],
            	167=>['xp'=>5082588,'rank'=>105],
            	168=>['xp'=>5143642,'rank'=>106],
            	169=>['xp'=>5205060,'rank'=>106],
            	170=>['xp'=>5266843,'rank'=>106],
            	171=>['xp'=>5328990,'rank'=>107],
            	172=>['xp'=>5391502,'rank'=>107],
            	173=>['xp'=>5454378,'rank'=>107],
            	174=>['xp'=>5517619,'rank'=>108],
            	175=>['xp'=>5581224,'rank'=>108],
            	176=>['xp'=>5645194,'rank'=>108],
            	177=>['xp'=>5709528,'rank'=>109],
            	178=>['xp'=>5774227,'rank'=>109],
            	179=>['xp'=>5839290,'rank'=>109],
            	180=>['xp'=>5904718,'rank'=>110],
            	181=>['xp'=>5970510,'rank'=>110],
            	182=>['xp'=>6036667,'rank'=>110],
            	183=>['xp'=>6103188,'rank'=>111],
            	184=>['xp'=>6170074,'rank'=>111],
            	185=>['xp'=>6237324,'rank'=>111],
            	186=>['xp'=>6304939,'rank'=>112],
            	187=>['xp'=>6372918,'rank'=>112],
            	188=>['xp'=>6441262,'rank'=>112],
            	189=>['xp'=>6509970,'rank'=>113],
            	190=>['xp'=>6579043,'rank'=>113],
            	191=>['xp'=>6648480,'rank'=>113],
            	192=>['xp'=>6718282,'rank'=>114],
            	193=>['xp'=>6788448,'rank'=>114],
            	194=>['xp'=>6858979,'rank'=>114],
            	195=>['xp'=>6929874,'rank'=>115],
            	196=>['xp'=>7001134,'rank'=>115],
            	197=>['xp'=>7072758,'rank'=>115],
            	198=>['xp'=>7144747,'rank'=>115],
            	199=>['xp'=>7217100,'rank'=>115],
            	200=>['xp'=>7289818,'rank'=>116],
            	201=>['xp'=>7362900,'rank'=>116],
            	202=>['xp'=>7436347,'rank'=>116],
            	203=>['xp'=>7510158,'rank'=>116],
            	204=>['xp'=>7584334,'rank'=>116],
            	205=>['xp'=>7658874,'rank'=>117],
            	206=>['xp'=>7733779,'rank'=>117],
            	207=>['xp'=>7809048,'rank'=>117],
            	208=>['xp'=>7884682,'rank'=>117],
            	209=>['xp'=>7960680,'rank'=>117],
            	210=>['xp'=>8037043,'rank'=>118],
            	211=>['xp'=>8113770,'rank'=>118],
            	212=>['xp'=>8190862,'rank'=>118],
            	213=>['xp'=>8268318,'rank'=>118],
            	214=>['xp'=>8346139,'rank'=>118],
            	215=>['xp'=>8424324,'rank'=>119],
            	216=>['xp'=>8502874,'rank'=>119],
            	217=>['xp'=>8581788,'rank'=>119],
            	218=>['xp'=>8661067,'rank'=>119],
            	219=>['xp'=>8740710,'rank'=>119],
            	220=>['xp'=>8820718,'rank'=>120],
            	221=>['xp'=>8901090,'rank'=>120],
            	222=>['xp'=>8981827,'rank'=>120],
            	223=>['xp'=>9062928,'rank'=>120],
            	224=>['xp'=>9144394,'rank'=>120],
            	225=>['xp'=>9226224,'rank'=>121],
            	226=>['xp'=>9308419,'rank'=>121],
            	227=>['xp'=>9390978,'rank'=>121],
            	228=>['xp'=>9473902,'rank'=>121],
            	229=>['xp'=>9557190,'rank'=>121],
            	230=>['xp'=>9640843,'rank'=>122],
            	231=>['xp'=>9724860,'rank'=>122],
            	232=>['xp'=>9809242,'rank'=>122],
            	233=>['xp'=>9893988,'rank'=>122],
            	234=>['xp'=>9979099,'rank'=>122],
            	235=>['xp'=>10064574,'rank'=>123],
            	236=>['xp'=>10150414,'rank'=>123],
            	237=>['xp'=>10236618,'rank'=>123],
            	238=>['xp'=>10323187,'rank'=>123],
            	239=>['xp'=>10410120,'rank'=>123],
            	240=>['xp'=>10497418,'rank'=>124],
            	241=>['xp'=>10585080,'rank'=>124],
            	242=>['xp'=>10673107,'rank'=>124],
            	243=>['xp'=>10761498,'rank'=>124],
            	244=>['xp'=>10850254,'rank'=>124],
            	245=>['xp'=>10939374,'rank'=>125],
            	246=>['xp'=>11028859,'rank'=>125],
            	247=>['xp'=>11118708,'rank'=>125],
            	248=>['xp'=>11208922,'rank'=>125],
            	249=>['xp'=>11299500,'rank'=>125],
            	250=>['xp'=>11618252,'rank'=>126],
            	251=>['xp'=>11941020,'rank'=>126],
            	252=>['xp'=>12267827,'rank'=>126],
            	253=>['xp'=>12598695,'rank'=>126],
            	254=>['xp'=>12933645,'rank'=>126],
            	255=>['xp'=>13272699,'rank'=>126],
            	256=>['xp'=>13615880,'rank'=>126],
            	257=>['xp'=>13963208,'rank'=>126],
            	258=>['xp'=>14314706,'rank'=>126],
            	259=>['xp'=>14670396,'rank'=>126],
            	260=>['xp'=>15030300,'rank'=>127],
            	261=>['xp'=>15394439,'rank'=>127],
            	262=>['xp'=>15762836,'rank'=>127],
            	263=>['xp'=>16135511,'rank'=>127],
            	264=>['xp'=>16512488,'rank'=>127],
            	265=>['xp'=>16893788,'rank'=>127],
            	266=>['xp'=>17279433,'rank'=>127],
            	267=>['xp'=>17669444,'rank'=>127],
            	268=>['xp'=>18063844,'rank'=>127],
            	269=>['xp'=>18462654,'rank'=>127],
            	270=>['xp'=>18865897,'rank'=>128],
            	271=>['xp'=>19273594,'rank'=>128],
            	272=>['xp'=>19685767,'rank'=>128],
            	273=>['xp'=>20102437,'rank'=>128],
            	274=>['xp'=>20523628,'rank'=>128],
            	275=>['xp'=>20949360,'rank'=>128],
            	276=>['xp'=>21379657,'rank'=>128],
            	277=>['xp'=>21814538,'rank'=>128],
            	278=>['xp'=>22254027,'rank'=>128],
            	279=>['xp'=>22698144,'rank'=>128],
            	280=>['xp'=>23146913,'rank'=>129],
            	281=>['xp'=>23600354,'rank'=>129],
            	282=>['xp'=>24058491,'rank'=>129],
            	283=>['xp'=>24521344,'rank'=>129],
            	284=>['xp'=>24988936,'rank'=>129],
            	285=>['xp'=>25461287,'rank'=>129],
            	286=>['xp'=>25938422,'rank'=>129],
            	287=>['xp'=>26420360,'rank'=>129],
            	288=>['xp'=>26907124,'rank'=>129],
            	289=>['xp'=>27398736,'rank'=>129],
            	290=>['xp'=>27895218,'rank'=>130],
            	291=>['xp'=>28396591,'rank'=>130],
            	292=>['xp'=>28902879,'rank'=>130],
            	293=>['xp'=>29414100,'rank'=>130],
            	294=>['xp'=>29930280,'rank'=>130],
            	295=>['xp'=>30451438,'rank'=>130],
            	296=>['xp'=>30977598,'rank'=>130],
            	297=>['xp'=>31508780,'rank'=>130],
            	298=>['xp'=>32045007,'rank'=>130],
            	299=>['xp'=>32586300,'rank'=>130],
            	300=>['xp'=>33132682,'rank'=>131],
            	301=>['xp'=>33684174,'rank'=>131],
            	302=>['xp'=>34240799,'rank'=>131],
            	303=>['xp'=>34802577,'rank'=>131],
            	304=>['xp'=>35369531,'rank'=>131],
            	305=>['xp'=>35941683,'rank'=>131],
            	306=>['xp'=>36519055,'rank'=>131],
            	307=>['xp'=>37101668,'rank'=>131],
            	308=>['xp'=>37689545,'rank'=>131],
            	309=>['xp'=>38282706,'rank'=>131],
            	310=>['xp'=>38881175,'rank'=>132],
            	311=>['xp'=>39484973,'rank'=>132],
            	312=>['xp'=>40094122,'rank'=>132],
            	313=>['xp'=>40708643,'rank'=>132],
            	314=>['xp'=>41328560,'rank'=>132],
            	315=>['xp'=>41953892,'rank'=>132],
            	316=>['xp'=>42584663,'rank'=>132],
            	317=>['xp'=>43220894,'rank'=>132],
            	318=>['xp'=>43862607,'rank'=>132],
            	319=>['xp'=>44509824,'rank'=>132],
            	320=>['xp'=>45162568,'rank'=>133],
            	321=>['xp'=>45820858,'rank'=>133],
            	322=>['xp'=>46484718,'rank'=>133],
            	323=>['xp'=>47154169,'rank'=>133],
            	324=>['xp'=>47829235,'rank'=>133],
            	325=>['xp'=>48509934,'rank'=>133],
            	326=>['xp'=>49196292,'rank'=>133],
            	327=>['xp'=>49888328,'rank'=>133],
            	328=>['xp'=>50586065,'rank'=>133],
            	329=>['xp'=>51289524,'rank'=>133],
            	330=>['xp'=>51998729,'rank'=>134],
            	331=>['xp'=>52713698,'rank'=>134],
            	332=>['xp'=>53434458,'rank'=>134],
            	333=>['xp'=>54161026,'rank'=>134],
            	334=>['xp'=>54893427,'rank'=>134],
            	335=>['xp'=>55631681,'rank'=>134],
            	336=>['xp'=>56375812,'rank'=>134],
            	337=>['xp'=>57125840,'rank'=>134],
            	338=>['xp'=>57881788,'rank'=>134],
            	339=>['xp'=>58643676,'rank'=>134],
            	340=>['xp'=>59411529,'rank'=>135],
            	341=>['xp'=>60185365,'rank'=>135],
            	342=>['xp'=>60965210,'rank'=>135],
            	343=>['xp'=>61751082,'rank'=>135],
            	344=>['xp'=>62543007,'rank'=>135],
            	345=>['xp'=>63341002,'rank'=>135],
            	346=>['xp'=>64145093,'rank'=>135],
            	347=>['xp'=>64955300,'rank'=>135],
            	348=>['xp'=>65771646,'rank'=>135],
            	349=>['xp'=>66594150,'rank'=>135],
            	350=>['xp'=>67422838,'rank'=>136],
            	351=>['xp'=>68257728,'rank'=>136],
            	352=>['xp'=>69098845,'rank'=>136],
            	353=>['xp'=>69946209,'rank'=>136],
            	354=>['xp'=>70799843,'rank'=>136],
            	355=>['xp'=>71659767,'rank'=>136],
            	356=>['xp'=>72526006,'rank'=>136],
            	357=>['xp'=>73398578,'rank'=>136],
            	358=>['xp'=>74277508,'rank'=>136],
            	359=>['xp'=>75162816,'rank'=>136],
            	360=>['xp'=>76054526,'rank'=>137],
            	361=>['xp'=>76952657,'rank'=>137],
            	362=>['xp'=>77857234,'rank'=>137],
            	363=>['xp'=>78768275,'rank'=>137],
            	364=>['xp'=>79685806,'rank'=>137],
            	365=>['xp'=>80609846,'rank'=>137],
            	366=>['xp'=>81540419,'rank'=>137],
            	367=>['xp'=>82477544,'rank'=>137],
            	368=>['xp'=>83421246,'rank'=>137],
            	369=>['xp'=>84371544,'rank'=>137],
            	370=>['xp'=>85328463,'rank'=>138],
            	371=>['xp'=>86292022,'rank'=>138],
            	372=>['xp'=>87262245,'rank'=>138],
            	373=>['xp'=>88239151,'rank'=>138],
            	374=>['xp'=>89222766,'rank'=>138],
            	375=>['xp'=>90213108,'rank'=>138],
            	376=>['xp'=>91210203,'rank'=>138],
            	377=>['xp'=>92214068,'rank'=>138],
            	378=>['xp'=>93224729,'rank'=>138],
            	379=>['xp'=>94242204,'rank'=>138],
            	380=>['xp'=>95266519,'rank'=>139],
            	381=>['xp'=>96297692,'rank'=>139],
            	382=>['xp'=>97335749,'rank'=>139],
            	383=>['xp'=>98380708,'rank'=>139],
            	384=>['xp'=>99432594,'rank'=>139],
            	385=>['xp'=>100491425,'rank'=>139],
            	386=>['xp'=>101557228,'rank'=>139],
            	387=>['xp'=>102630020,'rank'=>139],
            	388=>['xp'=>103709826,'rank'=>139],
            	389=>['xp'=>104796666,'rank'=>139],
            	390=>['xp'=>105890564,'rank'=>140],
            	391=>['xp'=>106991539,'rank'=>140],
            	392=>['xp'=>108099617,'rank'=>140],
            	393=>['xp'=>109214814,'rank'=>140],
            	394=>['xp'=>110337158,'rank'=>140],
            	395=>['xp'=>111466666,'rank'=>140],
            	396=>['xp'=>112603364,'rank'=>140],
            	397=>['xp'=>113747270,'rank'=>140],
            	398=>['xp'=>114898409,'rank'=>140],
            	399=>['xp'=>116056800,'rank'=>140],
            	400=>['xp'=>117222468,'rank'=>141],
            	401=>['xp'=>118395432,'rank'=>141],
            	402=>['xp'=>119575717,'rank'=>141],
            	403=>['xp'=>120763341,'rank'=>141],
            	404=>['xp'=>121958329,'rank'=>141],
            	405=>['xp'=>123160701,'rank'=>141],
            	406=>['xp'=>124370481,'rank'=>141],
            	407=>['xp'=>125587688,'rank'=>141],
            	408=>['xp'=>126812347,'rank'=>141],
            	409=>['xp'=>128044476,'rank'=>141],
            	410=>['xp'=>129284101,'rank'=>141],
            	411=>['xp'=>130531241,'rank'=>141],
            	412=>['xp'=>131785920,'rank'=>141],
            	413=>['xp'=>133048157,'rank'=>141],
            	414=>['xp'=>134317978,'rank'=>141],
            	415=>['xp'=>135595400,'rank'=>141],
            	416=>['xp'=>136880449,'rank'=>141],
            	417=>['xp'=>138173144,'rank'=>141],
            	418=>['xp'=>139473509,'rank'=>141],
            	419=>['xp'=>140781564,'rank'=>141],
            	420=>['xp'=>142097334,'rank'=>141],
            	421=>['xp'=>143420836,'rank'=>141],
            	422=>['xp'=>144752096,'rank'=>141],
            	423=>['xp'=>146091133,'rank'=>141],
            	424=>['xp'=>147437973,'rank'=>141],
            	425=>['xp'=>148792632,'rank'=>141],
            	426=>['xp'=>150155138,'rank'=>141],
            	427=>['xp'=>151525508,'rank'=>141],
            	428=>['xp'=>152903767,'rank'=>141],
            	429=>['xp'=>154289934,'rank'=>141],
            	430=>['xp'=>155684035,'rank'=>141],
            	431=>['xp'=>157086086,'rank'=>141],
            	432=>['xp'=>158496116,'rank'=>141],
            	433=>['xp'=>159914140,'rank'=>141],
            	434=>['xp'=>161340185,'rank'=>141],
            	435=>['xp'=>162774269,'rank'=>141],
            	436=>['xp'=>164216418,'rank'=>141],
            	437=>['xp'=>165666650,'rank'=>141],
            	438=>['xp'=>167124990,'rank'=>141],
            	439=>['xp'=>168591456,'rank'=>141],
            	440=>['xp'=>170066075,'rank'=>141],
            	441=>['xp'=>171548863,'rank'=>141],
            	442=>['xp'=>173039848,'rank'=>141],
            	443=>['xp'=>174539046,'rank'=>141],
            	444=>['xp'=>176046485,'rank'=>141],
            	445=>['xp'=>177562180,'rank'=>141],
            	446=>['xp'=>179086159,'rank'=>141],
            	447=>['xp'=>180618440,'rank'=>141],
            	448=>['xp'=>182159048,'rank'=>141],
            	449=>['xp'=>183708000,'rank'=>141],
            	450=>['xp'=>185265324,'rank'=>141],
            	451=>['xp'=>186831036,'rank'=>141],
            	452=>['xp'=>188405163,'rank'=>141],
            	453=>['xp'=>189987723,'rank'=>141],
            	454=>['xp'=>191578741,'rank'=>141],
            	455=>['xp'=>193178235,'rank'=>141],
            	456=>['xp'=>194786232,'rank'=>141],
            	457=>['xp'=>196402748,'rank'=>141],
            	458=>['xp'=>198027810,'rank'=>141],
            	459=>['xp'=>199661436,'rank'=>141],
            	460=>['xp'=>201303652,'rank'=>141],
            	461=>['xp'=>202954475,'rank'=>141],
            	462=>['xp'=>204613932,'rank'=>141],
            	463=>['xp'=>206282039,'rank'=>141],
            	464=>['xp'=>207958824,'rank'=>141],
            	465=>['xp'=>209644304,'rank'=>141],
            	466=>['xp'=>211338505,'rank'=>141],
            	467=>['xp'=>213041444,'rank'=>141],
            	468=>['xp'=>214753148,'rank'=>141],
            	469=>['xp'=>216473634,'rank'=>141],
            	470=>['xp'=>218202929,'rank'=>141],
            	471=>['xp'=>219941050,'rank'=>141],
            	472=>['xp'=>221688023,'rank'=>141],
            	473=>['xp'=>223443865,'rank'=>141],
            	474=>['xp'=>225208604,'rank'=>141],
            	475=>['xp'=>226982256,'rank'=>141],
            	476=>['xp'=>228764849,'rank'=>141],
            	477=>['xp'=>230556398,'rank'=>141],
            	478=>['xp'=>232356931,'rank'=>141],
            	479=>['xp'=>234166464,'rank'=>141],
            	480=>['xp'=>235985025,'rank'=>141],
            	481=>['xp'=>237812630,'rank'=>141],
            	482=>['xp'=>239649307,'rank'=>141],
            	483=>['xp'=>241495072,'rank'=>141],
            	484=>['xp'=>243349952,'rank'=>141],
            	485=>['xp'=>245213963,'rank'=>141],
            	486=>['xp'=>247087134,'rank'=>141],
            	487=>['xp'=>248969480,'rank'=>141],
            	488=>['xp'=>250861028,'rank'=>141],
            	489=>['xp'=>252761796,'rank'=>141],
            	490=>['xp'=>254671810,'rank'=>141],
            	491=>['xp'=>256591087,'rank'=>141],
            	492=>['xp'=>258519655,'rank'=>141],
            	493=>['xp'=>260457528,'rank'=>141],
            	494=>['xp'=>262404736,'rank'=>141],
            	495=>['xp'=>264361294,'rank'=>141],
            	496=>['xp'=>266327230,'rank'=>141],
            	497=>['xp'=>268302560,'rank'=>141],
            	498=>['xp'=>270287311,'rank'=>141],
            	499=>['xp'=>272281500,'rank'=>141],
            	500=>['xp'=>274285154,'rank'=>141],
            	501=>['xp'=>276298290,'rank'=>141],
            	502=>['xp'=>278320935,'rank'=>141],
            	503=>['xp'=>280353105,'rank'=>141],
            	504=>['xp'=>282394827,'rank'=>141],
            	505=>['xp'=>284446119,'rank'=>141],
            	506=>['xp'=>286507007,'rank'=>141],
            	507=>['xp'=>288577508,'rank'=>141],
            	508=>['xp'=>290657649,'rank'=>141],
            	509=>['xp'=>292747446,'rank'=>141],
            	510=>['xp'=>294846927,'rank'=>141],
            	511=>['xp'=>296956109,'rank'=>141],
            	512=>['xp'=>299075018,'rank'=>141],
            	513=>['xp'=>301203671,'rank'=>141],
            	514=>['xp'=>303342096,'rank'=>141],
            	515=>['xp'=>305490308,'rank'=>141],
            	516=>['xp'=>307648335,'rank'=>141],
            	517=>['xp'=>309816194,'rank'=>141],
            	518=>['xp'=>311993911,'rank'=>141],
            	519=>['xp'=>314181504,'rank'=>141],
            	520=>['xp'=>316379000,'rank'=>141],
            	521=>['xp'=>318586414,'rank'=>141],
            	522=>['xp'=>320803774,'rank'=>141],
            	523=>['xp'=>323031097,'rank'=>141],
            	524=>['xp'=>325268411,'rank'=>141],
            	525=>['xp'=>327515730,'rank'=>141],
            	526=>['xp'=>329773084,'rank'=>141],
            	527=>['xp'=>332040488,'rank'=>141],
            	528=>['xp'=>334317969,'rank'=>141],
            	529=>['xp'=>336605544,'rank'=>141],
            	530=>['xp'=>338903241,'rank'=>141],
            	531=>['xp'=>341211074,'rank'=>141],
            	532=>['xp'=>343529074,'rank'=>141],
            	533=>['xp'=>345857254,'rank'=>141],
            	534=>['xp'=>348195643,'rank'=>141],
            	535=>['xp'=>350544257,'rank'=>141],
            	536=>['xp'=>352903124,'rank'=>141],
            	537=>['xp'=>355272260,'rank'=>141],
            	538=>['xp'=>357651692,'rank'=>141],
            	539=>['xp'=>360041436,'rank'=>141],
            	540=>['xp'=>362441521,'rank'=>141],
            	541=>['xp'=>364851961,'rank'=>141],
            	542=>['xp'=>367272786,'rank'=>141],
            	543=>['xp'=>369704010,'rank'=>141],
            	544=>['xp'=>372145663,'rank'=>141],
            	545=>['xp'=>374597758,'rank'=>141],
            	546=>['xp'=>377060325,'rank'=>141],
            	547=>['xp'=>379533380,'rank'=>141],
            	548=>['xp'=>382016950,'rank'=>141],
            	549=>['xp'=>384511050,'rank'=>141],
            	550=>['xp'=>387015710,'rank'=>141],
            	551=>['xp'=>389530944,'rank'=>141],
            	552=>['xp'=>392056781,'rank'=>141],
            	553=>['xp'=>394593237,'rank'=>141],
            	554=>['xp'=>397140339,'rank'=>141],
            	555=>['xp'=>399698103,'rank'=>141],
            	556=>['xp'=>402266558,'rank'=>141],
            	557=>['xp'=>404845718,'rank'=>141],
            	558=>['xp'=>407435612,'rank'=>141],
            	559=>['xp'=>410036256,'rank'=>141],
            	560=>['xp'=>412647678,'rank'=>141],
            	561=>['xp'=>415269893,'rank'=>141],
            	562=>['xp'=>417902930,'rank'=>141],
            	563=>['xp'=>420546803,'rank'=>141],
            	564=>['xp'=>423201542,'rank'=>141],
            	565=>['xp'=>425867162,'rank'=>141],
            	566=>['xp'=>428543691,'rank'=>141],
            	567=>['xp'=>431231144,'rank'=>141],
            	568=>['xp'=>433929550,'rank'=>141],
            	569=>['xp'=>436638924,'rank'=>141],
            	570=>['xp'=>439359295,'rank'=>141],
            	571=>['xp'=>442090678,'rank'=>141],
            	572=>['xp'=>444833101,'rank'=>141],
            	573=>['xp'=>447586579,'rank'=>141],
            	574=>['xp'=>450351142,'rank'=>141],
            	575=>['xp'=>453126804,'rank'=>141],
            	576=>['xp'=>455913595,'rank'=>141],
            	577=>['xp'=>458711528,'rank'=>141],
            	578=>['xp'=>461520633,'rank'=>141],
            	579=>['xp'=>464340924,'rank'=>141],
            	580=>['xp'=>467172431,'rank'=>141],
            	581=>['xp'=>470015168,'rank'=>141],
            	582=>['xp'=>472869165,'rank'=>141],
            	583=>['xp'=>475734436,'rank'=>141],
            	584=>['xp'=>478611010,'rank'=>141],
            	585=>['xp'=>481498901,'rank'=>141],
            	586=>['xp'=>484398140,'rank'=>141],
            	587=>['xp'=>487308740,'rank'=>141],
            	588=>['xp'=>490230730,'rank'=>141],
            	589=>['xp'=>493164126,'rank'=>141],
            	590=>['xp'=>496108956,'rank'=>141],
            	591=>['xp'=>499065235,'rank'=>141],
            	592=>['xp'=>502032993,'rank'=>141],
            	593=>['xp'=>505012242,'rank'=>141],
            	594=>['xp'=>508003014,'rank'=>141],
            	595=>['xp'=>511005322,'rank'=>141],
            	596=>['xp'=>514019196,'rank'=>141],
            	597=>['xp'=>517044650,'rank'=>141],
            	598=>['xp'=>520081713,'rank'=>141],
            	599=>['xp'=>523130400,'rank'=>141],
            	600=>['xp'=>526190740,'rank'=>141],
            	601=>['xp'=>529262795,'rank'=>141],
            	602=>['xp'=>532346500,'rank'=>141],
            	603=>['xp'=>535441920,'rank'=>141],
            	604=>['xp'=>538549077,'rank'=>141],
            	605=>['xp'=>541667993,'rank'=>141],
            	606=>['xp'=>544798690,'rank'=>141],
            	607=>['xp'=>547941189,'rank'=>141],
            	608=>['xp'=>551095512,'rank'=>141],
            	609=>['xp'=>554261682,'rank'=>141],
            	610=>['xp'=>557439720,'rank'=>141],
            	611=>['xp'=>560629648,'rank'=>141],
            	612=>['xp'=>563831488,'rank'=>141],
            	613=>['xp'=>567045262,'rank'=>141],
            	614=>['xp'=>570270991,'rank'=>141],
            	615=>['xp'=>573508698,'rank'=>141],
            	616=>['xp'=>576758404,'rank'=>141],
            	617=>['xp'=>580020132,'rank'=>141],
            	618=>['xp'=>583293903,'rank'=>141],
            	619=>['xp'=>586579738,'rank'=>141],
            	620=>['xp'=>589877661,'rank'=>141],
            	621=>['xp'=>593187692,'rank'=>141],
            	622=>['xp'=>596509854,'rank'=>141],
            	623=>['xp'=>599844169,'rank'=>141],
            	624=>['xp'=>603190657,'rank'=>141],
            	625=>['xp'=>606549342,'rank'=>141],
            	626=>['xp'=>609920245,'rank'=>141],
            	627=>['xp'=>613303389,'rank'=>141],
            	628=>['xp'=>616698793,'rank'=>141],
            	629=>['xp'=>620106482,'rank'=>141],
            	630=>['xp'=>623526476,'rank'=>141],
            	631=>['xp'=>626958798,'rank'=>141],
            	632=>['xp'=>630403469,'rank'=>141],
            	633=>['xp'=>633860511,'rank'=>141],
            	634=>['xp'=>637329946,'rank'=>141],
            	635=>['xp'=>640811796,'rank'=>141],
            	636=>['xp'=>644306083,'rank'=>141],
            	637=>['xp'=>647812829,'rank'=>141],
            	638=>['xp'=>651332055,'rank'=>141],
            	639=>['xp'=>654863784,'rank'=>141],
            	640=>['xp'=>658408037,'rank'=>141],
            	641=>['xp'=>661964836,'rank'=>141],
            	642=>['xp'=>665534203,'rank'=>141],
            	643=>['xp'=>669116160,'rank'=>141],
            	644=>['xp'=>672710728,'rank'=>141],
            	645=>['xp'=>676317931,'rank'=>141],
            	646=>['xp'=>679937788,'rank'=>141],
            	647=>['xp'=>683570324,'rank'=>141],
            	648=>['xp'=>687215558,'rank'=>141],
            	649=>['xp'=>690873514,'rank'=>141],
            	650=>['xp'=>694544212,'rank'=>141],
            	651=>['xp'=>698227676,'rank'=>141],
            	652=>['xp'=>701923926,'rank'=>141],
            	653=>['xp'=>705632985,'rank'=>141],
            	654=>['xp'=>709354874,'rank'=>141],
            	655=>['xp'=>713089616,'rank'=>141],
            	656=>['xp'=>716837231,'rank'=>141],
            	657=>['xp'=>720597743,'rank'=>141],
            	658=>['xp'=>724371173,'rank'=>141],
            	659=>['xp'=>728157543,'rank'=>141],
            	660=>['xp'=>731956874,'rank'=>141],
            	661=>['xp'=>735769189,'rank'=>141],
            	662=>['xp'=>739594509,'rank'=>141],
            	663=>['xp'=>743432857,'rank'=>141],
            	664=>['xp'=>747284254,'rank'=>141],
            	665=>['xp'=>751148722,'rank'=>141],
            	666=>['xp'=>755026283,'rank'=>141],
            	667=>['xp'=>758916958,'rank'=>141],
            	668=>['xp'=>762820770,'rank'=>141],
            	669=>['xp'=>766737741,'rank'=>141],
            	670=>['xp'=>770667892,'rank'=>141],
            	671=>['xp'=>774611246,'rank'=>141],
            	672=>['xp'=>778567823,'rank'=>141],
            	673=>['xp'=>782537647,'rank'=>141],
            	674=>['xp'=>786520739,'rank'=>141],
            	675=>['xp'=>790517120,'rank'=>141],
            	676=>['xp'=>794526813,'rank'=>141],
            	677=>['xp'=>798549839,'rank'=>141],
            	678=>['xp'=>802586221,'rank'=>141],
            	679=>['xp'=>806635980,'rank'=>141],
            	680=>['xp'=>810699138,'rank'=>141],
            	681=>['xp'=>814775717,'rank'=>141],
            	682=>['xp'=>818865739,'rank'=>141],
            	683=>['xp'=>822969225,'rank'=>141],
            	684=>['xp'=>827086198,'rank'=>141],
            	685=>['xp'=>831216680,'rank'=>141],
            	686=>['xp'=>835360692,'rank'=>141],
            	687=>['xp'=>839518256,'rank'=>141],
            	688=>['xp'=>843689395,'rank'=>141],
            	689=>['xp'=>847874129,'rank'=>141],
            	690=>['xp'=>852072481,'rank'=>141],
            	691=>['xp'=>856284472,'rank'=>141],
            	692=>['xp'=>860510126,'rank'=>141],
            	693=>['xp'=>864749462,'rank'=>141],
            	694=>['xp'=>869002504,'rank'=>141],
            	695=>['xp'=>873269273,'rank'=>141],
            	696=>['xp'=>877549792,'rank'=>141],
            	697=>['xp'=>881844081,'rank'=>141],
            	698=>['xp'=>886152162,'rank'=>141],
            	699=>['xp'=>890474059,'rank'=>141],
            ],
            "quest_max_stage"=>13,
            "stages"=>[
            	1=>[
            		"min_level"=>0
            	],
            	2=>[
            		"min_level"=>10
            	],
            	3=>[
            		"min_level"=>20
            	],
            	4=>[
            		"min_level"=>30
            	],
            	5=>[
            		"min_level"=>40
            	],
            	6=>[
            		"min_level"=>50
            	],
            	7=>[
            		"min_level"=>70
            	],
            	8=>[
            		"min_level"=>90
            	],
            	9=>[
            		"min_level"=>110
            	],
            	10=>[
            		"min_level"=>130
            	],
            	11=>[
            		"min_level"=>160
            	],
            	12=>[
            		"min_level"=>200
            	],
            	13=>[
            		"min_level"=>250
            	]
            ],
            "inventory_bag2_unlock_level"=>15,
            "inventory_bag3_unlock_level"=>35,
            "booster_multitasking_unlock_level"=>50,
    		"multitasking_unlock_premium_amount"=>99,
    		"multitasking_rent_premium_amount"=>9,
    		"multitasking_rent_time_amount"=>604800,
    		"multitasking_free_rent_time_amount"=>432000,
            "boosters"=>[
            	"booster_quest1"=>[
            		"type"=>1,
            		"amount"=>10,
            		"duration"=>172800,
            		"premium_item"=>false
            	],
            	"booster_quest2"=>[
            		"type"=>1,
            		"amount"=>25,
            		"duration"=>345600,
            		"premium_item"=>false
            	],
            	"booster_quest3"=>[
            		"type"=>1,
            		"amount"=>50,
            		"duration"=>604800,
            		"premium_item"=>true
            	],
            	"booster_stats1"=>[
            		"type"=>2,
            		"amount"=>10,
            		"duration"=>172800,
            		"premium_item"=>false
            	],
            	"booster_stats2"=>[
            		"type"=>2,
            		"amount"=>25,
            		"duration"=>345600,
            		"premium_item"=>false
            	],
            	"booster_stats3"=>[
            		"type"=>2,
            		"amount"=>50,
            		"duration"=>604800,
            		"premium_item"=>true
            	],
            	"booster_work1"=>[
            		"type"=>3,
            		"amount"=>10,
            		"duration"=>172800,
            		"premium_item"=>false
            	],
            	"booster_work2"=>[
            		"type"=>3,
            		"amount"=>25,
            		"duration"=>345600,
            		"premium_item"=>false
            	],
            	"booster_work3"=>[
            		"type"=>3,
            		"amount"=>50,
            		"duration"=>604800,
            		"premium_item"=>true
            	]
            ],
            "booster_large_costs_premium_currency"=>10,
			"booster_league1_duration" => 345600,
			"booster_league1_max_league_stamina" => 60,
			"booster_league2_costs_premium_currency_amount" => 10,
			"booster_league2_duration" => 604800,
			"booster_league2_max_league_stamina" => 120,
            "item_quality_chance_rare"=>0.05,
            "item_quality_chance_epic"=>0.01,
            "shop_max_premium_items"=>3,
            "shop_max_rare_items"=>1,
            "shop_max_epic_items"=>1,
            "item_shop_min_level"=>25,
            "cost_stat_base"=>5,
            "cost_stat_scale"=>0.12,
            "cost_stat_base_scale"=>0.85,
            "cost_stat_base_exp"=>2.15,
            "booster_small_costs_time"=>206,
            "booster_medium_costs_time"=>2057,
            "booster_costs_coins_step"=>5,
            "coins_per_time_base"=>0.02,
            "coins_per_time_scale"=>0.01,
            "coins_per_time_level_scale"=>0.35,
            "coins_per_time_level_exp"=>1.55,
            "work_effectiveness_max"=>0.1,
            "work_effectiveness_min"=>0.0501,
            "work_duration_min"=>3600,
            "work_duration_max"=>86400,
            "work_abort_reward_factor"=>0.5,
            "battle_critical_probability_min"=>0.01,
            "battle_critical_probability_base"=>0.02,
            "battle_critical_probability_max"=>1,
            "battle_critical_probability_exp_low"=>20,
            "battle_critical_probability_exp_high"=>1.225,
            "battle_dodge_probability_min"=>0.01,
            "battle_dodge_probability_base"=>0.1,
            "battle_dodge_probability_max"=>0.6,
            "battle_dodge_probability_exp_low"=>5,
            "battle_dodge_probability_exp_high"=>1.65,
            "pvp_honor_win_exp_better"=>3,
            "pvp_honor_win_exp_worse"=>3,
            "guild_battle_tactics"=>[
                1=>[
                    "identifier"=>"order1",
    				"type"=>1,
    				"value1"=>5,
    				"value2"=>null
    			],
    			2=>[
    				"identifier"=>"order2",
    				"type"=>1,
    				"value1"=>5,
    				"value2"=>null
    			],
    			3=>[
    				"identifier"=>"order3",
    				"type"=>1,
    				"value1"=>5,
    				"value2"=>null
    			],
    			4=>[
    				"identifier"=>"order4",
    				"type"=>1,
    				"value1"=>5,
    				"value2"=>null
    			],
    			5=>[
    				"identifier"=>"order5",
    				"type"=>1,
    				"value1"=>5,
    				"value2"=>null
    			],
    			10=>[
    				"identifier"=>"tactic1",
    				"type"=>2,
    				"value1"=>null,
    				"value2"=>null
    			],
    			11=>[
    				"identifier"=>"tactic2",
    				"type"=>2,
    				"value1"=>5,
    				"value2"=>7.5
    			],
    			12=>[
    				"identifier"=>"tactic3",
    				"type"=>2,
    				"value1"=>5,
    				"value2"=>7.5
    			]
    		],
            "guild_battle_attack_cost"=>[
            	1=>0,
            	2=>0,
            	3=>0,
            	4=>0,
            	5=>0,
            	6=>0,
            	7=>100,
            	8=>100,
            	9=>250,
            	10=>250,
            	11=>250,
            	12=>500,
            	13=>500,
            	14=>500,
            	15=>1000,
            	16=>1000,
            	17=>1000,
            	18=>1500,
            	19=>1500,
            	20=>2000,
            	21=>2000,
            	22=>2000,
            	23=>2500,
            	24=>2500,
            	25=>3000,
            	26=>3000,
            	27=>3500,
            	28=>3500,
            	29=>4000,
            	30=>4500,
            	31=>4500,
            	32=>5000,
            	33=>5000,
            	34=>5500,
            	35=>6000,
            	36=>6000,
            	37=>6500,
            	38=>7000,
            	39=>7500,
            	40=>8000,
            	41=>8000,
            	42=>8500,
            	43=>9000,
            	44=>9500,
            	45=>10000,
            	46=>10500,
            	47=>11000,
            	48=>11500,
            	49=>12000,
            	50=>12500,
            	51=>13000,
            	52=>13500,
            	53=>14000,
            	54=>14500,
            	55=>15000,
            	56=>15500,
            	57=>16000,
            	58=>16500,
            	59=>17000,
            	60=>18000,
            	61=>18500,
            	62=>19000,
            	63=>19500,
            	64=>20000,
            	65=>21000,
            	66=>21500,
            	67=>22000,
            	68=>23000,
            	69=>23500,
            	70=>24500,
            	71=>25000,
            	72=>25500,
            	73=>26500,
            	74=>27000,
            	75=>28000,
            	76=>28500,
            	77=>29500,
            	78=>30000,
            	79=>31000,
            	80=>32000,
            	81=>32500,
            	82=>33500,
            	83=>34000,
            	84=>35000,
            	85=>36000,
            	86=>36500,
            	87=>37500,
            	88=>38500,
            	89=>39500,
            	90=>40500,
            	91=>41000,
            	92=>42000,
            	93=>43000,
            	94=>44000,
            	95=>45000,
            	96=>46000,
            	97=>47000,
            	98=>48000,
            	99=>49000,
            	100=>50000,
            	101=>51000,
            	102=>52000,
            	103=>53000,
            	104=>54000,
            	105=>55000,
            	106=>56000,
            	107=>57000,
            	108=>58000,
            	109=>59000,
            	110=>60000,
            	111=>61000,
            	112=>62000,
            	113=>63000,
            	114=>64000,
            	115=>65000,
            	116=>66000,
            	117=>67000,
            	118=>68000,
            	119=>69000,
            	120=>70000
            ],
            "guild_battle_preparation_time"=>9,
            "guild_dungeon_preparation_time"=>4,
            "pvp_honor_lose_amount"=>0.75,
            "pvp_honor_lose_max"=>0.05,
            "pvp_waiting_time"=>600,
            "pvp_effectiveness_won"=>0.3,
            "quest_max_refill_amount_per_day"=>1000,
            "quest_energy_refill_amount"=>200,
            "quest_energy_refill1_cost_factor"=>1800,
            "quest_energy_refill2_cost_factor"=>6300,
            "quest_energy_refill3_cost_factor"=>10800,
            "quest_energy_refill4_cost_factor"=>15300,
            "duel_stamina_reset_premium_amount"=>8,
            "quest_energy_refill_premium_amount"=>2,
            "training_stat_increase_value"=>5,
            "training_to_level_ratio"=>0.25,
            "training_min_sessions"=>3,
            "training_max_sessions"=>10,
            "guild_name_length_min"=>3,
            "guild_name_length_max"=>25,
            "guild_creation_cost_game_currency"=>500,
            "init_stat_guild_capacity"=>10,
            "init_stat_character_base_stats_boost"=>1,
            "init_stat_quest_xp_reward_boost"=>1,
            "init_stat_quest_game_currency_reward_boost"=>1,
            "quest_refresh_single_stage_premium_currency_amount"=>2,
            "quest_refresh_all_stages_reduction_factor"=>0.5,
            "max_stat_guild_capacity"=>30,
            "max_stat_character_base_stats_boost"=>50,
            "max_stat_quest_xp_reward_boost"=>50,
            "max_stat_quest_game_currency_reward_boost"=>50,
            "guild_stat_guild_capacity_costs"=>[
            	10=>[
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	],
            	11=>[
            		"game_currency_cost"=>400,
            		"premium_currency_cost"=>0
            	],
            	12=>[
            		"game_currency_cost"=>1200,
            		"premium_currency_cost"=>0
            	],
            	13=>[
            		"game_currency_cost"=>3000,
            		"premium_currency_cost"=>0
            	],
            	14=>[
            		"game_currency_cost"=>7000,
            		"premium_currency_cost"=>0
            	],
            	15=>[
            		"game_currency_cost"=>10000,
            		"premium_currency_cost"=>5
            	],
            	16=>[
            		"game_currency_cost"=>16000,
            		"premium_currency_cost"=>20
            	],
            	17=>[
            		"game_currency_cost"=>22000,
            		"premium_currency_cost"=>35
            	],
            	18=>[
            		"game_currency_cost"=>30000,
            		"premium_currency_cost"=>55
            	],
            	19=>[
            		"game_currency_cost"=>36000,
            		"premium_currency_cost"=>70
            	],
            	20=>[
            		"game_currency_cost"=>42000,
            		"premium_currency_cost"=>85
            	],
            	21=>[
            		"game_currency_cost"=>50000,
            		"premium_currency_cost"=>105
            	],
            	22=>[
            		"game_currency_cost"=>56000,
            		"premium_currency_cost"=>120
            	],
            	23=>[
            		"game_currency_cost"=>64000,
            		"premium_currency_cost"=>135
            	],
            	24=>[
            		"game_currency_cost"=>80000,
            		"premium_currency_cost"=>150
            	],
            	25=>[
            		"game_currency_cost"=>100000,
            		"premium_currency_cost"=>175
            	],
            	26=>[
            		"game_currency_cost"=>180000,
            		"premium_currency_cost"=>200
            	],
            	27=>[
            		"game_currency_cost"=>320000,
            		"premium_currency_cost"=>225
            	],
            	28=>[
            		"game_currency_cost"=>500000,
            		"premium_currency_cost"=>250
            	],
            	29=>[
            		"game_currency_cost"=>700000,
            		"premium_currency_cost"=>275
            	],
            	30=>[
            		"game_currency_cost"=>820000,
            		"premium_currency_cost"=>300
            	]
            ],
            "guild_stat_character_base_stats_boost_costs"=>[
            	1=>[
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	],
            	2=>[
            		"game_currency_cost"=>400,
            		"premium_currency_cost"=>0
            	],
            	3=>[
            		"game_currency_cost"=>600,
            		"premium_currency_cost"=>0
            	],
            	4=>[
            		"game_currency_cost"=>800,
            		"premium_currency_cost"=>0
            	],
            	5=>[
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	6=>[
            		"game_currency_cost"=>1200,
            		"premium_currency_cost"=>0
            	],
            	7=>[
            		"game_currency_cost"=>1600,
            		"premium_currency_cost"=>0
            	],
            	8=>[
            		"game_currency_cost"=>2000,
            		"premium_currency_cost"=>0
            	],
            	9=>[
            		"game_currency_cost"=>3000,
            		"premium_currency_cost"=>0
            	],
            	10=>[
            		"game_currency_cost"=>4000,
            		"premium_currency_cost"=>0
            	],
            	11=>[
            		"game_currency_cost"=>5000,
            		"premium_currency_cost"=>0
            	],
            	12=>[
            		"game_currency_cost"=>6000,
            		"premium_currency_cost"=>0
            	],
            	13=>[
            		"game_currency_cost"=>7000,
            		"premium_currency_cost"=>0
            	],
            	14=>[
            		"game_currency_cost"=>8000,
            		"premium_currency_cost"=>0
            	],
            	15=>[
            		"game_currency_cost"=>9000,
            		"premium_currency_cost"=>0
            	],
            	16=>[
            		"game_currency_cost"=>10000,
            		"premium_currency_cost"=>5
            	],
            	17=>[
            		"game_currency_cost"=>12000,
            		"premium_currency_cost"=>10
            	],
            	18=>[
            		"game_currency_cost"=>14000,
            		"premium_currency_cost"=>15
            	],
            	19=>[
            		"game_currency_cost"=>16000,
            		"premium_currency_cost"=>20
            	],
            	20=>[
            		"game_currency_cost"=>18000,
            		"premium_currency_cost"=>25
            	],
            	21=>[
            		"game_currency_cost"=>20000,
            		"premium_currency_cost"=>30
            	],
            	22=>[
            		"game_currency_cost"=>22000,
            		"premium_currency_cost"=>35
            	],
            	23=>[
            		"game_currency_cost"=>24000,
            		"premium_currency_cost"=>40
            	],
            	24=>[
            		"game_currency_cost"=>26000,
            		"premium_currency_cost"=>45
            	],
            	25=>[
            		"game_currency_cost"=>28000,
            		"premium_currency_cost"=>50
            	],
            	26=>[
            		"game_currency_cost"=>30000,
            		"premium_currency_cost"=>55
            	],
            	27=>[
            		"game_currency_cost"=>32000,
            		"premium_currency_cost"=>60
            	],
            	28=>[
            		"game_currency_cost"=>34000,
            		"premium_currency_cost"=>65
            	],
            	29=>[
            		"game_currency_cost"=>36000,
            		"premium_currency_cost"=>70
            	],
            	30=>[
            		"game_currency_cost"=>38000,
            		"premium_currency_cost"=>75
            	],
            	31=>[
            		"game_currency_cost"=>40000,
            		"premium_currency_cost"=>80
            	],
            	32=>[
            		"game_currency_cost"=>42000,
            		"premium_currency_cost"=>85
            	],
            	33=>[
            		"game_currency_cost"=>44000,
            		"premium_currency_cost"=>90
            	],
            	34=>[
            		"game_currency_cost"=>46000,
            		"premium_currency_cost"=>95
            	],
            	35=>[
            		"game_currency_cost"=>48000,
            		"premium_currency_cost"=>100
            	],
            	36=>[
            		"game_currency_cost"=>50000,
            		"premium_currency_cost"=>105
            	],
            	37=>[
            		"game_currency_cost"=>52000,
            		"premium_currency_cost"=>110
            	],
            	38=>[
            		"game_currency_cost"=>54000,
            		"premium_currency_cost"=>115
            	],
            	39=>[
            		"game_currency_cost"=>56000,
            		"premium_currency_cost"=>120
            	],
            	40=>[
            		"game_currency_cost"=>58000,
            		"premium_currency_cost"=>125
            	],
            	41=>[
            		"game_currency_cost"=>60000,
            		"premium_currency_cost"=>130
            	],
            	42=>[
            		"game_currency_cost"=>64000,
            		"premium_currency_cost"=>135
            	],
            	43=>[
            		"game_currency_cost"=>68000,
            		"premium_currency_cost"=>140
            	],
            	44=>[
            		"game_currency_cost"=>72000,
            		"premium_currency_cost"=>145
            	],
            	45=>[
            		"game_currency_cost"=>76000,
            		"premium_currency_cost"=>150
            	],
            	46=>[
            		"game_currency_cost"=>80000,
            		"premium_currency_cost"=>155
            	],
            	47=>[
            		"game_currency_cost"=>85000,
            		"premium_currency_cost"=>160
            	],
            	48=>[
            		"game_currency_cost"=>90000,
            		"premium_currency_cost"=>165
            	],
            	49=>[
            		"game_currency_cost"=>95000,
            		"premium_currency_cost"=>170
            	],
            	50=>[
            		"game_currency_cost"=>100000,
            		"premium_currency_cost"=>175
            	]
            ],
            "guild_stat_quest_xp_reward_boost_costs"=>[
            	1=>[
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	],
            	2=>[
            		"game_currency_cost"=>400,
            		"premium_currency_cost"=>0
            	],
            	3=>[
            		"game_currency_cost"=>600,
            		"premium_currency_cost"=>0
            	],
            	4=>[
            		"game_currency_cost"=>800,
            		"premium_currency_cost"=>0
            	],
            	5=>[
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	6=>[
            		"game_currency_cost"=>1200,
            		"premium_currency_cost"=>0
            	],
            	7=>[
            		"game_currency_cost"=>1600,
            		"premium_currency_cost"=>0
            	],
            	8=>[
            		"game_currency_cost"=>2000,
            		"premium_currency_cost"=>0
            	],
            	9=>[
            		"game_currency_cost"=>3000,
            		"premium_currency_cost"=>0
            	],
            	10=>[
            		"game_currency_cost"=>4000,
            		"premium_currency_cost"=>0
            	],
            	11=>[
            		"game_currency_cost"=>5000,
            		"premium_currency_cost"=>0
            	],
            	12=>[
            		"game_currency_cost"=>6000,
            		"premium_currency_cost"=>0
            	],
            	13=>[
            		"game_currency_cost"=>7000,
            		"premium_currency_cost"=>0
            	],
            	14=>[
            		"game_currency_cost"=>8000,
            		"premium_currency_cost"=>0
            	],
            	15=>[
            		"game_currency_cost"=>9000,
            		"premium_currency_cost"=>0
            	],
            	16=>[
            		"game_currency_cost"=>10000,
            		"premium_currency_cost"=>5
            	],
            	17=>[
            		"game_currency_cost"=>12000,
            		"premium_currency_cost"=>10
            	],
            	18=>[
            		"game_currency_cost"=>14000,
            		"premium_currency_cost"=>15
            	],
            	19=>[
            		"game_currency_cost"=>16000,
            		"premium_currency_cost"=>20
            	],
            	20=>[
            		"game_currency_cost"=>18000,
            		"premium_currency_cost"=>25
            	],
            	21=>[
            		"game_currency_cost"=>20000,
            		"premium_currency_cost"=>30
            	],
            	22=>[
            		"game_currency_cost"=>22000,
            		"premium_currency_cost"=>35
            	],
            	23=>[
            		"game_currency_cost"=>24000,
            		"premium_currency_cost"=>40
            	],
            	24=>[
            		"game_currency_cost"=>26000,
            		"premium_currency_cost"=>45
            	],
            	25=>[
            		"game_currency_cost"=>28000,
            		"premium_currency_cost"=>50
            	],
            	26=>[
            		"game_currency_cost"=>30000,
            		"premium_currency_cost"=>55
            	],
            	27=>[
            		"game_currency_cost"=>32000,
            		"premium_currency_cost"=>60
            	],
            	28=>[
            		"game_currency_cost"=>34000,
            		"premium_currency_cost"=>65
            	],
            	29=>[
            		"game_currency_cost"=>36000,
            		"premium_currency_cost"=>70
            	],
            	30=>[
            		"game_currency_cost"=>38000,
            		"premium_currency_cost"=>75
            	],
            	31=>[
            		"game_currency_cost"=>40000,
            		"premium_currency_cost"=>80
            	],
            	32=>[
            		"game_currency_cost"=>42000,
            		"premium_currency_cost"=>85
            	],
            	33=>[
            		"game_currency_cost"=>44000,
            		"premium_currency_cost"=>90
            	],
            	34=>[
            		"game_currency_cost"=>46000,
            		"premium_currency_cost"=>95
            	],
            	35=>[
            		"game_currency_cost"=>48000,
            		"premium_currency_cost"=>100
            	],
            	36=>[
            		"game_currency_cost"=>50000,
            		"premium_currency_cost"=>105
            	],
            	37=>[
            		"game_currency_cost"=>52000,
            		"premium_currency_cost"=>110
            	],
            	38=>[
            		"game_currency_cost"=>54000,
            		"premium_currency_cost"=>115
            	],
            	39=>[
            		"game_currency_cost"=>56000,
            		"premium_currency_cost"=>120
            	],
            	40=>[
            		"game_currency_cost"=>58000,
            		"premium_currency_cost"=>125
            	],
            	41=>[
            		"game_currency_cost"=>60000,
            		"premium_currency_cost"=>130
            	],
            	42=>[
            		"game_currency_cost"=>64000,
            		"premium_currency_cost"=>135
            	],
            	43=>[
            		"game_currency_cost"=>68000,
            		"premium_currency_cost"=>140
            	],
            	44=>[
            		"game_currency_cost"=>72000,
            		"premium_currency_cost"=>145
            	],
            	45=>[
            		"game_currency_cost"=>76000,
            		"premium_currency_cost"=>150
            	],
            	46=>[
            		"game_currency_cost"=>80000,
            		"premium_currency_cost"=>155
            	],
            	47=>[
            		"game_currency_cost"=>85000,
            		"premium_currency_cost"=>160
            	],
            	48=>[
            		"game_currency_cost"=>90000,
            		"premium_currency_cost"=>165
            	],
            	49=>[
            		"game_currency_cost"=>95000,
            		"premium_currency_cost"=>170
            	],
            	50=>[
            		"game_currency_cost"=>100000,
            		"premium_currency_cost"=>175
            	]
            ],
            "guild_stat_quest_game_currency_reward_boost_costs"=>[
            	1=>[
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	],
            	2=>[
            		"game_currency_cost"=>400,
            		"premium_currency_cost"=>0
            	],
            	3=>[
            		"game_currency_cost"=>600,
            		"premium_currency_cost"=>0
            	],
            	4=>[
            		"game_currency_cost"=>800,
            		"premium_currency_cost"=>0
            	],
            	5=>[
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	6=>[
            		"game_currency_cost"=>1200,
            		"premium_currency_cost"=>0
            	],
            	7=>[
            		"game_currency_cost"=>1600,
            		"premium_currency_cost"=>0
            	],
            	8=>[
            		"game_currency_cost"=>2000,
            		"premium_currency_cost"=>0
            	],
            	9=>[
            		"game_currency_cost"=>3000,
            		"premium_currency_cost"=>0
            	],
            	10=>[
            		"game_currency_cost"=>4000,
            		"premium_currency_cost"=>0
            	],
            	11=>[
            		"game_currency_cost"=>5000,
            		"premium_currency_cost"=>0
            	],
            	12=>[
            		"game_currency_cost"=>6000,
            		"premium_currency_cost"=>0
            	],
            	13=>[
            		"game_currency_cost"=>7000,
            		"premium_currency_cost"=>0
            	],
            	14=>[
            		"game_currency_cost"=>8000,
            		"premium_currency_cost"=>0
            	],
            	15=>[
            		"game_currency_cost"=>9000,
            		"premium_currency_cost"=>0
            	],
            	16=>[
            		"game_currency_cost"=>10000,
            		"premium_currency_cost"=>5
            	],
            	17=>[
            		"game_currency_cost"=>12000,
            		"premium_currency_cost"=>10
            	],
            	18=>[
            		"game_currency_cost"=>14000,
            		"premium_currency_cost"=>15
            	],
            	19=>[
            		"game_currency_cost"=>16000,
            		"premium_currency_cost"=>20
            	],
            	20=>[
            		"game_currency_cost"=>18000,
            		"premium_currency_cost"=>25
            	],
            	21=>[
            		"game_currency_cost"=>20000,
            		"premium_currency_cost"=>30
            	],
            	22=>[
            		"game_currency_cost"=>22000,
            		"premium_currency_cost"=>35
            	],
            	23=>[
            		"game_currency_cost"=>24000,
            		"premium_currency_cost"=>40
            	],
            	24=>[
            		"game_currency_cost"=>26000,
            		"premium_currency_cost"=>45
            	],
            	25=>[
            		"game_currency_cost"=>28000,
            		"premium_currency_cost"=>50
            	],
            	26=>[
            		"game_currency_cost"=>30000,
            		"premium_currency_cost"=>55
            	],
            	27=>[
            		"game_currency_cost"=>32000,
            		"premium_currency_cost"=>60
            	],
            	28=>[
            		"game_currency_cost"=>34000,
            		"premium_currency_cost"=>65
            	],
            	29=>[
            		"game_currency_cost"=>36000,
            		"premium_currency_cost"=>70
            	],
            	30=>[
            		"game_currency_cost"=>38000,
            		"premium_currency_cost"=>75
            	],
            	31=>[
            		"game_currency_cost"=>40000,
            		"premium_currency_cost"=>80
            	],
            	32=>[
            		"game_currency_cost"=>42000,
            		"premium_currency_cost"=>85
            	],
            	33=>[
            		"game_currency_cost"=>44000,
            		"premium_currency_cost"=>90
            	],
            	34=>[
            		"game_currency_cost"=>46000,
            		"premium_currency_cost"=>95
            	],
            	35=>[
            		"game_currency_cost"=>48000,
            		"premium_currency_cost"=>100
            	],
            	36=>[
            		"game_currency_cost"=>50000,
            		"premium_currency_cost"=>105
            	],
            	37=>[
            		"game_currency_cost"=>52000,
            		"premium_currency_cost"=>110
            	],
            	38=>[
            		"game_currency_cost"=>54000,
            		"premium_currency_cost"=>115
            	],
            	39=>[
            		"game_currency_cost"=>56000,
            		"premium_currency_cost"=>120
            	],
            	40=>[
            		"game_currency_cost"=>58000,
            		"premium_currency_cost"=>125
            	],
            	41=>[
            		"game_currency_cost"=>60000,
            		"premium_currency_cost"=>130
            	],
            	42=>[
            		"game_currency_cost"=>64000,
            		"premium_currency_cost"=>135
            	],
            	43=>[
            		"game_currency_cost"=>68000,
            		"premium_currency_cost"=>140
            	],
            	44=>[
            		"game_currency_cost"=>72000,
            		"premium_currency_cost"=>145
            	],
            	45=>[
            		"game_currency_cost"=>76000,
            		"premium_currency_cost"=>150
            	],
            	46=>[
            		"game_currency_cost"=>80000,
            		"premium_currency_cost"=>155
            	],
            	47=>[
            		"game_currency_cost"=>85000,
            		"premium_currency_cost"=>160
            	],
            	48=>[
            		"game_currency_cost"=>90000,
            		"premium_currency_cost"=>165
            	],
            	49=>[
            		"game_currency_cost"=>95000,
            		"premium_currency_cost"=>170
            	],
            	50=>[
            		"game_currency_cost"=>100000,
            		"premium_currency_cost"=>175
            	]
            ],
            "guild_background_layers"=>[
            	0=>[
            		"type"=>"room",
            		"value"=>0,
            		"asset_identifier"=>"room1"
            	],
            	1=>[
            		"type"=>"room",
            		"value"=>10,
            		"asset_identifier"=>"room2"
            	],
            	2=>[
            		"type"=>"room",
            		"value"=>25,
            		"asset_identifier"=>"room3"
            	],
            	3=>[
            		"type"=>"room",
            		"value"=>50,
            		"asset_identifier"=>"room4"
            	],
            	4=>[
            		"type"=>"room",
            		"value"=>75,
            		"asset_identifier"=>"room5"
            	],
            	5=>[
            		"type"=>"room",
            		"value"=>100,
            		"asset_identifier"=>"room6"
            	],
            	6=>[
            		"type"=>"heroes",
            		"value"=>0,
            		"asset_identifier"=>"heroes1"
            	],
            	7=>[
            		"type"=>"heroes",
            		"value"=>10,
            		"asset_identifier"=>"heroes2"
            	],
            	8=>[
            		"type"=>"heroes",
            		"value"=>25,
            		"asset_identifier"=>"heroes3"
            	],
            	9=>[
            		"type"=>"heroes",
            		"value"=>50,
            		"asset_identifier"=>"heroes4"
            	],
            	10=>[
            		"type"=>"heroes",
            		"value"=>75,
            		"asset_identifier"=>"heroes5"
            	],
            	11=>[
            		"type"=>"heroes",
            		"value"=>100,
            		"asset_identifier"=>"heroes6"
            	],
            	12=>[
            		"type"=>"equipment",
            		"value"=>1,
            		"asset_identifier"=>"equipment1"
            	],
            	13=>[
            		"type"=>"equipment",
            		"value"=>5,
            		"asset_identifier"=>"equipment2"
            	],
            	14=>[
            		"type"=>"equipment",
            		"value"=>12,
            		"asset_identifier"=>"equipment3"
            	],
            	15=>[
            		"type"=>"equipment",
            		"value"=>25,
            		"asset_identifier"=>"equipment4"
            	],
            	16=>[
            		"type"=>"equipment",
            		"value"=>37,
            		"asset_identifier"=>"equipment5"
            	],
            	17=>[
            		"type"=>"equipment",
            		"value"=>50,
            		"asset_identifier"=>"equipment6"
            	],
            	18=>[
            		"type"=>"motivation",
            		"value"=>1,
            		"asset_identifier"=>"motivation1"
            	],
            	19=>[
            		"type"=>"motivation",
            		"value"=>5,
            		"asset_identifier"=>"motivation2"
            	],
            	20=>[
            		"type"=>"motivation",
            		"value"=>12,
            		"asset_identifier"=>"motivation3"
            	],
            	21=>[
            		"type"=>"motivation",
            		"value"=>25,
            		"asset_identifier"=>"motivation4"
            	],
            	22=>[
            		"type"=>"motivation",
            		"value"=>37,
            		"asset_identifier"=>"motivation5"
            	],
            	23=>[
            		"type"=>"motivation",
            		"value"=>50,
            		"asset_identifier"=>"motivation6"
            	],
            	24=>[
            		"type"=>"popularity",
            		"value"=>1,
            		"asset_identifier"=>"popularity1"
            	],
            	25=>[
            		"type"=>"popularity",
            		"value"=>5,
            		"asset_identifier"=>"popularity2"
            	],
            	26=>[
            		"type"=>"popularity",
            		"value"=>12,
            		"asset_identifier"=>"popularity3"
            	],
            	27=>[
            		"type"=>"popularity",
            		"value"=>25,
            		"asset_identifier"=>"popularity4"
            	],
            	28=>[
            		"type"=>"popularity",
            		"value"=>37,
            		"asset_identifier"=>"popularity5"
            	],
            	29=>[
            		"type"=>"popularity",
            		"value"=>50,
            		"asset_identifier"=>"popularity6"
            	],
            	30=>[
            		"type"=>"quarter_a",
            		"value"=>10,
            		"asset_identifier"=>"quarterA1"
            	],
            	31=>[
            		"type"=>"quarter_a",
            		"value"=>13,
            		"asset_identifier"=>"quarterA2"
            	],
            	32=>[
            		"type"=>"quarter_a",
            		"value"=>16,
            		"asset_identifier"=>"quarterA3"
            	],
            	33=>[
            		"type"=>"quarter_a",
            		"value"=>19,
            		"asset_identifier"=>"quarterA4"
            	],
            	34=>[
            		"type"=>"quarter_a",
            		"value"=>22,
            		"asset_identifier"=>"quarterA5"
            	],
            	35=>[
            		"type"=>"quarter_a",
            		"value"=>25,
            		"asset_identifier"=>"quarterA6"
            	],
            	36=>[
            		"type"=>"quarter_b",
            		"value"=>10,
            		"asset_identifier"=>"quarterB1"
            	],
            	37=>[
            		"type"=>"quarter_b",
            		"value"=>13,
            		"asset_identifier"=>"quarterB2"
            	],
            	38=>[
            		"type"=>"quarter_b",
            		"value"=>16,
            		"asset_identifier"=>"quarterB3"
            	],
            	39=>[
            		"type"=>"quarter_b",
            		"value"=>19,
            		"asset_identifier"=>"quarterB4"
            	],
            	40=>[
            		"type"=>"quarter_b",
            		"value"=>22,
            		"asset_identifier"=>"quarterB5"
            	],
            	41=>[
            		"type"=>"quarter_b",
            		"value"=>25,
            		"asset_identifier"=>"quarterB6"
            	]
            ],
            "guild_auto_joins_premium_currency_amount_package1"=>15,
            "guild_auto_joins_amount_package1"=>5,
            "guild_auto_joins_premium_currency_amount_package2"=>37,
            "guild_auto_joins_amount_package2"=>25,
            "guild_auto_joins_premium_currency_amount_package3"=>99,
            "guild_auto_joins_amount_package3"=>100,
            "guild_battle_missile_damage_factor"=>3,
            "guild_missile_premium_currency_amount"=>3,
            "guild_rename_premium_currency_amount"=>100,
            "guild_arena_backgrounds"=>[
            	1=>[
            		"index"=>1,
            		"asset_identifier"=>"default",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	],
            	2=>[
            		"index"=>2,
            		"asset_identifier"=>"wallmart",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>100
            	],
            	3=>[
            		"index"=>3,
            		"asset_identifier"=>"roof",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>100
            	],
            	4=>[
            		"index"=>4,
            		"asset_identifier"=>"subway",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>100
            	],
            	5=>[
            		"index"=>5,
            		"asset_identifier"=>"scrapyard",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>100
            	]
            ],
            "guild_emblem_colors"=>[
            	0=>"#000000",
            	1=>"#232323",
            	2=>"#5A5A5A",
            	3=>"#AFAFAF",
            	4=>"#FDFDFD",
            	5=>"#F470A1",
            	6=>"#1B0C5D",
            	7=>"#390E67",
            	8=>"#F49BDD",
            	9=>"#EA501B",
            	10=>"#28AAEB",
            	11=>"#F4EA25",
            	12=>"#F4F9B4",
            	13=>"#AC97C7",
            	14=>"#4D861D",
            	15=>"#0AAE61",
            	16=>"#87CE22",
            	17=>"#F8FB60",
            	18=>"#FA8608",
            	19=>"#B61A0C",
            	20=>"#1B3385",
            	21=>"#E9285B",
            	22=>"#2665AA",
            	23=>"#8BCEE8",
            	24=>"#7AEB86",
            	25=>"#7A3F06",
            	26=>"#A21F23",
            	27=>"#DAA670",
            	28=>"#C2BAA3",
            	29=>"#3FE2EA"
            ],
            "guild_emblem_backgrounds"=>[
            	1=>[
            		"index"=>1,
            		"asset_identifier"=>"stopsign",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	],
            	2=>[
            		"index"=>2,
            		"asset_identifier"=>"circle_1",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	3=>[
            		"index"=>3,
            		"asset_identifier"=>"oval",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	4=>[
            		"index"=>4,
            		"asset_identifier"=>"square",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	5=>[
            		"index"=>5,
            		"asset_identifier"=>"diamond",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	6=>[
            		"index"=>6,
            		"asset_identifier"=>"diamond_down",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	7=>[
            		"index"=>7,
            		"asset_identifier"=>"diamond_up",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	8=>[
            		"index"=>8,
            		"asset_identifier"=>"house",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	9=>[
            		"index"=>10,
            		"asset_identifier"=>"star",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	10=>[
            		"index"=>11,
            		"asset_identifier"=>"ball",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	11=>[
            		"index"=>12,
            		"asset_identifier"=>"heart",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	12=>[
            		"index"=>13,
            		"asset_identifier"=>"police",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	13=>[
            		"index"=>14,
            		"asset_identifier"=>"diamond_wings",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	14=>[
            		"index"=>15,
            		"asset_identifier"=>"triangle_down",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	15=>[
            		"index"=>16,
            		"asset_identifier"=>"triangle_up",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	16=>[
            		"index"=>22,
            		"asset_identifier"=>"triangle",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>50
            	],
            	17=>[
            		"index"=>23,
            		"asset_identifier"=>"500donuts",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>50
            	],
            	18=>[
            		"index"=>19,
            		"asset_identifier"=>"sun",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	19=>[
            		"index"=>20,
            		"asset_identifier"=>"shield_combat",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	20=>[
            		"index"=>24,
            		"asset_identifier"=>"shield_eagle",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>50
            	],
            	21=>[
            		"index"=>25,
            		"asset_identifier"=>"city",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>50
            	],
            	22=>[
            		"index"=>26,
            		"asset_identifier"=>"shield_wings",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>50
            	],
            	23=>[
            		"index"=>9,
            		"asset_identifier"=>"shield_new1",
            		"game_currency_cost"=>2000,
            		"premium_currency_cost"=>0
            	],
            	24=>[
            		"index"=>17,
            		"asset_identifier"=>"shield_new2",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	25=>[
            		"index"=>21,
            		"asset_identifier"=>"shield_new3",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	26=>[
            		"index"=>18,
            		"asset_identifier"=>"shield_new5",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	27=>[
            		"index"=>27,
            		"asset_identifier"=>"shield_new6",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>50
            	],
            	901=>[
            		"index"=>901,
            		"asset_identifier"=>"rtl_back",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	]
            ],
            "guild_emblem_icons"=>[
            	1=>[
            		"index"=>1,
            		"asset_identifier"=>"circle",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	],
            	2=>[
            		"index"=>2,
            		"asset_identifier"=>"circle_empty",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	],
            	3=>[
            		"index"=>3,
            		"asset_identifier"=>"butterfly",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	4=>[
            		"index"=>4,
            		"asset_identifier"=>"cloverleaf",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	5=>[
            		"index"=>5,
            		"asset_identifier"=>"duck",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	6=>[
            		"index"=>6,
            		"asset_identifier"=>"spade",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	7=>[
            		"index"=>7,
            		"asset_identifier"=>"female",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	8=>[
            		"index"=>8,
            		"asset_identifier"=>"male",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	9=>[
            		"index"=>9,
            		"asset_identifier"=>"flash",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	10=>[
            		"index"=>10,
            		"asset_identifier"=>"lipstick",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	11=>[
            		"index"=>11,
            		"asset_identifier"=>"music",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	12=>[
            		"index"=>12,
            		"asset_identifier"=>"puzzle",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	13=>[
            		"index"=>13,
            		"asset_identifier"=>"question_mark",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	14=>[
            		"index"=>14,
            		"asset_identifier"=>"exclamation_mark",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	15=>[
            		"index"=>15,
            		"asset_identifier"=>"wrench",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	16=>[
            		"index"=>16,
            		"asset_identifier"=>"A",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	17=>[
            		"index"=>17,
            		"asset_identifier"=>"B",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	18=>[
            		"index"=>18,
            		"asset_identifier"=>"C",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	19=>[
            		"index"=>19,
            		"asset_identifier"=>"D",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	20=>[
            		"index"=>20,
            		"asset_identifier"=>"E",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	21=>[
            		"index"=>21,
            		"asset_identifier"=>"F",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	22=>[
            		"index"=>22,
            		"asset_identifier"=>"G",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	23=>[
            		"index"=>23,
            		"asset_identifier"=>"H",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	24=>[
            		"index"=>24,
            		"asset_identifier"=>"I",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	25=>[
            		"index"=>25,
            		"asset_identifier"=>"J",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	26=>[
            		"index"=>26,
            		"asset_identifier"=>"K",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	27=>[
            		"index"=>27,
            		"asset_identifier"=>"L",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	28=>[
            		"index"=>28,
            		"asset_identifier"=>"M",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	29=>[
            		"index"=>29,
            		"asset_identifier"=>"N",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	30=>[
            		"index"=>30,
            		"asset_identifier"=>"O",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	31=>[
            		"index"=>31,
            		"asset_identifier"=>"P",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	32=>[
            		"index"=>32,
            		"asset_identifier"=>"Q",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	33=>[
            		"index"=>33,
            		"asset_identifier"=>"R",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	34=>[
            		"index"=>34,
            		"asset_identifier"=>"S",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	35=>[
            		"index"=>35,
            		"asset_identifier"=>"T",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	36=>[
            		"index"=>36,
            		"asset_identifier"=>"U",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	37=>[
            		"index"=>37,
            		"asset_identifier"=>"V",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	38=>[
            		"index"=>38,
            		"asset_identifier"=>"W",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	39=>[
            		"index"=>39,
            		"asset_identifier"=>"X",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	40=>[
            		"index"=>40,
            		"asset_identifier"=>"Y",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	41=>[
            		"index"=>41,
            		"asset_identifier"=>"Z",
            		"game_currency_cost"=>1000,
            		"premium_currency_cost"=>0
            	],
            	42=>[
            		"index"=>46,
            		"asset_identifier"=>"atom",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	43=>[
            		"index"=>47,
            		"asset_identifier"=>"boy",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	44=>[
            		"index"=>48,
            		"asset_identifier"=>"nuclear",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	45=>[
            		"index"=>49,
            		"asset_identifier"=>"fist",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	46=>[
            		"index"=>50,
            		"asset_identifier"=>"wrath1",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	47=>[
            		"index"=>51,
            		"asset_identifier"=>"wrath2",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	48=>[
            		"index"=>52,
            		"asset_identifier"=>"wreath3",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	49=>[
            		"index"=>55,
            		"asset_identifier"=>"donut",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	50=>[
            		"index"=>56,
            		"asset_identifier"=>"flying_cape",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	51=>[
            		"index"=>57,
            		"asset_identifier"=>"flying_heros",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	52=>[
            		"index"=>58,
            		"asset_identifier"=>"lion",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	53=>[
            		"index"=>59,
            		"asset_identifier"=>"male_female",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	54=>[
            		"index"=>60,
            		"asset_identifier"=>"muscleman",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	55=>[
            		"index"=>61,
            		"asset_identifier"=>"posing_hero1",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	56=>[
            		"index"=>62,
            		"asset_identifier"=>"posing_hero2",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	57=>[
            		"index"=>63,
            		"asset_identifier"=>"ankh",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	58=>[
            		"index"=>64,
            		"asset_identifier"=>"rune1",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	59=>[
            		"index"=>65,
            		"asset_identifier"=>"rune2",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	60=>[
            		"index"=>66,
            		"asset_identifier"=>"rune3",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	61=>[
            		"index"=>67,
            		"asset_identifier"=>"tikimask",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	62=>[
            		"index"=>68,
            		"asset_identifier"=>"omega",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	63=>[
            		"index"=>69,
            		"asset_identifier"=>"dice",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	64=>[
            		"index"=>70,
            		"asset_identifier"=>"chess_tower",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	65=>[
            		"index"=>71,
            		"asset_identifier"=>"chess_horse",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	66=>[
            		"index"=>72,
            		"asset_identifier"=>"chess_farmer",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	67=>[
            		"index"=>73,
            		"asset_identifier"=>"bomb",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	68=>[
            		"index"=>74,
            		"asset_identifier"=>"eye_ra",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	69=>[
            		"index"=>75,
            		"asset_identifier"=>"sword_stone",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	70=>[
            		"index"=>76,
            		"asset_identifier"=>"ironmanmask",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	71=>[
            		"index"=>42,
            		"asset_identifier"=>"fork_spoon",
            		"game_currency_cost"=>2000,
            		"premium_currency_cost"=>0
            	],
            	72=>[
            		"index"=>43,
            		"asset_identifier"=>"propeller",
            		"game_currency_cost"=>2000,
            		"premium_currency_cost"=>0
            	],
            	73=>[
            		"index"=>44,
            		"asset_identifier"=>"eye",
            		"game_currency_cost"=>2000,
            		"premium_currency_cost"=>0
            	],
            	74=>[
            		"index"=>77,
            		"asset_identifier"=>"eaglehead1",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	75=>[
            		"index"=>78,
            		"asset_identifier"=>"bat",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	76=>[
            		"index"=>79,
            		"asset_identifier"=>"hammer",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	77=>[
            		"index"=>80,
            		"asset_identifier"=>"wingstar",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	78=>[
            		"index"=>81,
            		"asset_identifier"=>"spider",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	79=>[
            		"index"=>53,
            		"asset_identifier"=>"eaglehead2",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	80=>[
            		"index"=>45,
            		"asset_identifier"=>"feather",
            		"game_currency_cost"=>2000,
            		"premium_currency_cost"=>0
            	],
            	81=>[
            		"index"=>82,
            		"asset_identifier"=>"maskhead",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>25
            	],
            	82=>[
            		"index"=>54,
            		"asset_identifier"=>"horsehead",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>10
            	],
            	901=>[
            		"index"=>901,
            		"asset_identifier"=>"rtl_front",
            		"game_currency_cost"=>0,
            		"premium_currency_cost"=>0
            	]
            ],
            "duel_stamina_cost"=>20,
            "training_duration"=>300,
            "bank_upgrade1_premium_amount"=>25,
            "bank_upgrade2_premium_amount"=>50,
            "bank_upgrade3_premium_amount"=>50,
            "bank_upgrade4_premium_amount"=>50,
            "washing_machine_req_level"=>20,
            "washing_machine_premium_currency_amount"=>1,
            "character"=>[
            	"appearances"=>[
            		"m"=>[
            			"skin_color"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7
            			],
            			"hair_color"=>[
            				0=>1
            			],
            			"hair_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>0,
            				7=>7,
            				8=>8,
            				9=>9,
            				10=>10,
            				11=>11,
            				12=>12,
            				13=>13,
            				14=>14,
            				15=>15,
            				16=>16,
            				17=>17,
            				18=>18,
            				19=>19,
            				20=>20,
            				21=>21,
            				22=>22,
            				23=>23,
            				24=>24,
            				25=>25,
            				26=>26,
            				27=>27,
            				28=>28,
            				29=>29,
            				30=>30,
            				31=>31,
            				32=>32,
            				33=>33,
            				34=>34,
            				35=>35,
            				36=>36,
            				37=>37,
            				38=>38,
            				39=>39,
            				40=>40,
            				41=>41,
            				42=>42,
            				43=>43,
            				44=>44,
            				45=>45,
            				46=>46,
            				47=>47,
            				48=>48,
            				49=>49,
            				50=>50,
            				51=>51,
            				52=>52,
            				53=>53,
            				54=>54,
            				55=>55,
            				56=>56,
            				57=>57
            			],
            			"hair_back"=>[
            				0=>false,
            				1=>false,
            				2=>false,
            				3=>true,
            				4=>true,
            				5=>true,
            				6=>false,
            				7=>false,
            				8=>false,
            				9=>false,
            				10=>false,
            				11=>false,
            				12=>false,
            				13=>false,
            				14=>false,
            				15=>false,
            				16=>false,
            				17=>false,
            				18=>false,
            				19=>false,
            				20=>false,
            				21=>false,
            				22=>true,
            				23=>true,
            				24=>true,
            				25=>false,
            				26=>false,
            				27=>false,
            				28=>false,
            				29=>false,
            				30=>false,
            				31=>false,
            				32=>false,
            				33=>false,
            				34=>false,
            				35=>false,
            				36=>false,
            				37=>false,
            				38=>false,
            				39=>false,
            				40=>false,
            				41=>false,
            				42=>false,
            				43=>false,
            				44=>false,
            				45=>false,
            				46=>false,
            				47=>false,
            				48=>false,
            				49=>false,
            				50=>false,
            				51=>false,
            				52=>false,
            				53=>false,
            				54=>false,
            				55=>false,
            				56=>false,
            				57=>false
            			],
            			"head_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6
            			],
            			"eyes_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10,
            				10=>11
            			],
            			"eyebrows_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10,
            				10=>11,
            				11=>12,
            				12=>13,
            				13=>14
            			],
            			"nose_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10,
            				10=>11
            			],
            			"mouth_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10,
            				10=>11,
            				11=>12
            			],
            			"facial_hair_type"=>[
            				0=>0,
            				1=>1,
            				2=>2,
            				3=>3
            			],
            			"decoration_type"=>[
            				0=>0,
            				1=>1,
            				2=>2,
            				3=>3,
            				4=>4,
            				5=>5,
            				6=>6
            			]
            		],
            		"f"=>[
            			"skin_color"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7
            			],
            			"hair_color"=>[
            				0=>1
            			],
            			"hair_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10,
            				10=>11,
            				11=>12,
            				12=>13,
            				13=>14,
            				14=>15,
            				15=>16,
            				16=>17,
            				17=>18,
            				18=>19,
            				19=>20,
            				20=>21,
            				21=>22,
            				22=>23,
            				23=>24,
            				24=>25,
            				25=>26,
            				26=>27,
            				27=>28,
            				28=>29,
            				29=>30,
            				30=>31,
            				31=>32,
            				32=>33,
            				33=>34,
            				34=>35,
            				35=>36,
            				36=>37,
            				37=>38,
            				38=>39,
            				39=>40,
            				40=>41,
            				41=>42,
            				42=>43,
            				43=>44,
            				44=>45,
            				45=>46,
            				46=>47,
            				47=>48,
            				48=>49,
            				49=>50,
            				50=>51,
            				51=>52,
            				52=>53,
            				53=>54,
            				54=>55,
            				55=>56,
            				56=>57,
            				57=>58,
            				58=>59,
            				59=>60,
            				60=>61
            			],
            			"hair_back"=>[
            				0=>true,
            				1=>true,
            				2=>true,
            				3=>false,
            				4=>false,
            				5=>false,
            				6=>false,
            				7=>false,
            				8=>false,
            				9=>false,
            				10=>false,
            				11=>false,
            				12=>false,
            				13=>false,
            				14=>false,
            				15=>true,
            				16=>true,
            				17=>true,
            				18=>false,
            				19=>false,
            				20=>false,
            				21=>true,
            				22=>true,
            				23=>true,
            				24=>true,
            				25=>true,
            				26=>true,
            				27=>true,
            				28=>true,
            				29=>true,
            				30=>true,
            				31=>true,
            				32=>true,
            				33=>true,
            				34=>false,
            				35=>false,
            				36=>false,
            				37=>false,
            				38=>false,
            				39=>false,
            				40=>false,
            				41=>false,
            				42=>false,
            				43=>false,
            				44=>false,
            				45=>false,
            				46=>true,
            				47=>true,
            				48=>true,
            				49=>false,
            				50=>false,
            				51=>false,
            				52=>true,
            				53=>true,
            				54=>true,
            				55=>true,
            				56=>true,
            				57=>true,
            				58=>true,
            				59=>true,
            				60=>true
            			],
            			"head_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5
            			],
            			"eyes_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10,
            				10=>11,
            				11=>12
            			],
            			"eyebrows_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10,
            				10=>11,
            				11=>12,
            				12=>13,
            				13=>14,
            				14=>15,
            				15=>16,
            				16=>17,
            				17=>18,
            				18=>19,
            				19=>20,
            				20=>21
            			],
            			"nose_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10
            			],
            			"mouth_type"=>[
            				0=>1,
            				1=>2,
            				2=>3,
            				3=>4,
            				4=>5,
            				5=>6,
            				6=>7,
            				7=>8,
            				8=>9,
            				9=>10,
            				10=>11,
            				11=>12
            			],
            			"facial_hair_type"=>[
            			],
            			"decoration_type"=>[
            				0=>0,
            				1=>1,
            				2=>2,
            				3=>3,
            				4=>4,
            				5=>5,
            				6=>6,
            				7=>7,
            				8=>8
            			]
            		]
            	]
            ],
	"hideout_rooms" => [
		"main_building" => [
			"limit" => 1,
			"unlock_with_mainbuilding_1" => 0,
			"unlock_with_mainbuilding_2" => 0,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 3,
			"type" => "main_building",
			"index" => 1,
			"levels" => [
	"1" => [
		"price_gold" => 0,
		"price_glue" => 1,
		"price_stone" => 2,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 100,
		"passiv_bonus_amount_2" => 200,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"2" => [
		"price_gold" => 0,
		"price_glue" => 2,
		"price_stone" => 5,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 200,
		"passiv_bonus_amount_2" => 400,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.1
	],
	"3" => [
		"price_gold" => 0,
		"price_glue" => 5,
		"price_stone" => 10,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 500,
		"passiv_bonus_amount_2" => 1000,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.2
	],
	"4" => [
		"price_gold" => 0,
		"price_glue" => 300,
		"price_stone" => 870,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 1300,
		"passiv_bonus_amount_2" => 2600,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.3
	],
	"5" => [
		"price_gold" => 0,
		"price_glue" => 1200,
		"price_stone" => 2580,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 3200,
		"passiv_bonus_amount_2" => 6400,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.4
	],
	"6" => [
		"price_gold" => 0,
		"price_glue" => 2500,
		"price_stone" => 6280,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 6700,
		"passiv_bonus_amount_2" => 13400,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.5
	],
	"7" => [
		"price_gold" => 0,
		"price_glue" => 6670,
		"price_stone" => 13330,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 12800,
		"passiv_bonus_amount_2" => 25600,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.6
	],
	"8" => [
		"price_gold" => 0,
		"price_glue" => 12790,
		"price_stone" => 25580,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 22800,
		"passiv_bonus_amount_2" => 45600,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.7
	],
	"9" => [
		"price_gold" => 0,
		"price_glue" => 22730,
		"price_stone" => 45460,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 38100,
		"passiv_bonus_amount_2" => 76200,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.8
	],
	"10" => [
		"price_gold" => 0,
		"price_glue" => 38020,
		"price_stone" => 76030,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 60600,
		"passiv_bonus_amount_2" => 121200,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1.9
	],
	"11" => [
		"price_gold" => 0,
		"price_glue" => 60540,
		"price_stone" => 121070,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 92600,
		"passiv_bonus_amount_2" => 185200,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2
	],
	"12" => [
		"price_gold" => 0,
		"price_glue" => 92570,
		"price_stone" => 185130,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 136900,
		"passiv_bonus_amount_2" => 273800,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.1
	],
	"13" => [
		"price_gold" => 0,
		"price_glue" => 136810,
		"price_stone" => 273630,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 196500,
		"passiv_bonus_amount_2" => 393000,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.2
	],
	"14" => [
		"price_gold" => 0,
		"price_glue" => 196440,
		"price_stone" => 392870,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 275100,
		"passiv_bonus_amount_2" => 550200,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.3
	],
	"15" => [
		"price_gold" => 0,
		"price_glue" => 275090,
		"price_stone" => 550180,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 377000,
		"passiv_bonus_amount_2" => 754000,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.4
	],
	"16" => [
		"price_gold" => 0,
		"price_glue" => 376950,
		"price_stone" => 753890,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 506800,
		"passiv_bonus_amount_2" => 1013600,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.5
	],
	"17" => [
		"price_gold" => 0,
		"price_glue" => 506750,
		"price_stone" => 1013490,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 669900,
		"passiv_bonus_amount_2" => 1339800,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.6
	],
	"18" => [
		"price_gold" => 0,
		"price_glue" => 669820,
		"price_stone" => 1339630,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 872200,
		"passiv_bonus_amount_2" => 1744400,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.7
	],
	"19" => [
		"price_gold" => 0,
		"price_glue" => 872100,
		"price_stone" => 1744200,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 1120300,
		"passiv_bonus_amount_2" => 2240600,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.8
	],
	"20" => [
		"price_gold" => 0,
		"price_glue" => 1120200,
		"price_stone" => 2240410,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 1421500,
		"passiv_bonus_amount_2" => 2843000,
		"min_till_max_resource" => 480,
		"resource_production_max" => 2.9
	]
			]
		],
		"stone_production" => [
			"limit" => 2,
			"unlock_with_mainbuilding_1" => 2,
			"unlock_with_mainbuilding_2" => 5,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 1,
			"type" => "resource_production",
			"index" => 2,
			"levels" => [
	"1" => [
		"price_gold" => 0,
		"price_glue" => 5,
		"price_stone" => 0,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 15,
		"resource_production_max" => 300
	],
	"2" => [
		"price_gold" => 100,
		"price_glue" => 10,
		"price_stone" => 0,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 30,
		"resource_production_max" => 640
	],
	"3" => [
		"price_gold" => 700,
		"price_glue" => 110,
		"price_stone" => 0,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 60,
		"resource_production_max" => 1320
	],
	"4" => [
		"price_gold" => 2600,
		"price_glue" => 430,
		"price_stone" => 0,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 90,
		"resource_production_max" => 2080
	],
	"5" => [
		"price_gold" => 7000,
		"price_glue" => 1290,
		"price_stone" => 0,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 120,
		"resource_production_max" => 2880
	],
	"6" => [
		"price_gold" => 15900,
		"price_glue" => 3140,
		"price_stone" => 0,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 150,
		"resource_production_max" => 3760
	],
	"7" => [
		"price_gold" => 31800,
		"price_glue" => 6670,
		"price_stone" => 0,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 180,
		"resource_production_max" => 4680
	],
	"8" => [
		"price_gold" => 57900,
		"price_glue" => 12790,
		"price_stone" => 0,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 210,
		"resource_production_max" => 5680
	],
	"9" => [
		"price_gold" => 98400,
		"price_glue" => 22730,
		"price_stone" => 0,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 240,
		"resource_production_max" => 6720
	],
	"10" => [
		"price_gold" => 158100,
		"price_glue" => 38020,
		"price_stone" => 0,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 270,
		"resource_production_max" => 7840
	],
	"11" => [
		"price_gold" => 242800,
		"price_glue" => 60540,
		"price_stone" => 0,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 300,
		"resource_production_max" => 9000
	],
	"12" => [
		"price_gold" => 359200,
		"price_glue" => 92570,
		"price_stone" => 0,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 330,
		"resource_production_max" => 10240
	],
	"13" => [
		"price_gold" => 514900,
		"price_glue" => 136810,
		"price_stone" => 0,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 360,
		"resource_production_max" => 11520
	],
	"14" => [
		"price_gold" => 718700,
		"price_glue" => 196440,
		"price_stone" => 0,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 390,
		"resource_production_max" => 12880
	],
	"15" => [
		"price_gold" => 980300,
		"price_glue" => 275090,
		"price_stone" => 0,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 420,
		"resource_production_max" => 14280
	],
	"16" => [
		"price_gold" => 1310700,
		"price_glue" => 376950,
		"price_stone" => 0,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 450,
		"resource_production_max" => 15760
	],
	"17" => [
		"price_gold" => 1721800,
		"price_glue" => 506750,
		"price_stone" => 0,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 17280
	],
	"18" => [
		"price_gold" => 2226900,
		"price_glue" => 669820,
		"price_stone" => 0,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 510,
		"resource_production_max" => 18880
	],
	"19" => [
		"price_gold" => 2840300,
		"price_glue" => 872100,
		"price_stone" => 0,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 540,
		"resource_production_max" => 20520
	],
	"20" => [
		"price_gold" => 3577700,
		"price_glue" => 1120200,
		"price_stone" => 0,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 570,
		"resource_production_max" => 22240
	]
			]
		],
		"glue_production" => [
			"limit" => 2,
			"unlock_with_mainbuilding_1" => 2,
			"unlock_with_mainbuilding_2" => 5,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 1,
			"type" => "resource_production",
			"index" => 3,
			"levels" => [
	"1" => [
		"price_gold" => 0,
		"price_glue" => 0,
		"price_stone" => 10,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 15,
		"resource_production_max" => 150
	],
	"2" => [
		"price_gold" => 100,
		"price_glue" => 0,
		"price_stone" => 30,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 30,
		"resource_production_max" => 320
	],
	"3" => [
		"price_gold" => 700,
		"price_glue" => 0,
		"price_stone" => 210,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 60,
		"resource_production_max" => 660
	],
	"4" => [
		"price_gold" => 2600,
		"price_glue" => 0,
		"price_stone" => 870,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 90,
		"resource_production_max" => 1040
	],
	"5" => [
		"price_gold" => 7000,
		"price_glue" => 0,
		"price_stone" => 2580,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 120,
		"resource_production_max" => 1440
	],
	"6" => [
		"price_gold" => 15900,
		"price_glue" => 0,
		"price_stone" => 6280,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 150,
		"resource_production_max" => 1880
	],
	"7" => [
		"price_gold" => 31800,
		"price_glue" => 0,
		"price_stone" => 13330,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 180,
		"resource_production_max" => 2340
	],
	"8" => [
		"price_gold" => 57900,
		"price_glue" => 0,
		"price_stone" => 25580,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 210,
		"resource_production_max" => 2840
	],
	"9" => [
		"price_gold" => 98400,
		"price_glue" => 0,
		"price_stone" => 45460,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 240,
		"resource_production_max" => 3360
	],
	"10" => [
		"price_gold" => 158100,
		"price_glue" => 0,
		"price_stone" => 76030,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 270,
		"resource_production_max" => 3920
	],
	"11" => [
		"price_gold" => 242800,
		"price_glue" => 0,
		"price_stone" => 121070,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 300,
		"resource_production_max" => 4500
	],
	"12" => [
		"price_gold" => 359200,
		"price_glue" => 0,
		"price_stone" => 185130,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 330,
		"resource_production_max" => 5120
	],
	"13" => [
		"price_gold" => 514900,
		"price_glue" => 0,
		"price_stone" => 273630,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 360,
		"resource_production_max" => 5760
	],
	"14" => [
		"price_gold" => 718700,
		"price_glue" => 0,
		"price_stone" => 392870,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 390,
		"resource_production_max" => 6440
	],
	"15" => [
		"price_gold" => 980300,
		"price_glue" => 0,
		"price_stone" => 550180,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 420,
		"resource_production_max" => 7140
	],
	"16" => [
		"price_gold" => 1310700,
		"price_glue" => 0,
		"price_stone" => 753890,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 450,
		"resource_production_max" => 7880
	],
	"17" => [
		"price_gold" => 1721800,
		"price_glue" => 0,
		"price_stone" => 1013490,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 8640
	],
	"18" => [
		"price_gold" => 2226900,
		"price_glue" => 0,
		"price_stone" => 1339630,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 510,
		"resource_production_max" => 9440
	],
	"19" => [
		"price_gold" => 2840300,
		"price_glue" => 0,
		"price_stone" => 1744200,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 540,
		"resource_production_max" => 10260
	],
	"20" => [
		"price_gold" => 3577700,
		"price_glue" => 0,
		"price_stone" => 2240410,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 570,
		"resource_production_max" => 11120
	]
			]
		],
		"wall" => [
			"limit" => 1,
			"unlock_with_mainbuilding_1" => 3,
			"unlock_with_mainbuilding_2" => 0,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 2,
			"type" => "battle",
			"index" => 5,
			"levels" => [
	"1" => [
		"price_gold" => 200,
		"price_glue" => 0,
		"price_stone" => 20,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 2,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"2" => [
		"price_gold" => 4500,
		"price_glue" => 10,
		"price_stone" => 30,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 3,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"3" => [
		"price_gold" => 28100,
		"price_glue" => 50,
		"price_stone" => 200,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 4,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"4" => [
		"price_gold" => 102400,
		"price_glue" => 220,
		"price_stone" => 820,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 5,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"5" => [
		"price_gold" => 279500,
		"price_glue" => 650,
		"price_stone" => 2450,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 6,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"6" => [
		"price_gold" => 634900,
		"price_glue" => 1570,
		"price_stone" => 5970,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 7,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"7" => [
		"price_gold" => 1270500,
		"price_glue" => 3330,
		"price_stone" => 12670,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 8,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"8" => [
		"price_gold" => 2317000,
		"price_glue" => 6400,
		"price_stone" => 24310,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 9,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"9" => [
		"price_gold" => 3936600,
		"price_glue" => 11370,
		"price_stone" => 43190,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 10,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"10" => [
		"price_gold" => 6324600,
		"price_glue" => 19010,
		"price_stone" => 72230,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 11,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"11" => [
		"price_gold" => 9711700,
		"price_glue" => 30270,
		"price_stone" => 115020,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 12,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"12" => [
		"price_gold" => 14366300,
		"price_glue" => 46280,
		"price_stone" => 175880,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 13,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"13" => [
		"price_gold" => 20595600,
		"price_glue" => 68410,
		"price_stone" => 259940,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 14,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"14" => [
		"price_gold" => 28747900,
		"price_glue" => 98220,
		"price_stone" => 373230,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 15,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"15" => [
		"price_gold" => 39214000,
		"price_glue" => 137540,
		"price_stone" => 522670,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 16,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"16" => [
		"price_gold" => 52428800,
		"price_glue" => 188470,
		"price_stone" => 716200,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 17,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"17" => [
		"price_gold" => 68873200,
		"price_glue" => 253370,
		"price_stone" => 962820,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 18,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"18" => [
		"price_gold" => 89075100,
		"price_glue" => 334910,
		"price_stone" => 1272650,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 19,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"19" => [
		"price_gold" => 113611200,
		"price_glue" => 436050,
		"price_stone" => 1656990,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 20,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"20" => [
		"price_gold" => 143108400,
		"price_glue" => 560100,
		"price_stone" => 2128390,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 21,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	]
			]
		],
		"attacker_production" => [
			"limit" => 2,
			"unlock_with_mainbuilding_1" => 2,
			"unlock_with_mainbuilding_2" => 7,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 1,
			"type" => "battle",
			"index" => 4,
			"levels" => [
	"1" => [
		"price_gold" => 0,
		"price_glue" => 10,
		"price_stone" => 20,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 1,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 1
	],
	"2" => [
		"price_gold" => 200,
		"price_glue" => 0,
		"price_stone" => 30,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 2,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 2
	],
	"3" => [
		"price_gold" => 1400,
		"price_glue" => 30,
		"price_stone" => 190,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 3,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 3
	],
	"4" => [
		"price_gold" => 5100,
		"price_glue" => 110,
		"price_stone" => 780,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 4,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 4
	],
	"5" => [
		"price_gold" => 14000,
		"price_glue" => 320,
		"price_stone" => 2320,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 5,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 5
	],
	"6" => [
		"price_gold" => 31700,
		"price_glue" => 790,
		"price_stone" => 5650,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 6,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 6
	],
	"7" => [
		"price_gold" => 63500,
		"price_glue" => 1670,
		"price_stone" => 12000,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 7,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 7
	],
	"8" => [
		"price_gold" => 115900,
		"price_glue" => 3200,
		"price_stone" => 23030,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 8,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 8
	],
	"9" => [
		"price_gold" => 196800,
		"price_glue" => 5680,
		"price_stone" => 40920,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 9,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 9
	],
	"10" => [
		"price_gold" => 316200,
		"price_glue" => 9500,
		"price_stone" => 68430,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 10,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 10
	],
	"11" => [
		"price_gold" => 485600,
		"price_glue" => 15130,
		"price_stone" => 108960,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 11,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 11
	],
	"12" => [
		"price_gold" => 718300,
		"price_glue" => 23140,
		"price_stone" => 166620,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 12,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 12
	],
	"13" => [
		"price_gold" => 1029800,
		"price_glue" => 34200,
		"price_stone" => 246260,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 13,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 13
	],
	"14" => [
		"price_gold" => 1437400,
		"price_glue" => 49110,
		"price_stone" => 353580,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 14,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 14
	],
	"15" => [
		"price_gold" => 1960700,
		"price_glue" => 68770,
		"price_stone" => 495160,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 15,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 15
	],
	"16" => [
		"price_gold" => 2621400,
		"price_glue" => 94240,
		"price_stone" => 678500,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 16,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 16
	],
	"17" => [
		"price_gold" => 3443700,
		"price_glue" => 126690,
		"price_stone" => 912140,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 17,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 17
	],
	"18" => [
		"price_gold" => 4453800,
		"price_glue" => 167450,
		"price_stone" => 1205670,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 18,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 18
	],
	"19" => [
		"price_gold" => 5680600,
		"price_glue" => 218030,
		"price_stone" => 1569780,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 19,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 19
	],
	"20" => [
		"price_gold" => 7155400,
		"price_glue" => 280050,
		"price_stone" => 2016370,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 20,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 20
	]
			]
		],
		"barracks" => [
			"limit" => 1,
			"unlock_with_mainbuilding_1" => 7,
			"unlock_with_mainbuilding_2" => 0,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 1,
			"type" => "battle",
			"index" => 9,
			"levels" => [
	"1" => [
		"price_gold" => 100,
		"price_glue" => 0,
		"price_stone" => 10,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 2,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"2" => [
		"price_gold" => 1100,
		"price_glue" => 0,
		"price_stone" => 30,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 3,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"3" => [
		"price_gold" => 7000,
		"price_glue" => 30,
		"price_stone" => 200,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 4,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"4" => [
		"price_gold" => 25600,
		"price_glue" => 130,
		"price_stone" => 820,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 5,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"5" => [
		"price_gold" => 69900,
		"price_glue" => 390,
		"price_stone" => 2450,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 6,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"6" => [
		"price_gold" => 158700,
		"price_glue" => 940,
		"price_stone" => 5970,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 7,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"7" => [
		"price_gold" => 317600,
		"price_glue" => 2000,
		"price_stone" => 12670,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 8,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"8" => [
		"price_gold" => 579300,
		"price_glue" => 3840,
		"price_stone" => 24310,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 9,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"9" => [
		"price_gold" => 984200,
		"price_glue" => 6820,
		"price_stone" => 43190,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 10,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"10" => [
		"price_gold" => 1581100,
		"price_glue" => 11400,
		"price_stone" => 72230,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 11,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"11" => [
		"price_gold" => 2427900,
		"price_glue" => 18160,
		"price_stone" => 115020,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 12,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"12" => [
		"price_gold" => 3591600,
		"price_glue" => 27770,
		"price_stone" => 175880,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 13,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"13" => [
		"price_gold" => 5148900,
		"price_glue" => 41040,
		"price_stone" => 259940,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 14,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"14" => [
		"price_gold" => 7187000,
		"price_glue" => 58930,
		"price_stone" => 373230,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 15,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"15" => [
		"price_gold" => 9803500,
		"price_glue" => 82530,
		"price_stone" => 522670,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 16,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"16" => [
		"price_gold" => 13107200,
		"price_glue" => 113080,
		"price_stone" => 716200,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 17,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"17" => [
		"price_gold" => 17218300,
		"price_glue" => 152020,
		"price_stone" => 962820,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 18,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"18" => [
		"price_gold" => 22268800,
		"price_glue" => 200940,
		"price_stone" => 1272650,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 19,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"19" => [
		"price_gold" => 28402800,
		"price_glue" => 261630,
		"price_stone" => 1656990,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 20,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"20" => [
		"price_gold" => 35777100,
		"price_glue" => 336060,
		"price_stone" => 2128390,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 21,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	]
			]
		],
		"defender_production" => [
			"limit" => 1,
			"unlock_with_mainbuilding_1" => 7,
			"unlock_with_mainbuilding_2" => 0,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 1,
			"type" => "battle",
			"index" => 10,
			"levels" => [
	"1" => [
		"price_gold" => 0,
		"price_glue" => 0,
		"price_stone" => 10,
		"build_time" => 1,
		"passiv_bonus_amount_1" => 1,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 1
	],
	"2" => [
		"price_gold" => 200,
		"price_glue" => 10,
		"price_stone" => 30,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 2,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 2
	],
	"3" => [
		"price_gold" => 1400,
		"price_glue" => 40,
		"price_stone" => 200,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 3,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 3
	],
	"4" => [
		"price_gold" => 5100,
		"price_glue" => 170,
		"price_stone" => 820,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 4,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 4
	],
	"5" => [
		"price_gold" => 14000,
		"price_glue" => 520,
		"price_stone" => 2450,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 5,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 5
	],
	"6" => [
		"price_gold" => 31700,
		"price_glue" => 1260,
		"price_stone" => 5970,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 6,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 6
	],
	"7" => [
		"price_gold" => 63500,
		"price_glue" => 2670,
		"price_stone" => 12670,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 7,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 7
	],
	"8" => [
		"price_gold" => 115900,
		"price_glue" => 5120,
		"price_stone" => 24310,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 8,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 8
	],
	"9" => [
		"price_gold" => 196800,
		"price_glue" => 9090,
		"price_stone" => 43190,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 9,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 9
	],
	"10" => [
		"price_gold" => 316200,
		"price_glue" => 15210,
		"price_stone" => 72230,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 10,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 10
	],
	"11" => [
		"price_gold" => 485600,
		"price_glue" => 24210,
		"price_stone" => 115020,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 11,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 11
	],
	"12" => [
		"price_gold" => 718300,
		"price_glue" => 37030,
		"price_stone" => 175880,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 12,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 12
	],
	"13" => [
		"price_gold" => 1029800,
		"price_glue" => 54730,
		"price_stone" => 259940,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 13,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 13
	],
	"14" => [
		"price_gold" => 1437400,
		"price_glue" => 78570,
		"price_stone" => 373230,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 14,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 14
	],
	"15" => [
		"price_gold" => 1960700,
		"price_glue" => 110040,
		"price_stone" => 522670,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 15,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 15
	],
	"16" => [
		"price_gold" => 2621400,
		"price_glue" => 150780,
		"price_stone" => 716200,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 16,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 16
	],
	"17" => [
		"price_gold" => 3443700,
		"price_glue" => 202700,
		"price_stone" => 962820,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 17,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 17
	],
	"18" => [
		"price_gold" => 4453800,
		"price_glue" => 267930,
		"price_stone" => 1272650,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 18,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 18
	],
	"19" => [
		"price_gold" => 5680600,
		"price_glue" => 348840,
		"price_stone" => 1656990,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 19,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 19
	],
	"20" => [
		"price_gold" => 7155400,
		"price_glue" => 448080,
		"price_stone" => 2128390,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 20,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 20
	]
			]
		],
		"worker_home" => [
			"limit" => 1,
			"unlock_with_mainbuilding_1" => 4,
			"unlock_with_mainbuilding_2" => 0,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 1,
			"type" => "boost",
			"index" => 6,
			"levels" => [
	"1" => [
		"price_gold" => 100,
		"price_glue" => 0,
		"price_stone" => 30,
		"build_time" => 2,
		"passiv_bonus_amount_1" => 5,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"2" => [
		"price_gold" => 1400,
		"price_glue" => 10,
		"price_stone" => 10,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 10,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"3" => [
		"price_gold" => 8400,
		"price_glue" => 100,
		"price_stone" => 50,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 15,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"4" => [
		"price_gold" => 30700,
		"price_glue" => 410,
		"price_stone" => 220,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 20,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"5" => [
		"price_gold" => 83900,
		"price_glue" => 1230,
		"price_stone" => 650,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 25,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"6" => [
		"price_gold" => 190500,
		"price_glue" => 2980,
		"price_stone" => 1570,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 30,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"7" => [
		"price_gold" => 381100,
		"price_glue" => 6330,
		"price_stone" => 3330,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 35,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"8" => [
		"price_gold" => 695100,
		"price_glue" => 12150,
		"price_stone" => 6400,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 40,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"9" => [
		"price_gold" => 1181000,
		"price_glue" => 21590,
		"price_stone" => 11370,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 45,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"10" => [
		"price_gold" => 1897400,
		"price_glue" => 36120,
		"price_stone" => 19010,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 50,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"11" => [
		"price_gold" => 2913500,
		"price_glue" => 57510,
		"price_stone" => 30270,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 54,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"12" => [
		"price_gold" => 4309900,
		"price_glue" => 87940,
		"price_stone" => 46280,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 58,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"13" => [
		"price_gold" => 6178700,
		"price_glue" => 129970,
		"price_stone" => 68410,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 62,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"14" => [
		"price_gold" => 8624400,
		"price_glue" => 186610,
		"price_stone" => 98220,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 66,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"15" => [
		"price_gold" => 11764200,
		"price_glue" => 261330,
		"price_stone" => 137540,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 70,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"16" => [
		"price_gold" => 15728600,
		"price_glue" => 358100,
		"price_stone" => 188470,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 74,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"17" => [
		"price_gold" => 20662000,
		"price_glue" => 481410,
		"price_stone" => 253370,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 78,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"18" => [
		"price_gold" => 26722500,
		"price_glue" => 636320,
		"price_stone" => 334910,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 82,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"19" => [
		"price_gold" => 34083400,
		"price_glue" => 828500,
		"price_stone" => 436050,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 86,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"20" => [
		"price_gold" => 42932500,
		"price_glue" => 1064190,
		"price_stone" => 560100,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 90,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	]
			]
		],
		"generator" => [
			"limit" => 3,
			"unlock_with_mainbuilding_1" => 5,
			"unlock_with_mainbuilding_2" => 6,
			"unlock_with_mainbuilding_3" => 8,
			"size" => 1,
			"type" => "boost",
			"index" => 7,
			"levels" => [
	"1" => [
		"price_gold" => 100,
		"price_glue" => 0,
		"price_stone" => 30,
		"build_time" => 2,
		"passiv_bonus_amount_1" => 5,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"2" => [
		"price_gold" => 1100,
		"price_glue" => 10,
		"price_stone" => 10,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 10,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"3" => [
		"price_gold" => 7000,
		"price_glue" => 100,
		"price_stone" => 50,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 15,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"4" => [
		"price_gold" => 25600,
		"price_glue" => 390,
		"price_stone" => 220,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 20,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"5" => [
		"price_gold" => 69900,
		"price_glue" => 1160,
		"price_stone" => 650,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 25,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"6" => [
		"price_gold" => 158700,
		"price_glue" => 2830,
		"price_stone" => 1570,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 30,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"7" => [
		"price_gold" => 317600,
		"price_glue" => 6000,
		"price_stone" => 3330,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 35,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"8" => [
		"price_gold" => 579300,
		"price_glue" => 11510,
		"price_stone" => 6400,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 40,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"9" => [
		"price_gold" => 984200,
		"price_glue" => 20460,
		"price_stone" => 11370,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 45,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"10" => [
		"price_gold" => 1581100,
		"price_glue" => 34210,
		"price_stone" => 19010,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 50,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"11" => [
		"price_gold" => 2427900,
		"price_glue" => 54480,
		"price_stone" => 30270,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 55,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"12" => [
		"price_gold" => 3591600,
		"price_glue" => 83310,
		"price_stone" => 46280,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 60,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"13" => [
		"price_gold" => 5148900,
		"price_glue" => 123130,
		"price_stone" => 68410,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 65,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"14" => [
		"price_gold" => 7187000,
		"price_glue" => 176790,
		"price_stone" => 98220,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 70,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"15" => [
		"price_gold" => 9803500,
		"price_glue" => 247580,
		"price_stone" => 137540,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 75,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"16" => [
		"price_gold" => 13107200,
		"price_glue" => 339250,
		"price_stone" => 188470,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 80,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"17" => [
		"price_gold" => 17218300,
		"price_glue" => 456070,
		"price_stone" => 253370,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 85,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"18" => [
		"price_gold" => 22268800,
		"price_glue" => 602830,
		"price_stone" => 334910,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 90,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"19" => [
		"price_gold" => 28402800,
		"price_glue" => 784890,
		"price_stone" => 436050,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 95,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	],
	"20" => [
		"price_gold" => 35777100,
		"price_glue" => 1008180,
		"price_stone" => 560100,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 100,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 0,
		"resource_production_max" => 0
	]
			]
		],
		"xp_production" => [
			"limit" => 1,
			"unlock_with_mainbuilding_1" => 6,
			"unlock_with_mainbuilding_2" => 0,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 2,
			"type" => "collect",
			"index" => 8,
			"levels" => [
	"1" => [
		"price_gold" => 0,
		"price_glue" => 0,
		"price_stone" => 30,
		"build_time" => 2,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 15,
		"resource_production_max" => 80
	],
	"2" => [
		"price_gold" => 700,
		"price_glue" => 10,
		"price_stone" => 10,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 30,
		"resource_production_max" => 160
	],
	"3" => [
		"price_gold" => 4200,
		"price_glue" => 100,
		"price_stone" => 40,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 60,
		"resource_production_max" => 340
	],
	"4" => [
		"price_gold" => 15400,
		"price_glue" => 410,
		"price_stone" => 170,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 90,
		"resource_production_max" => 530
	],
	"5" => [
		"price_gold" => 41900,
		"price_glue" => 1230,
		"price_stone" => 520,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 120,
		"resource_production_max" => 740
	],
	"6" => [
		"price_gold" => 95200,
		"price_glue" => 2980,
		"price_stone" => 1260,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 150,
		"resource_production_max" => 970
	],
	"7" => [
		"price_gold" => 190600,
		"price_glue" => 6330,
		"price_stone" => 2670,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 180,
		"resource_production_max" => 1220
	],
	"8" => [
		"price_gold" => 347600,
		"price_glue" => 12150,
		"price_stone" => 5120,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 210,
		"resource_production_max" => 1480
	],
	"9" => [
		"price_gold" => 590500,
		"price_glue" => 21590,
		"price_stone" => 9090,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 240,
		"resource_production_max" => 1760
	],
	"10" => [
		"price_gold" => 948700,
		"price_glue" => 36120,
		"price_stone" => 15210,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 270,
		"resource_production_max" => 2060
	],
	"11" => [
		"price_gold" => 1456800,
		"price_glue" => 57510,
		"price_stone" => 24210,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 300,
		"resource_production_max" => 2370
	],
	"12" => [
		"price_gold" => 2154900,
		"price_glue" => 87940,
		"price_stone" => 37030,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 330,
		"resource_production_max" => 2710
	],
	"13" => [
		"price_gold" => 3089300,
		"price_glue" => 129970,
		"price_stone" => 54730,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 360,
		"resource_production_max" => 3060
	],
	"14" => [
		"price_gold" => 4312200,
		"price_glue" => 186610,
		"price_stone" => 78570,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 390,
		"resource_production_max" => 3420
	],
	"15" => [
		"price_gold" => 5882100,
		"price_glue" => 261330,
		"price_stone" => 110040,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 420,
		"resource_production_max" => 3810
	],
	"16" => [
		"price_gold" => 7864300,
		"price_glue" => 358100,
		"price_stone" => 150780,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 450,
		"resource_production_max" => 4210
	],
	"17" => [
		"price_gold" => 10331000,
		"price_glue" => 481410,
		"price_stone" => 202700,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 4630
	],
	"18" => [
		"price_gold" => 13361300,
		"price_glue" => 636320,
		"price_stone" => 267930,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 510,
		"resource_production_max" => 5060
	],
	"19" => [
		"price_gold" => 17041700,
		"price_glue" => 828500,
		"price_stone" => 348840,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 540,
		"resource_production_max" => 5510
	],
	"20" => [
		"price_gold" => 21466300,
		"price_glue" => 1064190,
		"price_stone" => 448080,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 0,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 570,
		"resource_production_max" => 5990
	]
			]
		],
		"gem_production" => [
			"limit" => 0,
			"unlock_with_mainbuilding_1" => 21,
			"unlock_with_mainbuilding_2" => 0,
			"unlock_with_mainbuilding_3" => 0,
			"size" => 1,
			"type" => "upgrade",
			"index" => 11,
			"levels" => [
	"1" => [
		"price_gold" => 100,
		"price_glue" => 0,
		"price_stone" => 30,
		"build_time" => 2,
		"passiv_bonus_amount_1" => 5,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"2" => [
		"price_gold" => 2300,
		"price_glue" => 10,
		"price_stone" => 30,
		"build_time" => 3,
		"passiv_bonus_amount_1" => 10,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"3" => [
		"price_gold" => 14000,
		"price_glue" => 110,
		"price_stone" => 210,
		"build_time" => 6,
		"passiv_bonus_amount_1" => 15,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"4" => [
		"price_gold" => 51200,
		"price_glue" => 430,
		"price_stone" => 870,
		"build_time" => 10,
		"passiv_bonus_amount_1" => 20,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"5" => [
		"price_gold" => 139800,
		"price_glue" => 1290,
		"price_stone" => 2580,
		"build_time" => 19,
		"passiv_bonus_amount_1" => 25,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"6" => [
		"price_gold" => 317500,
		"price_glue" => 3140,
		"price_stone" => 6280,
		"build_time" => 34,
		"passiv_bonus_amount_1" => 30,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"7" => [
		"price_gold" => 635200,
		"price_glue" => 6670,
		"price_stone" => 13330,
		"build_time" => 61,
		"passiv_bonus_amount_1" => 35,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"8" => [
		"price_gold" => 1158500,
		"price_glue" => 12790,
		"price_stone" => 25580,
		"build_time" => 110,
		"passiv_bonus_amount_1" => 40,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"9" => [
		"price_gold" => 1968300,
		"price_glue" => 22730,
		"price_stone" => 45460,
		"build_time" => 198,
		"passiv_bonus_amount_1" => 45,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"10" => [
		"price_gold" => 3162300,
		"price_glue" => 38020,
		"price_stone" => 76030,
		"build_time" => 357,
		"passiv_bonus_amount_1" => 50,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"11" => [
		"price_gold" => 4855900,
		"price_glue" => 60540,
		"price_stone" => 121070,
		"build_time" => 643,
		"passiv_bonus_amount_1" => 55,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"12" => [
		"price_gold" => 7183200,
		"price_glue" => 92570,
		"price_stone" => 185130,
		"build_time" => 1157,
		"passiv_bonus_amount_1" => 60,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"13" => [
		"price_gold" => 10297800,
		"price_glue" => 136810,
		"price_stone" => 273630,
		"build_time" => 2082,
		"passiv_bonus_amount_1" => 65,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"14" => [
		"price_gold" => 14374000,
		"price_glue" => 196440,
		"price_stone" => 392870,
		"build_time" => 3748,
		"passiv_bonus_amount_1" => 70,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"15" => [
		"price_gold" => 19607000,
		"price_glue" => 275090,
		"price_stone" => 550180,
		"build_time" => 6747,
		"passiv_bonus_amount_1" => 75,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"16" => [
		"price_gold" => 26214400,
		"price_glue" => 376950,
		"price_stone" => 753890,
		"build_time" => 12144,
		"passiv_bonus_amount_1" => 80,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"17" => [
		"price_gold" => 34436600,
		"price_glue" => 506750,
		"price_stone" => 1013490,
		"build_time" => 21859,
		"passiv_bonus_amount_1" => 85,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"18" => [
		"price_gold" => 44537500,
		"price_glue" => 669820,
		"price_stone" => 1339630,
		"build_time" => 39346,
		"passiv_bonus_amount_1" => 90,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"19" => [
		"price_gold" => 56805600,
		"price_glue" => 872100,
		"price_stone" => 1744200,
		"build_time" => 70824,
		"passiv_bonus_amount_1" => 95,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	],
	"20" => [
		"price_gold" => 71554200,
		"price_glue" => 1120200,
		"price_stone" => 2240410,
		"build_time" => 127482,
		"passiv_bonus_amount_1" => 100,
		"passiv_bonus_amount_2" => 0,
		"min_till_max_resource" => 480,
		"resource_production_max" => 1
	]
			]
		]
	]
        ]
    ];