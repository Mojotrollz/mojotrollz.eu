<?php
namespace SQL;
class DATA_SAIMOD_MOJOTROLLZ_TEAMSPEAK extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   (new \PSAI('/saimod_mojotrollz_teamspeak/sql/mysql/system_page.sql'))->SERVERPATH(),
                        (new \PSAI('/saimod_mojotrollz_teamspeak/sql/mysql/system_api.sql'))->SERVERPATH());
    }    
}