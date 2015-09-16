<?php
namespace SQL;
class MOJOTROLLZ_VOTE_INSERT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'INSERT INTO mojotrollz_vote (`server`,`ip`) VALUES(?,?) ON DUPLICATE KEY UPDATE server=VALUES(server);';
    }
}