<?php
namespace SQL;
class TBC_ACCOUNTS_COUNT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT COUNT(*) as count FROM mangos_one_realm.account'.
' WHERE (id LIKE ? OR username LIKE ? OR email LIKE ?)'.
' LIMIT 1;';
    }
}