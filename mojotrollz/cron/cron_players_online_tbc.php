<?php
class cron_players_online_tbc implements \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\PLAYER_COUNT_TBC(\SAI\saimod_mojotrollz_servers::online_tbc());
        return cronstatus::CRON_STATUS_SUCCESFULLY;
    }
}