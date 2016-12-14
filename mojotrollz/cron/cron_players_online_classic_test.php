<?php
class cron_players_online_classic_test implements \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\PLAYER_COUNT_CLASSIC_TEST(\SAI\saimod_mojotrollz_server_handling::online_classic_test());
    }
}