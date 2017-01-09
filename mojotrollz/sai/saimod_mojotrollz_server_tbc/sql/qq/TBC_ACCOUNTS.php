<?php
namespace SQL;
class TBC_ACCOUNTS extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT accounts.id, accounts.username, accounts.email, accounts.joindate, accounts.last_login,'.
' MAX(chars.online) as online, COUNT(chars.guid) as chars,'.
' COUNT(system_user.id) as system_account,'.
' COUNT(bots.account_id) as bot'.
' FROM system_user'.
' RIGHT JOIN mangos_one_realm.account as accounts ON UPPER(accounts.email) = UPPER(system_user.email)'.
' LEFT JOIN mangos_one_chars.characters as chars ON chars.account = accounts.id'.
' LEFT JOIN mojotrollz_bot as bots ON bots.account_id = accounts.id'.
' WHERE (accounts.id LIKE ? OR accounts.username LIKE ? OR accounts.email LIKE ?)'.
' GROUP BY accounts.id;';
    }
}