<?php
class default_login extends \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_login');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_login');}
    public static function js(){
        return array(new \PPAGE('default_login/js/default_login.js'));}
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_login/tpl/loggedout.tpl'))->SERVERPATH(), $vars);}
        
        $vars['email'] = \SYSTEM\SECURITY\security::getUser()->email;
        $vars['username'] = \SYSTEM\SECURITY\security::getUser()->username;
        
        $res = \SQL\MOJO_ACCOUNT_MAIN_ACCOUNT::Q1(array($vars['username'],$vars['email']));
        $res['online'] = $res['online'] == 1 ? 'online' : 'offline';
        $vars['wow_accounts'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_login/tpl/wow_account.tpl'))->SERVERPATH(), $res);
            
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_login/tpl/loggedin.tpl'))->SERVERPATH(), $vars);
    }
}