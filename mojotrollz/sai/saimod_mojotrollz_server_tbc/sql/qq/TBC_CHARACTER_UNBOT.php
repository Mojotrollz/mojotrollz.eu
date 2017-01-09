<?php
namespace SQL;
class TBC_CHARACTER_UNBOT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'DELETE FROM mojotrollz_bot WHERE account_id = ?;';
    }
}