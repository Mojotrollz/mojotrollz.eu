<?php
namespace SQL;
class MOJOTROLLZ_IP_VOTED extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT * FROM mojotrollz_vote WHERE ip = ?;';
    }
}