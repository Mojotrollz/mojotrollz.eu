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
    
    public static function call_account_action_create($username, $password, $email, $wowpassword){
        if(!\SYSTEM\SECURITY\security::available($username,$email) || !self::wow_username_available($username)){
            throw new \SYSTEM\LOG\ERROR('EMail is already in use or Username is not available.');}
        
        if( !\SYSTEM\SECURITY\security::create($username, $password, $email, \SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_CONFIG_DEFAULT_LANG)) ||
            !self::wow_account_register($username,$email,$wowpassword)){
            throw new ERROR("Account creation failed. Retry later.");}

        return JsonResult::ok();
    }
    //prevent normal register
    //public static function call_account_action_create($username, $password_sha, $email, $locale){
    //    return JsonResult::fail();}
    
    private static function wow_username_available($username){
        return \SQL\MOJO_ACCOUNT_AVAILABLE::Q1(array($username), new \SQL\mangos_realm())['count'] == 0;}
    private static function wow_account_register($username,$email,$password){
        return \SQL\MOJO_ACCOUNT_REGISTER::QI(array($username,$email,$password), new \SQL\mangos_realm());}
        
    public static function call_tbc_action_item($id){
        return \JsonResult::toString(\SQL\TBC_ITEM::Q1(array($id),new \SQL\mangos_one_world()));}
        
    public static function call_tbc_action_itemextendedcost($id){
        return \JsonResult::toString(\SQL\TBC_ITEMEXTENDEDCOST::Q1(array($id),new \SQL\mangos_one_dbc()));}
}