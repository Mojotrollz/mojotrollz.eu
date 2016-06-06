<?php
namespace SQL;
class MOJO_ACCOUNT_ACCOUNTS extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT username,MAX(online) as online,COUNT(chars.guid) as count'.
' FROM mangos_one_realm.account as accounts'.
' LEFT JOIN mangos_one_chars.characters as chars ON accounts.id = chars.account'.
' WHERE UPPER(email) = UPPER(?)'.
' GROUP BY username;';
    }
}