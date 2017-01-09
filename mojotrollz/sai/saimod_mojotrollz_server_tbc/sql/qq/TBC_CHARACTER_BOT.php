<?php
namespace SQL;
class TBC_CHARACTER_BOT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'REPLACE INTO mojotrollz_bot VALUES(?,?,?)';
    }
}