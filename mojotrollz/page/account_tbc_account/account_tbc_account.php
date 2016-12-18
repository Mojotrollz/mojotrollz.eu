<?php
class account_tbc_account implements \SYSTEM\PAGE\Page {
    var $account = NULL;
    public function __construct($account) {
        $this->account = $account;
    }
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_account');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_account');}
    public static function js(){
        return array(new \PPAGE('account_tbc_account/js/account_tbc_account.js'));}
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/account_login.tpl'))->SERVERPATH(), $vars);}
            
        $user = \SYSTEM\SECURITY\security::getUser();    
        if(!$user->email_confirmed && $user->username != $this->account){
            $this->account = $user->username;}
            
        $vars['account'] = $this->account;
        $vars['account_changepassword'] = $user->email_confirmed ? \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_tbc_account/tpl/account_tbc_changepassword.tpl'))->SERVERPATH(),$vars) : '';
        $vars['wow_characters'] = '';
        $res = \SQL\MOJO_ACCOUNT_CHARACTERS::QQ(array($user->email,$this->account));
        while($row = $res->next()){
            $row['online'] = $row['online'] == 1 ? 'online' : 'offline';
            $vars['wow_characters'] .= \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_tbc_account/tpl/wow_character.tpl'))->SERVERPATH(), $row);}
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_tbc_account/tpl/account_tbc_account.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
}