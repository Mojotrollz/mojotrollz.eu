<?php
namespace SQL;
class DATA_SAIMOD_MOJOTROLLZ_SERVER_HANDLING extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   \SYSTEM\SERVERPATH(new \PSAI(),'/saimod_mojotrollz_server_handling/sql/mysql/system_page.sql'),
                        \SYSTEM\SERVERPATH(new \PSAI(),'/saimod_mojotrollz_server_handling/sql/mysql/system_api.sql'));
    }    
}