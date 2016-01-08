<?php
namespace SQL;
class NPC_VENDOR_TEMPLATE_ADD extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return 
'INSERT INTO npc_vendor_template (entry, item, maxcount, incrtime, ExtendedCost, condition_id) VALUES (?, ?, ?, ?, ?, ?)'.
' ON DUPLICATE KEY UPDATE `maxcount`=VALUES(`maxcount`),`incrtime`=VALUES(`incrtime`),`ExtendedCost`=VALUES(`ExtendedCost`),`condition_id`=VALUES(`condition_id`);';
    }
}