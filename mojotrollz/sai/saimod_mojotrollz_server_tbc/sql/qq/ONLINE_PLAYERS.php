<?php
namespace SQL;
class ONLINE_PLAYERS extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT count(*) as count FROM characters WHERE online = 1 OR at_login = 1;';
    }
}