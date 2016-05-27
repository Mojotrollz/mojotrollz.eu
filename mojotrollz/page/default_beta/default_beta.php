<?php
class default_beta extends \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_beta');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_beta');}
    public function html(){
        $vars = array();
        $vars['beta_area'] =    \SYSTEM\SECURITY\Security::isLoggedIn() ?
                                \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta_loggedin.tpl'))->SERVERPATH(), array('email' => \SYSTEM\SECURITY\Security::getUser()->email,'username' => \SYSTEM\SECURITY\Security::getUser()->username)) :
                                \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta_loggedout.tpl'))->SERVERPATH());
        $vars = array_merge($vars,\SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_beta/tpl/beta.tpl'))->SERVERPATH(), $vars);
    }
    public static function js(){
        return array(   new PPAGE('default_beta/js/default_beta.js'),
                        \LIB\lib_jqbootstrapvalidation::js());}
}