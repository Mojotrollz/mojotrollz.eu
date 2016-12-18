<?php
namespace SQL;
class MOJO_ACCOUNT_CHANGE_PASSWORD extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'UPDATE account SET sha_pass_hash = ?, v = NULL, s = NULL WHERE username = ? AND sha_pass_hash = ? AND email = ?;';
    }
}