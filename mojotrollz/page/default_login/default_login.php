<?php
class default_login extends \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_login');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_login');}
    public static function js(){
        return array(new \PPAGE('default_login/js/default_login.js'));}
    public function html(){
        return \SYSTEM\SECURITY\Security::isLoggedIn() ? 
                \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_login/tpl/loggedin.tpl'))->SERVERPATH(), \SYSTEM\PAGE\text::tag('mojotrollz'))
                : \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_login/tpl/loggedout.tpl'))->SERVERPATH(), \SYSTEM\PAGE\text::tag('mojotrollz'));
    }
}