<?php
namespace SQL;
class DATA_MOJOTROLLZ extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   \SYSTEM\SERVERPATH(new \PSQL(),'/mysql/system_page.sql'),
                        \SYSTEM\SERVERPATH(new \PSQL(),'/mysql/system_api.sql'),
                        \SYSTEM\SERVERPATH(new \PSQL(),'/mysql/schema_mojotrollz_server.sql'),
                        \SYSTEM\SERVERPATH(new \PSQL(),'/mysql/schema_mojotrollz_vote.sql'),
                        \SYSTEM\SERVERPATH(new \PSQL(),'/mysql/schema_mojotrollz_addon.sql'));
    }    
}