<?php
class cron_server_online_tbc_world implements \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\SERVER_ONLINE_TBC_WORLD(\SAI\saimod_mojotrollz_server_handling::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_status());
    }
}