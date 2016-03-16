<?php
namespace SQL;
class TBC_ITEM extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT * FROM item_template WHERE entry = ?;';
    }
}