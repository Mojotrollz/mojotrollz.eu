<?php
namespace SQL;
class TBC_CHARACTER extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT chars.guid, chars.name, chars.level, chars.totaltime, chars.online,'.
' accounts.id as account_id, accounts.username as username, accounts.email as email,'.
' system_user.username as system_account,'.
' COUNT(bots.account_id) as bot'.
' FROM system_user'.
' RIGHT JOIN mangos_one_realm.account as accounts ON UPPER(accounts.email) = UPPER(system_user.email)'.
' LEFT JOIN mangos_one_chars.characters as chars ON chars.account = accounts.id'.
' LEFT JOIN mojotrollz_bot as bots ON bots.account_id = accounts.id AND bots.char_id = chars.guid AND server_id = 0'.
' WHERE chars.guid = ?'.
' LIMIT 1;';
    }
}