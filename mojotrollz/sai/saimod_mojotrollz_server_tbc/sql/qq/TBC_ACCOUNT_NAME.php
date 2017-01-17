<?php
namespace SQL;
class TBC_ACCOUNT_NAME extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT accounts.id, COUNT(chars.guid) as char_count'.
' FROM mangos_one_realm.account as accounts'.
' LEFT JOIN mangos_one_chars.characters as chars ON accounts.id = chars.account'.
' WHERE accounts.username = ?'.
' LIMIT 1;';
    }
}