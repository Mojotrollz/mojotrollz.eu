<?php
class default_login extends \SYSTEM\PAGE\Page {
    public static function js(){
        return array(\SYSTEM\WEBPATH(new \PPAGE(),'default_login/js/default_login.js'));}
    public function html(){
        return \SYSTEM\SECURITY\Security::isLoggedIn() ? 
                \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_login/tpl/loggedin.tpl'), \SYSTEM\PAGE\text::tag('mojotrollz'))
                : \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_login/tpl/loggedout.tpl'), \SYSTEM\PAGE\text::tag('mojotrollz'));
    }
}