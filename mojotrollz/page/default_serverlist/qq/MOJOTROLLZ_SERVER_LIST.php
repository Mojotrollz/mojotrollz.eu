<?php
namespace SQL;
class MOJOTROLLZ_SERVER_LIST extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT mojotrollz_server.*, COUNT(ip) as votes FROM mojotrollz_server'.
' LEFT JOIN mojotrollz_vote ON mojotrollz_server.id = mojotrollz_vote.server'.
' WHERE visible IS NOT NULL AND version IS NOT NULL'.
' GROUP BY id'.
' ORDER BY votes DESC, score DESC;';
    }
}