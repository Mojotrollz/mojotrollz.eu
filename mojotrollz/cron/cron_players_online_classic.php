<?php
class cron_players_online_classic implements \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\PLAYER_COUNT_CLASSIC(\SAI\saimod_mojotrollz_servers::online_classic());
    }
}