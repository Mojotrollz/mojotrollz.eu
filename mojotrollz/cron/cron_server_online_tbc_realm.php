<?php
class cron_server_online_tbc_realm implements \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\SERVER_ONLINE_TBC_REALM(\SAI\saimod_mojotrollz_servers::sai_mod__SAI_saimod_mojotrollz_servers_action_run_tbc_realm_status());
        return cronstatus::CRON_STATUS_SUCCESFULLY;
    }
}