<?php
namespace SQL;
class MOJOTROLLZ_DOWNLOADS extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT * FROM mojotrollz_downloads ORDER BY ID;';
    }
}