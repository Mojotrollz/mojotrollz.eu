<?php
namespace SQL;
class CRON_BOT_COUNT extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT code as bot_count, class FROM system_log'.
' WHERE class LIKE "%PLAYER_COUNT_TS"'.
' ORDER BY `time` DESC'.
' LIMIT 1';
    }
}