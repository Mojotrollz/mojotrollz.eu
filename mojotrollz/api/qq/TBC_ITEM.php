<?php
namespace SQL;
class TBC_ITEM extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT item_template.*, lower(mangos_one_dbc.itemdisplayinfo.6) as icon FROM item_template'.
' LEFT JOIN mangos_one_dbc.itemdisplayinfo ON item_template.displayid = mangos_one_dbc.itemdisplayinfo.1'.
' WHERE entry = ?;';
    }
}