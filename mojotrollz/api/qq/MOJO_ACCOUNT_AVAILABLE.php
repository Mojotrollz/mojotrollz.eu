<?php
namespace SQL;
class MOJO_ACCOUNT_AVAILABLE extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT count(username) as count FROM account WHERE username = UPPER(?);';
    }
}