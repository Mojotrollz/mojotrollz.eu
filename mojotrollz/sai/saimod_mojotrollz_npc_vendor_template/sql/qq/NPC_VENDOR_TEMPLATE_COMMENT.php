<?php
namespace SQL;
class NPC_VENDOR_TEMPLATE_COMMENT extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'REPLACE INTO mojotrollz_npc_vendor_template '.
'(entry,comments) '.
'VALUES(?,?);';
    }
}