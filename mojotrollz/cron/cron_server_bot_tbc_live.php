<?php
class cron_server_bot_tbc_live implements \SYSTEM\CRON\cronjob{
    public static function run(){
        \LIB\lib_ts3::php();
        $ts3 = TeamSpeak3::factory("serverquery://mojotrollztsquery:9aYllYkG@127.0.0.1:10011/");
        $bot_count = $ts3->serverGetByPort(9987)->clientCount();
        
        $bots = \SQL\CRON_RANDOM_BOTS::QQ();
        while($bot = $bots->next()){
            if($bot_count > 0){
                mojotrollz_tbc_soap::bot_login($bot['account_id'], $bot['char_id']);
                $bot_count -= 1;
            } else {
                mojotrollz_tbc_soap::bot_logout($bot['account_id']);
            }
        }
    }
}