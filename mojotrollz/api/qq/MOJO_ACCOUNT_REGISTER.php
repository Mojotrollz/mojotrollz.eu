<?php
namespace SQL;
class MOJO_ACCOUNT_REGISTER extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'INSERT INTO account (username, email, sha_pass_hash) VALUES(UPPER(?),?,?);';
    }
}