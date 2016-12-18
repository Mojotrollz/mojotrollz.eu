<?php
class account_changeemail implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_account');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_account');}
    public static function js(){
        return array(new \PPAGE('account_changeemail/js/account_changeemail.js'));}
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_website/tpl/account_login.tpl'))->SERVERPATH(), $vars);}
        
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_changeemail/tpl/account_changeemail.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
}