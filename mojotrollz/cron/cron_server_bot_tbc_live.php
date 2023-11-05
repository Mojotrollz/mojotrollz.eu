<?php
class cron_server_bot_tbc_live implements \SYSTEM\CRON\cronjob{
    public static function run(){
        $bot_count = \SQL\CRON_BOT_COUNT::Q1()['bot_count'];
        
        $bots = \SQL\CRON_RANDOM_BOTS::QQ();
        while($bot = $bots->next()){
            if($bot_count > 0){
                if($bot['online'] == 0 && $bot['at_login'] == 0){
                    mojotrollz_tbc_soap::bot_login($bot['account_id'], $bot['char_id']);}
                $bot_count -= 1;
            } elseif($bot['online'] == 1){
                mojotrollz_tbc_soap::bot_logout($bot['account_id']);
            }
        }
        return cronstatus::CRON_STATUS_SUCCESFULLY;
    }
}