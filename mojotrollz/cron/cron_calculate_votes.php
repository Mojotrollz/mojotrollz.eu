<?php
class cron_calculate_votes extends \SYSTEM\CRON\cronjob{
    public static function run(){
        \SQL\CRON_CALCULATE_VOTES::QI();
        \SQL\CRON_DELETE_VOTES::QI();
        return \SYSTEM\CRON\cronstatus::CRON_STATUS_SUCCESFULLY;
    }
}