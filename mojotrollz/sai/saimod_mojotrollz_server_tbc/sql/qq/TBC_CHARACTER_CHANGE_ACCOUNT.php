<?php
namespace SQL;
class TBC_CHARACTER_CHANGE_ACCOUNT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'UPDATE mangos_one_chars.characters SET account = ? WHERE guid = ?';
    }
}