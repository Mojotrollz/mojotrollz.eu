<?php
class default_account implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_account');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_account');}
    public static function js(){
        return array(new \PPAGE('default_account/js/default_account.js'));}
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/loggedout.tpl'))->SERVERPATH(), $vars);}
        
        $vars['email'] = \SYSTEM\SECURITY\security::getUser()->email;
        $vars['username'] = \SYSTEM\SECURITY\security::getUser()->username;
        $vars['option_confirm_email'] = \SYSTEM\SECURITY\security::getUser()->email_confirmed ? '' : \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/option_confirm_email.tpl'))->SERVERPATH(),$vars);
    
        $vars['wow_accounts'] = '';
        $res = \SYSTEM\SECURITY\security::getUser()->email_confirmed ? \SQL\MOJO_ACCOUNT_ACCOUNTS::QQ(array($vars['email'])) : \SQL\MOJO_ACCOUNT_MAIN_ACCOUNT::QQ(array($vars['username'],$vars['email']));
        while($row = $res->next()){
            $row['online'] = $row['online'] == 1 ? 'online' : 'offline';
            $vars['wow_accounts'] .= \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/wow_account.tpl'))->SERVERPATH(), $row);}
        $vars['wow_accounts_confirm'] = \SYSTEM\SECURITY\security::getUser()->email_confirmed ? '' : \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/wow_accounts_confirm.tpl'))->SERVERPATH());
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/loggedin.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
}