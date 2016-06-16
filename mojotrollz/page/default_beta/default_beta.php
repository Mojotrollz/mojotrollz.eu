<?php
class default_beta implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_beta');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_beta');}
    public function html(){
        $vars = array();
        if(\SYSTEM\SECURITY\security::isLoggedIn()){
            $vars['email'] = \SYSTEM\SECURITY\security::getUser()->email;
            $vars['username'] = \SYSTEM\SECURITY\security::getUser()->username;
            
            $vars['wow_accounts'] = '';
            $res = \SYSTEM\SECURITY\security::getUser()->email_confirmed ? \SQL\MOJO_ACCOUNT_ACCOUNTS::QQ(array($vars['email'])) : \SQL\MOJO_ACCOUNT_MAIN_ACCOUNT::QQ(array($vars['username'],$vars['email']));
            while($row = $res->next()){
                $row['online'] = $row['online'] == 1 ? 'online' : 'offline';
                $vars['wow_accounts'] .= \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/wow_account.tpl'))->SERVERPATH(), $row);
            }
            $vars['beta_area'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta_loggedin.tpl'))->SERVERPATH(), $vars);
        } else {
            $vars['beta_area'] = \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta_loggedout.tpl'))->SERVERPATH());}
        $vars = array_merge($vars,\SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta.tpl'))->SERVERPATH(), $vars);
    }
    public static function js(){
        return array(   new PPAGE('default_beta/js/default_beta.js'),
                        \LIB\lib_jqbootstrapvalidation::js());}

    public static function css() {return array();}
}