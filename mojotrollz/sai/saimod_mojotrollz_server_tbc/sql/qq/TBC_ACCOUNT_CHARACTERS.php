<?php
namespace SQL;
class TBC_ACCOUNT_CHARACTERS extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT chars.guid, chars.name, chars.level, chars.online,'.
' mojotrollz_bot.account_id as bot'.
' FROM mojotrollz_bot'.
' RIGHT JOIN mangos_one_chars.characters as chars ON chars.account = mojotrollz_bot.account_id AND chars.guid = mojotrollz_bot.char_id AND mojotrollz_bot.server_id = 0'.
' WHERE chars.account = ?;';
    }
}