<?php
namespace SQL;
class SAIMOD_MOJOTROLLZ_DOWNLOADS_SAVE extends \SYSTEM\DB\QP {
    public static function get_class(){return \get_class();}
    public static function mysql(){return 
'REPLACE INTO mojotrollz_downloads (id,link,img,text,subtext) VALUES(?,?,?,?,?);';
    }
}