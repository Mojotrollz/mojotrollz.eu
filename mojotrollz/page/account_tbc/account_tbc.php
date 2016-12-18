<?php
class account_tbc implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_account');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_account');}
    public static function js(){
        return array(new \PPAGE('account_tbc/js/account_tbc.js'));}
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_website/tpl/account_login.tpl'))->SERVERPATH(), $vars);}
        
        $vars['email'] = \SYSTEM\SECURITY\security::getUser()->email;
        $vars['username'] = \SYSTEM\SECURITY\security::getUser()->username;
        $vars['wow_accounts'] = '';
        $res = \SYSTEM\SECURITY\security::getUser()->email_confirmed ? \SQL\MOJO_ACCOUNT_ACCOUNTS::QQ(array($vars['email'])) : \SQL\MOJO_ACCOUNT_MAIN_ACCOUNT::QQ(array($vars['username'],$vars['email']));
        while($row = $res->next()){
            $row['online'] = $row['online'] == 1 ? 'online' : 'offline';
            $vars['wow_accounts'] .= \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/wow_account.tpl'))->SERVERPATH(), $row);}
        $vars['wow_accounts_confirm'] = \SYSTEM\SECURITY\security::getUser()->email_confirmed ?
            \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_tbc/tpl/account_tbc_new.tpl'))->SERVERPATH()) :
            \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/wow_accounts_confirm.tpl'))->SERVERPATH());
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_tbc/tpl/account_tbc.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
}