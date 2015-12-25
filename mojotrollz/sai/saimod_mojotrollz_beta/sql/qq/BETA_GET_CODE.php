<?php
namespace SQL;
class BETA_GET_CODE extends \SYSTEM\DB\QQ {
    public static function get_class(){return \get_class();}
    public static function mysql(){return
'SELECT mojotrollz_beta.*, su1.username as name_user, su2.username as name_user_new FROM mojotrollz_beta '.
'LEFT JOIN system_user as su1 ON su1.id = mojotrollz_beta.user '.
'LEFT JOIN system_user as su2 ON su2.id = mojotrollz_beta.user_new;';    
    }
}