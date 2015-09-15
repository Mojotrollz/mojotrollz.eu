<?php
namespace SQL;
class MOJOTROLLZ_SERVER_LIST extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT * FROM mojotrollz_server WHERE visible IS NOT NULL AND version IS NOT NULL;';
    }
}