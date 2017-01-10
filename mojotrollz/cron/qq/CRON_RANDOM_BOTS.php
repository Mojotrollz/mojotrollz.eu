<?php
namespace SQL;
class CRON_RANDOM_BOTS extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT account_id, char_id, online, at_login FROM mojotrollz_bot'.
' LEFT JOIN mangos_one_chars.characters as chars ON chars.account = account_id AND chars.guid = char_id'.
' WHERE server_id = 0'.
' ORDER BY RAND();';
    }
}