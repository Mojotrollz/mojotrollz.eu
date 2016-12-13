<?php
namespace SQL;
class DATA_SAIMOD_MOJOTROLLZ_SERVER_TBC extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   (new \PSAI('/saimod_mojotrollz_server_handling/sql/mysql/system_page.sql'))->SERVERPATH(),
                        (new \PSAI('/saimod_mojotrollz_server_handling/sql/mysql/system_api.sql'))->SERVERPATH());
    }    
}