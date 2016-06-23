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
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_account/tpl/loggedin.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
}