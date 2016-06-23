<?php
class account_website implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_account');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_account');}
    public static function js(){
        return array(new \PPAGE('account_website/js/account_website.js'));}
    public function html(){
        if(!\SYSTEM\SECURITY\security::isLoggedIn()){
            throw new \SYSTEM\LOG\ERROR("You need to be logged in!");}
        
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        $vars['email'] = \SYSTEM\SECURITY\security::getUser()->email;
        $vars['username'] = \SYSTEM\SECURITY\security::getUser()->username;
        $vars['option_confirm_email'] = \SYSTEM\SECURITY\security::getUser()->email_confirmed ? '' : \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_website/tpl/option_confirm_email.tpl'))->SERVERPATH(),$vars);
    
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('account_website/tpl/account_website.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
}