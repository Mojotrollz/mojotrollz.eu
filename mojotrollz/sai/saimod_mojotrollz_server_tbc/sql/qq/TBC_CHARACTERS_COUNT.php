<?php
namespace SQL;
class TBC_CHARACTERS_COUNT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT COUNT(*) as count FROM mangos_one_chars.characters as chars'.
' WHERE (chars.guid LIKE ? OR chars.name LIKE ? OR chars.level LIKE ?)'.
' LIMIT 1;';
    }
}