<?php
class account_serverstatus implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_account');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_account');}
    public static function js(){
        return array(new \PPAGE('account_serverstatus/js/account_serverstatus.js'));}
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_website/tpl/account_login.tpl'))->SERVERPATH(), $vars);}
        
        $vars['realm_online']   = \SAI\saimod_mojotrollz_servers::sai_mod__SAI_saimod_mojotrollz_servers_action_run_tbc_realm_status() == 1 ? 'online' : 'offline';
        $vars['world_online']   = \SAI\saimod_mojotrollz_servers::sai_mod__SAI_saimod_mojotrollz_servers_action_run_tbc_world_status() == 1 ? 'online' : 'offline';
        $vars['test_online']    = \SAI\saimod_mojotrollz_servers::sai_mod__SAI_saimod_mojotrollz_servers_action_run_tbc_world_test_status() == 1 ? 'online' : 'offline';
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_serverstatus/tpl/account_serverstatus.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
}