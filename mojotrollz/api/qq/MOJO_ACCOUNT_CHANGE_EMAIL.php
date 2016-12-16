<?php
namespace SQL;
class MOJO_ACCOUNT_CHANGE_EMAIL extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'UPDATE account SET email = ? WHERE email = ?;';
    }
}