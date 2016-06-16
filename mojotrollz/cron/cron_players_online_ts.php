<?php
class cron_players_online_ts implements \SYSTEM\CRON\cronjob{
    public static function run(){
        \LIB\lib_ts3::php();
        $ts3 = TeamSpeak3::factory("serverquery://mojotrollztsquery:9aYllYkG@127.0.0.1:10011/");
        new \LOG\PLAYER_COUNT_TS($ts3->serverGetByPort(9987)->clientCount());
    }
}