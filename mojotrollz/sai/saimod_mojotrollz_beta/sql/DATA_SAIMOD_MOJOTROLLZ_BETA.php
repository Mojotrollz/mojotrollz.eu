<?php
namespace SQL;
class DATA_SAIMOD_MOJOTROLLZ_BETA extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   \SYSTEM\SERVERPATH(new \PSAI(),'/saimod_mojotrollz_beta/sql/mysql/schema_beta.sql'),
                        \SYSTEM\SERVERPATH(new \PSAI(),'/saimod_mojotrollz_beta/sql/mysql/system_page.sql'),
                        \SYSTEM\SERVERPATH(new \PSAI(),'/saimod_mojotrollz_beta/sql/mysql/system_api.sql'));
    }    
}