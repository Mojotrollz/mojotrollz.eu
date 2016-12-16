<?php
namespace SQL;

/**
 * QQ to check for user by ID
 */
class SYS_SECURITY_USER_BY_ID extends \SYSTEM\DB\QP {
    /**
     * Get Classname of the QQ
     * 
     * @return string Returns classname
     */
    public static function get_class(){return \get_class();}
    
    /**
     * Get QQs PostgreSQL Query String
     * 
     * @return string Returns PostgreSQL Query String
     */
    public static function pgsql(){return
'SELECT id,username,email,joindate,locale,last_active,email_confirmed FROM '.\SYSTEM\SQL\system_user::NAME_PG.
' WHERE '.\SYSTEM\SQL\system_user::FIELD_USERNAME.' = $1;';
    }
    
    /**
     * Get QQs MYSQL Query String
     * 
     * @return string Returns MYSQL Query String
     */
    public static function mysql(){return
'SELECT id,username,email,joindate,locale,last_active,email_confirmed FROM '.\SYSTEM\SQL\system_user::NAME_MYS.
' WHERE '.\SYSTEM\SQL\system_user::FIELD_ID.' = ?;';
    }
}