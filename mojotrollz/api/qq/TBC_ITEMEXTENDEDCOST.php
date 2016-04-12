<?php
namespace SQL;
class TBC_ITEMEXTENDEDCOST extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT itemextendedcost.*,'.
' lower(mangos_one_dbc.itemdisplayinfo.6) as icon'.
' FROM itemextendedcost'.
' LEFT JOIN mangos_one_world.item_template AS item ON itemextendedcost.5 = item.entry'.
' LEFT JOIN itemdisplayinfo ON item.displayid = itemdisplayinfo.1'.
' WHERE itemextendedcost.1 = ?;';
    }
}