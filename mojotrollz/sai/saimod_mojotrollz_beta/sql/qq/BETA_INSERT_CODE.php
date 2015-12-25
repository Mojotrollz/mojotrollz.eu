<?php
namespace SQL;
class BETA_INSERT_CODE extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'INSERT INTO `mojotrollz_beta` (`code`, `user`, `user_new`)'.
' VALUES (?, ?, NULL);';
    }    
}