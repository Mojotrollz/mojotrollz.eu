<?php
namespace SQL;
class NPC_VENDOR_TEMPLATE_DEL extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return 
'DELETE FROM npc_vendor_template WHERE entry = ? AND item = ?;';
    }
}