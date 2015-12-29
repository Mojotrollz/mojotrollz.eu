<?php
namespace SQL;
class BETA_USE_CODE extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'UPDATE mojotrollz_beta SET user_new = ?, date_redeemed = NOW() WHERE code = ?;';
    }    
}