<?php
class default_register extends \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_register');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_register');}
    public function html(){
        $vars = array();
        $vars = array_merge($vars,\SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile(   \SYSTEM\SECURITY\security::isLoggedIn() ?
                                                    (new PPAGE('default_register/tpl/register_loggedin.tpl'))->SERVERPATH() :
                                                    (new PPAGE('default_register/tpl/default_register.tpl'))->SERVERPATH(), $vars);
    }
    public static function js(){
        return array(   new PPAGE('default_register/js/default_register.js'),
                        \LIB\lib_jqbootstrapvalidation::js());}
}