<?php
namespace SQL;
class MOJOTROLLZ_SERVER_INSERT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'INSERT INTO mojotrollz_server (`name`,`url`) VALUES(?,?);';
    }
}