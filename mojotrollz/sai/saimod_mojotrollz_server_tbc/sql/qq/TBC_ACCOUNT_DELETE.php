<?php
namespace SQL;
class TBC_ACCOUNT_DELETE extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'DELETE FROM mangos_one_realm.account WHERE id = ?;';
    }
}