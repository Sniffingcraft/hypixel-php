<?php
return array(
    'quests' =>
        array(
            'quake' =>
                array(
                    0 =>
                        array(
                            'id' => 'quake_daily_play',
                            'name' => 'Daily Quest: Quake Player',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1750,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'quake_daily_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 3 games of Quakecraft',
                        ),
                    1 =>
                        array(
                            'id' => 'quake_daily_kill',
                            'name' => 'Daily Quest: Sniper',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1750,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'quake_daily_kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 50,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 50 players in Quakecraft',
                        ),
                    2 =>
                        array(
                            'id' => 'quake_daily_win',
                            'name' => 'Daily Quest: Winner',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1750,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'quake_daily_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 1 game of Quakecraft',
                        ),
                    3 =>
                        array(
                            'id' => 'quake_weekly_play',
                            'name' => 'Weekly Quest: Bazinga!',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 18000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'quake_weekly_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 20,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'quake_weekly_streak',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 20 games of Quakecraft
Get 10 Killstreaks',
                        ),
                ),
            'walls' =>
                array(
                    0 =>
                        array(
                            'id' => 'walls_daily_play',
                            'name' => 'Daily Quest: Waller',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'walls_daily_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play a game of Walls',
                        ),
                    1 =>
                        array(
                            'id' => 'walls_daily_kill',
                            'name' => 'Daily Quest: Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'walls_daily_kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill a total of 5 players',
                        ),
                    2 =>
                        array(
                            'id' => 'walls_daily_win',
                            'name' => 'Daily Quest: Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'walls_daily_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Walls',
                        ),
                    3 =>
                        array(
                            'id' => 'walls_weekly',
                            'name' => 'Weekly Quest: Walls Weekly',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 21000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'walls_weekly_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 7,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'walls_weekly_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 25,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 7 games of Walls
Kill a total of 25 players',
                        ),
                ),
            'paintball' =>
                array(
                    0 =>
                        array(
                            'id' => 'paintballer',
                            'name' => 'Daily Quest: Paintballer',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Paintball',
                        ),
                    1 =>
                        array(
                            'id' => 'paintball_killer',
                            'name' => 'Daily Quest: Paintball Killer',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 2500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 100,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 100 players in Paintball',
                        ),
                    2 =>
                        array(
                            'id' => 'paintball_expert',
                            'name' => 'Weekly Quest: Paintball Expert',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 21000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 20000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 750,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 30,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 750 players in Paintball
Play 30 games of Paintball',
                        ),
                ),
            'hungergames' =>
                array(
                    0 =>
                        array(
                            'id' => 'blitz_game_of_the_day',
                            'name' => 'Daily Quest: Game of the Day',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 2500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'blitz_games_played',
                                            'type' => 'BooleanObjective',
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play a game of Blitz',
                        ),
                    1 =>
                        array(
                            'id' => 'blitz_win',
                            'name' => 'Daily Quest: Win Normal',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 2500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'winblitz',
                                            'type' => 'BooleanObjective',
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Blitz Normal',
                        ),
                    2 =>
                        array(
                            'id' => 'blitz_loot_chest_daily',
                            'name' => 'Daily Quest: Chest Looter',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 2500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'lootchestblitz',
                                            'type' => 'IntegerObjective',
                                            'integer' => 25,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Loot 25 Chests',
                        ),
                    3 =>
                        array(
                            'id' => 'blitz_kills',
                            'name' => 'Daily Quest: Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 2500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'killblitz10',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 5 players in Blitz',
                        ),
                    4 =>
                        array(
                            'id' => 'blitz_weekly_master',
                            'name' => 'Weekly Quest: Blitz Master',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 20000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'blitz_games_played',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'winblitz',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                    2 =>
                                        array(
                                            'id' => 'killblitz10',
                                            'type' => 'IntegerObjective',
                                            'integer' => 30,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 15 games of Blitz
Win 5 games of Blitz
Kill 30 players in Blitz',
                        ),
                    5 =>
                        array(
                            'id' => 'blitz_loot_chest_weekly',
                            'name' => 'Weekly Quest: Blitz Expert',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 20000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'lootchestblitz',
                                            'type' => 'IntegerObjective',
                                            'integer' => 100,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'dealdamageblitz',
                                            'type' => 'IntegerObjective',
                                            'integer' => 250,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Loot 100 Chests
Deal 250 Damage to Players',
                        ),
                ),
            'tntgames' =>
                array(
                    0 =>
                        array(
                            'id' => 'tnt_daily_win',
                            'name' => 'Daily Quest: TNT Winner',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 2500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 2000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_daily_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of TNT Games',
                        ),
                    1 =>
                        array(
                            'id' => 'tnt_weekly_play',
                            'name' => 'Weekly Quest: Explosive Fanatic',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 15000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 11000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_weekly_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 20,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 20 games of TNT Games',
                        ),
                    2 =>
                        array(
                            'id' => 'tnt_tntrun_daily',
                            'name' => 'Daily Quest: TNT Run',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 1800,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_tntrun_daily',
                                            'type' => 'IntegerObjective',
                                            'integer' => 500,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Walk over 500 blocks',
                        ),
                    3 =>
                        array(
                            'id' => 'tnt_tntrun_weekly',
                            'name' => 'Weekly Quest: TNT Run',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 6000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_tntrun_weekly',
                                            'type' => 'IntegerObjective',
                                            'integer' => 2000,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Walk over 2,000 blocks',
                        ),
                    4 =>
                        array(
                            'id' => 'tnt_pvprun_daily',
                            'name' => 'Daily Quest: PVP Run',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 1800,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_pvprun_daily',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 3 players in PVP Run',
                        ),
                    5 =>
                        array(
                            'id' => 'tnt_pvprun_weekly',
                            'name' => 'Weekly Quest: PVP Run',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 6000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_pvprun_weekly',
                                            'type' => 'IntegerObjective',
                                            'integer' => 25,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Get 25 kills in PVP Run',
                        ),
                    6 =>
                        array(
                            'id' => 'tnt_bowspleef_daily',
                            'name' => 'Daily Quest: Bow Spleef',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 1800,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_bowspleef_daily',
                                            'type' => 'IntegerObjective',
                                            'integer' => 40,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Survive longer than a total of 40 players',
                        ),
                    7 =>
                        array(
                            'id' => 'tnt_bowspleef_weekly',
                            'name' => 'Weekly Quest: Bow Spleef',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 6000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_bowspleef_weekly',
                                            'type' => 'IntegerObjective',
                                            'integer' => 200,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Survive longer than a total of 200 players',
                        ),
                    8 =>
                        array(
                            'id' => 'tnt_tnttag_daily',
                            'name' => 'Daily Quest: TNT Tag',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 1800,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_tnttag_daily',
                                            'type' => 'IntegerObjective',
                                            'integer' => 7,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Survive 7 rounds in total',
                        ),
                    9 =>
                        array(
                            'id' => 'tnt_tnttag_weekly',
                            'name' => 'Weekly Quest: TNT Tag',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 6000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_tnttag_weekly',
                                            'type' => 'IntegerObjective',
                                            'integer' => 50,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Survive 50 rounds in total',
                        ),
                    10 =>
                        array(
                            'id' => 'tnt_wizards_daily',
                            'name' => 'Daily Quest: TNT Wizards',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 1800,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_wizards_daily_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Get 10 kills in TNT Wizards',
                        ),
                    11 =>
                        array(
                            'id' => 'tnt_wizards_weekly',
                            'name' => 'Weekly Quest: TNT Wizards',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 6000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'tnt_wizards_weekly_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 150,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 150 players in TNT Wizards',
                        ),
                ),
            'vampirez' =>
                array(
                    0 =>
                        array(
                            'id' => 'vampirez_daily_play',
                            'name' => 'Daily Quest: VampireZ',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'vampirez_daily_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play a game of VampireZ',
                        ),
                    1 =>
                        array(
                            'id' => 'vampirez_daily_kill',
                            'name' => 'Daily Quest: Blood Drinker',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'vampirez_daily_kill_vampire',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'vampirez_daily_kill_zombie',
                                            'type' => 'IntegerObjective',
                                            'integer' => 20,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 10 vampires in VampireZ
Kill 20 zombies in VampireZ',
                        ),
                    2 =>
                        array(
                            'id' => 'vampirez_daily_human_kill',
                            'name' => 'Daily Quest: Human Killer',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 2000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'vampirez_daily_kill_human',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 10 Survivors in VampireZ',
                        ),
                    3 =>
                        array(
                            'id' => 'vampirez_daily_win',
                            'name' => 'Daily Quest: VampireZ Daily Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 2000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'vampirez_daily_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'As a Survivor Win a game of VampireZ',
                        ),
                    4 =>
                        array(
                            'id' => 'vampirez_weekly_win',
                            'name' => 'Weekly Quest: Vampire Winner',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 10500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'vampirez_weekly_win_survivor',
                                            'type' => 'IntegerObjective',
                                            'integer' => 12,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 12 games as a Human',
                        ),
                    5 =>
                        array(
                            'id' => 'vampirez_weekly_kill',
                            'name' => 'Weekly Quest: Vampire Slayer',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 11000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'vampirez_weekly_kill_zombie',
                                            'type' => 'IntegerObjective',
                                            'integer' => 130,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'vampirez_weekly_kill_vampire',
                                            'type' => 'IntegerObjective',
                                            'integer' => 25,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 130 Zombies
Kill 25 Vampires',
                        ),
                    6 =>
                        array(
                            'id' => 'vampirez_weekly_human_kill',
                            'name' => 'Weekly Quest: Human Slayer',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 11000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'vampirez_weekly_kill_survivor',
                                            'type' => 'IntegerObjective',
                                            'integer' => 100,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 100 Survivors',
                        ),
                ),
            'walls3' =>
                array(
                    0 =>
                        array(
                            'id' => 'mega_walls_play',
                            'name' => 'Daily Quest: Game of the Day',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mega_walls_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play a game of Mega Walls',
                        ),
                    1 =>
                        array(
                            'id' => 'mega_walls_win',
                            'name' => 'Daily Quest: Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mega_walls_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Mega Walls with at least 1 kill',
                        ),
                    2 =>
                        array(
                            'id' => 'mega_walls_kill',
                            'name' => 'Daily Quest: Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mega_walls_kill_daily',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 15 players in Mega Walls',
                        ),
                    3 =>
                        array(
                            'id' => 'mega_walls_weekly',
                            'name' => 'Weekly Quest: Mega Waller',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 21000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 4500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mega_walls_play_weekly',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'mega_walls_kill_weekly',
                                            'type' => 'IntegerObjective',
                                            'integer' => 25,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 15 games of Mega Walls
Kill 25 players in Mega Walls',
                        ),
                    4 =>
                        array(
                            'id' => 'mega_walls_faithful',
                            'name' => 'Mythic Quest: Faithful',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 5000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MegawallsMythicFavorReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mega_walls_faithful_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'mega_walls_faifthful_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 3 games of standard Mega Walls
Win a game of standard Mega Walls',
                        ),
                ),
            'arcade' =>
                array(
                    0 =>
                        array(
                            'id' => 'arcade_gamer',
                            'name' => 'Daily Quest: Arcade Gamer',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 3 Arcade Games',
                        ),
                    1 =>
                        array(
                            'id' => 'arcade_winner',
                            'name' => 'Daily Quest: Arcade Winner',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Arcade',
                        ),
                    2 =>
                        array(
                            'id' => 'arcade_specialist',
                            'name' => 'Weekly Quest: Arcade Specialist',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 19500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 50000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 20,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 20 Arcade games',
                        ),
                ),
            'arena' =>
                array(
                    0 =>
                        array(
                            'id' => 'arena_daily_play',
                            'name' => 'Daily Quest: Play Arena',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1250,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'ArenaMagicKeyReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'arena_daily_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 5 games',
                        ),
                    1 =>
                        array(
                            'id' => 'arena_daily_kills',
                            'name' => 'Daily Quest: Arena Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1250,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'ArenaMagicKeyReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'arena_daily_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 5 players',
                        ),
                    2 =>
                        array(
                            'id' => 'arena_daily_wins',
                            'name' => 'Daily Quest: Arena Wins',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1250,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'ArenaMagicKeyReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'arena_daily_wins',
                                            'type' => 'IntegerObjective',
                                            'integer' => 2,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 2 games',
                        ),
                    3 =>
                        array(
                            'id' => 'arena_weekly_play',
                            'name' => 'Weekly Quest: Play Arena',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 21000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 6000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'ArenaMagicKeyReward',
                                            'amount' => 15,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'arena_weekly_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 35,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 35 games',
                        ),
                ),
            'uhc' =>
                array(
                    0 =>
                        array(
                            'id' => 'uhc_team',
                            'name' => 'Daily Quest: Team UHC Champions',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'uhc_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 1 player in Team UHC Champions',
                        ),
                    1 =>
                        array(
                            'id' => 'uhc_solo',
                            'name' => 'Daily Quest: Solo UHC Champions',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'uhc_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 1 player in Solo UHC Champions',
                        ),
                    2 =>
                        array(
                            'id' => 'uhc_dm',
                            'name' => 'Daily Quest: UHC Deathmatch',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'uhc_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 2,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 2 players during a UHC Champions Deathmatch',
                        ),
                    3 =>
                        array(
                            'id' => 'uhc_weekly',
                            'name' => 'Weekly Quest: UHC Champions',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 21000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'uhc_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 20,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 20 players in UHC Champions',
                        ),
                    4 =>
                        array(
                            'id' => 'solo_brawler',
                            'name' => 'Daily Quest: Solo Speed Brawler',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'CoinReward',
                                            'amount' => 1250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'win',
                                            'type' => 'BooleanObjective',
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Solo Speed UHC',
                        ),
                    5 =>
                        array(
                            'id' => 'team_brawler',
                            'name' => 'Daily Quest: Team Speed Brawler',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'CoinReward',
                                            'amount' => 1250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'win',
                                            'type' => 'BooleanObjective',
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Team Speed UHC',
                        ),
                    6 =>
                        array(
                            'id' => 'uhc_madness',
                            'name' => 'Weekly Quest: SpeedUHC Madness',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 19500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'CoinReward',
                                            'amount' => 4000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 100,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 100 players in Speed UHC',
                        ),
                ),
            'mcgo' =>
                array(
                    0 =>
                        array(
                            'id' => 'cvc_win_daily_normal',
                            'name' => 'Daily Quest: Win a game! (Defusal)',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'cvc_play_daily_normal',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Defusal Cops and Crims',
                        ),
                    1 =>
                        array(
                            'id' => 'cvc_kill_daily_normal',
                            'name' => 'Daily Quest: Kill 15 players! (Defusal)',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'cvc_kill_daily_normal',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Get 15 kills in Defusal Mode',
                        ),
                    2 =>
                        array(
                            'id' => 'cvc_kill',
                            'name' => 'Daily Quest: Get 300 points! (Deathmatch)',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'cvc_kill_daily_deathmatch',
                                            'type' => 'IntegerObjective',
                                            'integer' => 300,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Get 300 points in Team Deathmatch',
                        ),
                    3 =>
                        array(
                            'id' => 'cvc_win_daily_deathmatch',
                            'name' => 'Daily Quest: Win a game! (Deathmatch)',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'cvc_play_daily_deathmatch',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Deathmatch',
                        ),
                    4 =>
                        array(
                            'id' => 'cvc_kill_weekly',
                            'name' => 'Weekly Quest: 100 kills and 1,500 points',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 19500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 4000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'cvc_play_weekly',
                                            'type' => 'IntegerObjective',
                                            'integer' => 100,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'cvc_play_weekly_2',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1500,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 100 players in Defusal
Get 1,500 points in Deathmatch',
                        ),
                ),
            'battleground' =>
                array(
                    0 =>
                        array(
                            'id' => 'warlords_ctf',
                            'name' => 'Daily Quest: Capture the Flag',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 4200,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'WarlordsBrokenWeaponReward',
                                            'amount' => 3,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'warlords_daily_ctf',
                                            'type' => 'BooleanObjective',
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Complete 1 match with at least 10 kills
or assists in Capture the Flag.',
                        ),
                    1 =>
                        array(
                            'id' => 'warlords_tdm',
                            'name' => 'Daily Quest: Team Deathmatch',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 4200,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'WarlordsBrokenWeaponReward',
                                            'amount' => 3,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'warlords_tdm',
                                            'type' => 'BooleanObjective',
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Complete 1 match with at least 10 kills
or assists in Team Deathmatch.',
                        ),
                    2 =>
                        array(
                            'id' => 'warlords_domination',
                            'name' => 'Daily Quest: Domination',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 4200,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'WarlordsBrokenWeaponReward',
                                            'amount' => 3,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'warlords_daily_dom',
                                            'type' => 'BooleanObjective',
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Complete 1 match with at least 15 kills
or assists in Domination.',
                        ),
                    3 =>
                        array(
                            'id' => 'warlords_victorious',
                            'name' => 'Daily Quest: Victorious',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 4200,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'WarlordsBrokenWeaponReward',
                                            'amount' => 3,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'warlords_daily_win',
                                            'type' => 'BooleanObjective',
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 1 match of Warlords.',
                        ),
                    4 =>
                        array(
                            'id' => 'warlords_objectives',
                            'name' => 'Daily Quest: Carry, Secured!',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 4200,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'WarlordsBrokenWeaponReward',
                                            'amount' => 3,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'warlords_daily_objectives',
                                            'type' => 'IntegerObjective',
                                            'integer' => 100,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => '30 points for kills/assists on the enemy flag carrier
15 points for kills/assists near allied flag carrier
100 points for capturing a flag
30 points for capturing a domination point
5 points for TDM kills/assists',
                        ),
                    5 =>
                        array(
                            'id' => 'warlords_dedication',
                            'name' => 'Weekly Quest: Dedication',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 24000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 10000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'WarlordsMagicDustReward',
                                            'amount' => 200,
                                        ),
                                    3 =>
                                        array(
                                            'type' => 'WarlordsVoidShardReward',
                                            'amount' => 15,
                                        ),
                                    4 =>
                                        array(
                                            'type' => 'WarlordsBrokenWeaponReward',
                                            'amount' => 15,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'warlords_weekly_dedi',
                                            'type' => 'IntegerObjective',
                                            'integer' => 30,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Complete 30 matches with at
least 10 kills or assists
in any game mode. ',
                        ),
                    6 =>
                        array(
                            'id' => 'warlords_all_star',
                            'name' => 'Weekly Quest: All Star',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 15000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 10000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'WarlordsMagicDustReward',
                                            'amount' => 100,
                                        ),
                                    3 =>
                                        array(
                                            'type' => 'WarlordsVoidShardReward',
                                            'amount' => 5,
                                        ),
                                    4 =>
                                        array(
                                            'type' => 'WarlordsBrokenWeaponReward',
                                            'amount' => 10,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'warlords_weekly_damage',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1500000,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'warlords_weekly_heal',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1500000,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Deal 1,500,000 total damage
Heal 1,500,000 total health',
                        ),
                ),
            'supersmash' =>
                array(
                    0 =>
                        array(
                            'id' => 'supersmash_solo_win',
                            'name' => 'Daily Quest: Smash Heroes Solo Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'supersmash_solo_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game in Solo Mode',
                        ),
                    1 =>
                        array(
                            'id' => 'supersmash_solo_kills',
                            'name' => 'Daily Quest: Smash Heroes Solo Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'supersmash_solo_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 15 enemy heroes in Solo Mode',
                        ),
                    2 =>
                        array(
                            'id' => 'supersmash_team_win',
                            'name' => 'Daily Quest: Smash Heroes Team Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'supersmash_team_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game in Team Mode',
                        ),
                    3 =>
                        array(
                            'id' => 'supersmash_team_kills',
                            'name' => 'Daily Quest: Smash Heroes Team Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'supersmash_team_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 15 enemy heroes in Team Mode',
                        ),
                    4 =>
                        array(
                            'id' => 'supersmash_weekly_kills',
                            'name' => 'Weekly Quest: Smash Heroes Weekly Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 18000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'supersmash_weekly_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 150,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill a total of 150 enemy heroes in any mode',
                        ),
                ),
            'gingerbread' =>
                array(
                    0 =>
                        array(
                            'id' => 'gingerbread_bling_bling',
                            'name' => 'Daily Quest: Bling Bling',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 4200,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1337,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'gingerbread_gold_pickedup',
                                            'type' => 'IntegerObjective',
                                            'integer' => 50,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Grab 50 coin pickups',
                        ),
                    1 =>
                        array(
                            'id' => 'gingerbread_maps',
                            'name' => 'Daily Quest: International Championship',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 4200,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'gingerbread_races_completed',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Complete 5 races',
                        ),
                    2 =>
                        array(
                            'id' => 'gingerbread_racer',
                            'name' => 'Daily Quest: Racer',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 4200,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 2500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'gingerbread_laps_completed',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Complete 5 laps',
                        ),
                    3 =>
                        array(
                            'id' => 'gingerbread_mastery',
                            'name' => 'Weekly Quest: Turbo Kart Racers',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 24000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 9000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'gingerbread_races_completed',
                                            'type' => 'IntegerObjective',
                                            'integer' => 35,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Complete 35 races',
                        ),
                ),
            'skywars' =>
                array(
                    0 =>
                        array(
                            'id' => 'skywars_solo_win',
                            'name' => 'Daily Quest: Skywars Solo Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyWarsSoulReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_solo_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game in Solo Mode',
                        ),
                    1 =>
                        array(
                            'id' => 'skywars_solo_kills',
                            'name' => 'Daily Quest: Skywars Solo Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyWarsSoulReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_solo_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 15 players in Solo Mode',
                        ),
                    2 =>
                        array(
                            'id' => 'skywars_team_win',
                            'name' => 'Daily Quest: Skywars Doubles Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyWarsSoulReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_team_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game in Doubles Mode',
                        ),
                    3 =>
                        array(
                            'id' => 'skywars_team_kills',
                            'name' => 'Daily Quest: Skywars Doubles Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyWarsSoulReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_team_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 15 players in Doubles Mode',
                        ),
                    4 =>
                        array(
                            'id' => 'skywars_arcade_win',
                            'name' => 'Daily Quest: Skywars Lab Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 750,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyWarsSoulReward',
                                            'amount' => 3,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_arcade_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game in the Skywars Laboratory',
                        ),
                    5 =>
                        array(
                            'id' => 'skywars_corrupt_win',
                            'name' => 'Daily Quest: Skywars Corrupted Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 750,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyWarsSoulReward',
                                            'amount' => 3,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_corrupt_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a corrupted game',
                        ),
                    6 =>
                        array(
                            'id' => 'skywars_weekly_kills',
                            'name' => 'Weekly Quest: Skywars Weekly Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 18000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyWarsSoulReward',
                                            'amount' => 3,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_weekly_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 150,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill a total of 150 players in any mode',
                        ),
                    7 =>
                        array(
                            'id' => 'skywars_weekly_arcade_win_all',
                            'name' => 'Weekly Quest: Skywars Scientist',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 10000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 3500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyWarsSoulReward',
                                            'amount' => 5,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_arcade_weekly_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 10 games in any lab mode',
                        ),
                    8 =>
                        array(
                            'id' => 'skywars_daily_tokens',
                            'name' => 'Daily Quest: Tokens!',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'SkyWarsTokenReward',
                                            'amount' => 2000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_daily_tokens_wins',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 10 players in Solo or Team Mode',
                        ),
                    9 =>
                        array(
                            'id' => 'skywars_weekly_free_loot_chest',
                            'name' => 'Weekly Quest: Free Loot Chest',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'GameLootChestReward',
                                            'amount' => 1,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'SkyWarsTokenReward',
                                            'amount' => 4000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_free_loot_chest_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 3 games in Solo or Team Mode',
                        ),
                    10 =>
                        array(
                            'id' => 'skywars_halloween_harvest_2019',
                            'name' => 'Special Quest: Harvest Season',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'GameLootChestReward',
                                            'amount' => 1,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'SkyWarsTokenReward',
                                            'amount' => 80000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 20000,
                                        ),
                                    3 =>
                                        array(
                                            'type' => 'PackageReward',
                                            'package' => 'cage_house',
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skywars_halloween_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 333,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'skywars_halloween_corrupted_wins',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                    2 =>
                                        array(
                                            'id' => 'skywars_halloween_mega_wins',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'OneTimeQuestRequirement',
                                        ),
                                ),
                            'description' => 'Collect %%aqua%%333 souls %%gray%%from kills and wins in insane Skywars
Win 3 %%dark_purple%%spooky %%gray%%games
Win 3 Mega Doubles games',
                        ),
                ),
            'truecombat' =>
                array(
                    0 =>
                        array(
                            'id' => 'crazy_walls_daily_play',
                            'name' => 'Daily Quest: Crazy Games',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'CrazyWallsSkullReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'crazy_walls_daily_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 2,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 2 games of Crazy Walls with at least 1 kill',
                        ),
                    1 =>
                        array(
                            'id' => 'crazy_walls_daily_kill',
                            'name' => 'Daily Quest: Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'CrazyWallsSkullReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'crazy_walls_daily_kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill a total of 10 players',
                        ),
                    2 =>
                        array(
                            'id' => 'crazy_walls_daily_win',
                            'name' => 'Daily Quest: Win',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3250,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'CrazyWallsSkullReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'crazy_walls_daily_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Crazy Walls',
                        ),
                    3 =>
                        array(
                            'id' => 'crazy_walls_weekly',
                            'name' => 'Weekly Quest: Crazy Walls Weekly',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 21000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 6000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'CrazyWallsSkullReward',
                                            'amount' => 5,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'crazy_walls_weekly_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 30,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 30 games of Crazy Walls',
                        ),
                ),
            'speeduhc' =>
                array(),
            'skyclash' =>
                array(
                    0 =>
                        array(
                            'id' => 'skyclash_play_games',
                            'name' => 'Daily Quest: SkyClash Playtime',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'CoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyClashCardPackReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 5 games of SkyClash',
                        ),
                    1 =>
                        array(
                            'id' => 'skyclash_kills',
                            'name' => 'Daily Quest: SkyClash Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'CoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 15 players in SkyClash',
                        ),
                    2 =>
                        array(
                            'id' => 'skyclash_play_points',
                            'name' => 'Daily Quest: SkyClash Play Points',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'CoinReward',
                                            'amount' => 1500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyClashCardPackReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skyclash_play_points',
                                            'type' => 'IntegerObjective',
                                            'integer' => 24,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Obtain 24 Play Points in SkyClash',
                        ),
                    3 =>
                        array(
                            'id' => 'skyclash_void',
                            'name' => 'Daily Quest: SkyClash Void',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'CoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'skyclash_void_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'skyclash_enderchests',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 5 players in the Void
Open 3 Enderchests',
                        ),
                    4 =>
                        array(
                            'id' => 'skyclash_weekly_kills',
                            'name' => 'Weekly Quest: SkyClash Weekly Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 19500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'CoinReward',
                                            'amount' => 5000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'SkyClashCardPackReward',
                                            'amount' => 5,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 150,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 150 players in any SkyClash mode',
                        ),
                ),
            'prototype' =>
                array(
                    0 =>
                        array(
                            'id' => 'prototype_pit_daily_kills',
                            'name' => 'Daily Quest: Hunter',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 2000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => '',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 25,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 25 Players',
                        ),
                    1 =>
                        array(
                            'id' => 'prototype_pit_daily_contract',
                            'name' => 'Daily Quest: Contracted',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => '',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'prototype_pit_daily_contract',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Complete a Contract',
                        ),
                    2 =>
                        array(
                            'id' => 'prototype_pit_weekly_gold',
                            'name' => 'Weekly Quest: Double Up',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 7000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => '',
                                            'amount' => 10000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'prototype_pit_weekly_gold',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10000,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Collect 10,000 Gold',
                        ),
                ),
            'bedwars' =>
                array(
                    0 =>
                        array(
                            'id' => 'bedwars_daily_win',
                            'name' => 'Daily: First Win of the Day',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'BedwarsExpReward',
                                            'amount' => 250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'bedwars_daily_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Bed Wars',
                        ),
                    1 =>
                        array(
                            'id' => 'bedwars_daily_one_more',
                            'name' => 'Daily: One More Game!',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'bedwars_daily_played',
                                            'type' => 'IntegerObjective',
                                            'integer' => 2,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 2 games of Bed Wars',
                        ),
                    2 =>
                        array(
                            'id' => 'bedwars_weekly_bed_elims',
                            'name' => 'Weekly: Bed Removal Co.',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 7000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'BedwarsExpReward',
                                            'amount' => 5000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'bedwars_bed_elims',
                                            'type' => 'IntegerObjective',
                                            'integer' => 25,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Break 25 Beds in Bed Wars',
                        ),
                    3 =>
                        array(
                            'id' => 'bedwars_weekly_dream_win',
                            'name' => 'Weekly: Sleep Tight.',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 7000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'BedwarsExpReward',
                                            'amount' => 5000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'bedwars_dream_wins',
                                            'type' => 'IntegerObjective',
                                            'integer' => 10,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 10 dream games in Bed Wars',
                        ),
                    4 =>
                        array(
                            'id' => 'bedwars_daily_nightmares',
                            'name' => 'Special Daily: Nightmares',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 2000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'BedwarsExpReward',
                                            'amount' => 1000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'bedwars_daily_nightmare_beds',
                                            'type' => 'IntegerObjective',
                                            'integer' => 4,
                                        ),
                                    1 =>
                                        array(
                                            'id' => 'bedwars_daily_nightmare_wins',
                                            'type' => 'IntegerObjective',
                                            'integer' => 2,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Break 4 beds in Bed Wars
Win 2 games of Bed Wars',
                        ),
                    5 =>
                        array(
                            'id' => 'bedwars_weekly_pumpkinator',
                            'name' => 'Special Weekly: Pumpkinator',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 666,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'BedwarsExpReward',
                                            'amount' => 6666,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'GameLootChestReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'bedwars_special_weekly_pumpkinator',
                                            'type' => 'IntegerObjective',
                                            'integer' => 99,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Bring 99 pumpkins back to any Shopkeeper. Pumpkins will drop from kills, final kills and bed breaks during Halloween',
                        ),
                ),
            'murdermystery' =>
                array(
                    0 =>
                        array(
                            'id' => 'mm_daily_win',
                            'name' => 'Daily Quest: Winner',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mm_daily_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game in any mode',
                        ),
                    1 =>
                        array(
                            'id' => 'mm_daily_power_play',
                            'name' => 'Daily Quest: Power Play',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mm_power_play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill the murderer or win as murderer in Classic mode',
                        ),
                    2 =>
                        array(
                            'id' => 'mm_daily_target_kill',
                            'name' => 'Daily Quest: Hitman',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 1800,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 1000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mm_target_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 2,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 2 targets in Assassins mode',
                        ),
                    3 =>
                        array(
                            'id' => 'mm_weekly_murderer_kills',
                            'name' => 'Weekly Quest: Professional',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 12000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'GameLootChestReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mm_weekly_kills_as_murderer',
                                            'type' => 'IntegerObjective',
                                            'integer' => 25,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 25 players as murderer in Classic mode',
                        ),
                    4 =>
                        array(
                            'id' => 'mm_weekly_wins',
                            'name' => 'Weekly Quest: Big Winner',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 12000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 7500,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'GameLootChestReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mm_weekly_win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 15,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 15 games in any mode',
                        ),
                    5 =>
                        array(
                            'id' => 'mm_special_weekly_killer_instinct_2019',
                            'name' => 'Special Quest: Killer Instinct',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'GameLootChestReward',
                                            'amount' => 1,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 12000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 7500,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'mm_target_kills',
                                            'type' => 'IntegerObjective',
                                            'integer' => 66,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'OneTimeQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 66 targets in Assassins mode',
                        ),
                ),
            'buildbattle' =>
                array(
                    0 =>
                        array(
                            'id' => 'build_battle_player',
                            'name' => 'Daily Quest: Build Battle Player',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 3,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 3 games of Build Battle',
                        ),
                    1 =>
                        array(
                            'id' => 'build_battle_winner',
                            'name' => 'Daily Quest: Build Battle Winner',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3500,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Build Battle',
                        ),
                    2 =>
                        array(
                            'id' => 'build_battle_weekly',
                            'name' => 'Weekly Quest: Master Architect',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 21000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 50000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 30,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 30 games of Build Battle',
                        ),
                    3 =>
                        array(
                            'id' => 'build_battle_halloween',
                            'name' => 'Special Daily: Hyper',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 2,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 2 Halloween Hyper Mode games',
                        ),
                ),
            'duels' =>
                array(
                    0 =>
                        array(
                            'id' => 'duels_player',
                            'name' => 'Daily Quest: Duels Player',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'play',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Play 5 games of Duels',
                        ),
                    1 =>
                        array(
                            'id' => 'duels_killer',
                            'name' => 'Daily Quest: Duels Killer',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 5,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 5 players in Duels',
                        ),
                    2 =>
                        array(
                            'id' => 'duels_winner',
                            'name' => 'Daily Quest: Duels Winner',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 3000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 250,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 1,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'DailyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win a game of Duels',
                        ),
                    3 =>
                        array(
                            'id' => 'duels_weekly_kills',
                            'name' => 'Weekly Quest: Duels Weekly Kills',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 18000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'GameLootChestReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'kill',
                                            'type' => 'IntegerObjective',
                                            'integer' => 100,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Kill 100 players in Duels',
                        ),
                    4 =>
                        array(
                            'id' => 'duels_weekly_wins',
                            'name' => 'Weekly Quest: Duels Weekly Wins',
                            'rewards' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'MultipliedExperienceReward',
                                            'amount' => 18000,
                                        ),
                                    1 =>
                                        array(
                                            'type' => 'MultipliedCoinReward',
                                            'amount' => 5000,
                                        ),
                                    2 =>
                                        array(
                                            'type' => 'GameLootChestReward',
                                            'amount' => 1,
                                        ),
                                ),
                            'objectives' =>
                                array(
                                    0 =>
                                        array(
                                            'id' => 'win',
                                            'type' => 'IntegerObjective',
                                            'integer' => 50,
                                        ),
                                ),
                            'requirements' =>
                                array(
                                    0 =>
                                        array(
                                            'type' => 'WeeklyResetQuestRequirement',
                                        ),
                                ),
                            'description' => 'Win 50 games of Duels',
                        ),
                ),
        ),
);