<?php
class cron_players_online_ts implements \SYSTEM\CRON\cronjob{
    public static function run(){
        \LIB\lib_ts3::php();
        $ts3 = PlanetTeamSpeak\TeamSpeak3Framework\TeamSpeak3::factory('serverquery://'.
            \SYSTEM\CONFIG\config::get(\config_ids::TEAMSPEAK_QUERY_USER).':'.
            \SYSTEM\CONFIG\config::get(\config_ids::TEAMSPEAK_QUERY_PASSWORD).'@'.
            \SYSTEM\CONFIG\config::get(\config_ids::TEAMSPEAK_HOST).':10011/');
        new \LOG\PLAYER_COUNT_TS($ts3->serverGetByPort(9987)->clientCount());
    }
}