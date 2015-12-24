<?php
class cron_players_online_classic extends \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\PLAYER_COUNT_CLASSIC(\SAI\saimod_mojotrollz_server_handling::online_classic());
    }
}