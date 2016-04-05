<?php
namespace SQL;
class TBC_ITEM extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT item_template.*,'.
' lower(mangos_one_dbc.itemdisplayinfo.6) as icon,'.
' s1.161 as spelltext_1'.
//' s2.161 as spelltext_2,'.
//' s3.161 as spelltext_3,'.
//' s4.161 as spelltext_4,'.
//' s5.161 as spelltext_5'.
' FROM item_template'.
' LEFT JOIN mangos_one_dbc.itemdisplayinfo ON item_template.displayid = mangos_one_dbc.itemdisplayinfo.1'.
' LEFT JOIN mangos_one_dbc.spell AS s1 ON item_template.spellid_1 = s1.1'.
//' LEFT JOIN mangos_one_dbc.spell AS s2 ON item_template.spellid_2 = s2.1'.
//' LEFT JOIN mangos_one_dbc.spell AS s3 ON item_template.spellid_3 = s3.1'.
//' LEFT JOIN mangos_one_dbc.spell AS s4 ON item_template.spellid_4 = s4.1'.
//' LEFT JOIN mangos_one_dbc.spell AS s5 ON item_template.spellid_5 = s5.1'.
' WHERE entry = ?;';
    }
}