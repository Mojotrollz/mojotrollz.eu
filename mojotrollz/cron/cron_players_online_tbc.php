<?php
class cron_players_online_tbc extends \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\PLAYER_COUNT_TBC(\SAI\saimod_mojotrollz_server_handling::online_tbc());
    }
}