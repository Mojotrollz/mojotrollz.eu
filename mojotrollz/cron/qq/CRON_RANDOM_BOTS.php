<?php
namespace SQL;
class CRON_RANDOM_BOTS extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT account_id, char_id FROM mojotrollz_bot'.
' WHERE server_id = 0'.
' ORDER BY RAND();';
    }
}