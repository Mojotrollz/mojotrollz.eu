<?php
namespace SQL;
class DATA_MOJOTROLLZ extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   \SYSTEM\SERVERPATH(new \PSQL(),'/mysql/system_page.sql'));
    }    
}