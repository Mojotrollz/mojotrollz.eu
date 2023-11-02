<?php
class api_mojotrollz extends \SYSTEM\API\api_system {
    public static function call_mojo_action_newserver($address){
        return  \SQL\MOJOTROLLZ_SERVER_INSERT::QI(array($address,$address)) ?
                \SYSTEM\LOG\JsonResult::ok() :
                \SYSTEM\LOG\JsonResult::fail();
    }
    public static function call_mojo_action_vote($server){
        return  \SQL\MOJOTROLLZ_VOTE_INSERT::QI(array($server,$_SERVER['REMOTE_ADDR'])) ?
                \SYSTEM\LOG\JsonResult::ok() :
                \SYSTEM\LOG\JsonResult::fail();
    }
    
    //override System call 2 prevent creatio without wow acc
    public static function call_account_action_create($username, $password_sha1, $email, $locale = null){
        throw new \ERROR('Not allowed - use action register');}
    
    public static function call_account_action_register($username, $password, $email, $wow_password){
        if(!\SYSTEM\SECURITY\security::available($username,$email) || !self::wow_username_available($username)){
            throw new \SYSTEM\LOG\ERROR('EMail is already in use or Username is not available.');}
        if( !\SYSTEM\SECURITY\security::create($username, $password, $email, \SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DEFAULT_LANG)) ||
            !self::wow_account_register($username,$email,$wow_password)){
            throw new ERROR("Account creation failed. Retry later.");}
        return JsonResult::ok();
    }
    
    public static function call_account_action_create_wow($username, $wow_password){
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            throw new \SYSTEM\LOG\ERROR('You need to be logged in to register another WoW Account.');}
        if(!self::wow_username_available($username)){
            throw new \SYSTEM\LOG\ERROR('Username is not available.');}
        if( !self::wow_account_register($username, \SYSTEM\SECURITY\security::getUser()->email,$wow_password)){
            throw new ERROR("Account creation failed. Retry later.");}
        return JsonResult::ok();
    }
        
    public static function call_account_action_change_password($old_password_sha1, $new_password_sha1){
        return \SYSTEM\SECURITY\security::change_password($old_password_sha1,$new_password_sha1);}

    public static function call_account_action_change_password_wow($account, $old_wow_password_sha1, $new_wow_password_sha1){
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            throw new \SYSTEM\LOG\ERROR('You need to be logged in to change your WoW Account\'s Password.');}
        $user = \SYSTEM\SECURITY\security::getUser();    
        if(!$user->email_confirmed && $user->username != $account){
            throw new \SYSTEM\LOG\ERROR('You need to confirm your EMail to change this WoW Account\'s Password.');}
        return self::wow_account_change_password($account,$old_wow_password_sha1,$new_wow_password_sha1,$user->email);}
    
    public static function call_account_action_change_email($new_email){
        return \SYSTEM\SECURITY\security::change_email($new_email,'mojotrollz_post_scripts::change_email');}
    
    private static function wow_username_available($username){
        return \SQL\MOJO_ACCOUNT_AVAILABLE::Q1(array($username), new \SQL\mangos_realm())['count'] == 0;}
    private static function wow_account_register($username,$email,$password){
        return \SQL\MOJO_ACCOUNT_REGISTER::QI(array($username,$email,$password), new \SQL\mangos_realm());}
    private static function wow_account_change_password($account,$old_wow_password_sha1,$new_wow_password_sha1,$email){
        return \SQL\MOJO_ACCOUNT_CHANGE_PASSWORD::QI(array($new_wow_password_sha1,$account,$old_wow_password_sha1,$email), new \SQL\mangos_realm()) ? JsonResult::ok() : JsonResult::fail();;}
        
    public static function call_tbc_action_item($id){
        return \JsonResult::toString(\SQL\TBC_ITEM::Q1(array($id),\SQL\mangos_one_world::connection()));}
        
    public static function call_tbc_action_itemextendedcost($id){
        return \JsonResult::toString(\SQL\TBC_ITEMEXTENDEDCOST::Q1(array($id),\SQL\mangos_one_dbc::connection()));}
}