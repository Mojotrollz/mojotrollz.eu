<?php
namespace SQL;
class CRON_DELETE_VOTES extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'DELETE FROM mojotrollz_vote;';
    }
}