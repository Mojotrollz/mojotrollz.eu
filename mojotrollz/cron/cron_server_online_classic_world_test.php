<?php
class cron_server_online_classic_world_test implements \SYSTEM\CRON\cronjob{
    public static function run(){ 
        new \LOG\SERVER_ONLINE_CLASSIC_WORLD_TEST(\SAI\saimod_mojotrollz_server_handling::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_classic_world_test_status());
    }
}