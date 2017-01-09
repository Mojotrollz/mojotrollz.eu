<?php
namespace SQL;
class TBC_ACCOUNT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT accounts.id, accounts.username, accounts.email, accounts.joindate, accounts.last_login,'.
' system_user.username as system_account'.
' FROM system_user'.
' RIGHT JOIN mangos_one_realm.account as accounts ON UPPER(accounts.email) = UPPER(system_user.email)'.
' WHERE accounts.id = ?'.
' LIMIT 1;';
    }
}