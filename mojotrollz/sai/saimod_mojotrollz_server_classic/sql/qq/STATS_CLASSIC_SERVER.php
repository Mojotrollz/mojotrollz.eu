<?php
namespace SQL;
class STATS_CLASSIC_SERVER extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return 
'SELECT DATE_FORMAT(FROM_UNIXTIME(UNIX_TIMESTAMP('.\SYSTEM\SQL\system_log::FIELD_TIME.') - MOD(UNIX_TIMESTAMP('.\SYSTEM\SQL\system_log::FIELD_TIME.'),?)),"%Y/%m/%d %H:%i:%s") as day,'
    .'avg(case when '.\SYSTEM\SQL\system_log::FIELD_CLASS.' LIKE "%SERVER_ONLINE_CLASSIC_REALM" then '.\SYSTEM\SQL\system_log::FIELD_CODE.' end) realm,'
    .'avg(case when '.\SYSTEM\SQL\system_log::FIELD_CLASS.' LIKE "%SERVER_ONLINE_CLASSIC_WORLD" then '.\SYSTEM\SQL\system_log::FIELD_CODE.' end) world,'
    .'avg(case when '.\SYSTEM\SQL\system_log::FIELD_CLASS.' LIKE "%SERVER_ONLINE_CLASSIC_WORLD_TEST" then '.\SYSTEM\SQL\system_log::FIELD_CODE.' end) world_test'
.' FROM '.\SYSTEM\SQL\system_log::NAME_MYS
.' WHERE '.\SYSTEM\SQL\system_log::NAME_MYS.'.'.\SYSTEM\SQL\system_log::FIELD_CLASS.' LIKE "%SERVER_ONLINE_CLASSIC%"'
.' GROUP BY day'
.' ORDER BY day DESC'
.' LIMIT 30;';
    }
}