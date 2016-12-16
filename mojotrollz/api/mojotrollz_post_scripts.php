<?php
class mojotrollz_post_scripts {
    public static function change_email($token_data){
        $data = \json_decode($token_data['data'],true);
        $user = \SQL\SYS_SECURITY_USER_BY_ID::Q1(array($data['user']));
        return \SQL\MOJO_ACCOUNT_CHANGE_EMAIL::QI(array($data['email'],$user['email']),new \SQL\mangos_realm());
    }
}