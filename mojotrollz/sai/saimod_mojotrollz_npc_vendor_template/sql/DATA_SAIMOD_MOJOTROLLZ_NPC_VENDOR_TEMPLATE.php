<?php
namespace SQL;
class DATA_SAIMOD_MOJOTROLLZ_NPC_VENDOR_TEMPLATE extends \SYSTEM\DB\QI {
    public static function get_class(){return \get_class();}
    public static function files_mysql(){
        return array(   (new \PSAI('/saimod_mojotrollz_npc_vendor_template/sql/mysql/schema_mojotrollz_npc_vendor_template.sql'))->SERVERPATH(),
                        (new \PSAI('/saimod_mojotrollz_npc_vendor_template/sql/mysql/system_page.sql'))->SERVERPATH(),
                        (new \PSAI('/saimod_mojotrollz_npc_vendor_template/sql/mysql/system_api.sql'))->SERVERPATH());
    }    
}