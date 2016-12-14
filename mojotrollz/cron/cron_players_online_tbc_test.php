<?php
class cron_players_online_tbc_test implements \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\PLAYER_COUNT_TBC_TEST(\SAI\saimod_mojotrollz_server_handling::online_tbc_test());
    }
}