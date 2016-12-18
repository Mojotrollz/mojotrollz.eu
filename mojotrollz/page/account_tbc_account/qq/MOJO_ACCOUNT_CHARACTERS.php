<?php
namespace SQL;
class MOJO_ACCOUNT_CHARACTERS extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT name, level, online'.
' FROM mangos_one_chars.characters as chars'.
' LEFT JOIN mangos_one_realm.account as accounts ON chars.account = accounts.id'.
' WHERE UPPER(email) = UPPER(?) AND UPPER(username) = UPPER(?);';
    }
}