<?php
class default_beta extends \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_beta');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_beta');}
    public function html(){
        $vars = array();
        if(\SYSTEM\SECURITY\security::isLoggedIn()){
            $vars['email'] = \SYSTEM\SECURITY\security::getUser()->email;
            $vars['username'] = \SYSTEM\SECURITY\security::getUser()->username;
            
            $res = \SQL\MOJO_ACCOUNT_MAIN_ACCOUNT::Q1(array($vars['username'],$vars['email']));
            $res['online'] = $res['online'] == 1 ? 'online' : 'offline';
            $vars['wow_accounts'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_login/tpl/wow_account.tpl'))->SERVERPATH(), $res);
            $vars['beta_area'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta_loggedin.tpl'))->SERVERPATH(), $vars);
        } else {
            $vars['beta_area'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta_loggedout.tpl'))->SERVERPATH());}
        $vars = array_merge($vars,\SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta.tpl'))->SERVERPATH(), $vars);
    }
    public static function js(){
        return array(   new PPAGE('default_beta/js/default_beta.js'),
                        \LIB\lib_jqbootstrapvalidation::js());}
}