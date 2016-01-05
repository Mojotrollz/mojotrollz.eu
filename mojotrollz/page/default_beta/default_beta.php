<?php
class default_beta extends \SYSTEM\PAGE\Page {
    private $key = null;
    public function __construct($key=null) {
        $this->key=$key;}
    public function html(){
        if(!\SAI\saimod_mojotrollz_beta::code_check($this->key)){
            $vars = array();
            $vars['invalid_key'] = ($this->key && !\SYSTEM\SECURITY\Security::isLoggedIn()) ? '<p><font color="red">Your key is invalid or already in use!</font></p>' : '';
            $vars['beta_area'] =    \SYSTEM\SECURITY\Security::isLoggedIn() ?
                                    \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_beta/tpl/beta_loggedin.tpl'), array('email' => \SYSTEM\SECURITY\Security::getUser()->email,'username' => \SYSTEM\SECURITY\Security::getUser()->username)) :
                                    \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_beta/tpl/beta_loggedout.tpl'));
            $vars = array_merge($vars,\SYSTEM\PAGE\text::tag('mojotrollz'));
            return \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_beta/tpl/beta.tpl'), $vars);
        }
        $vars['key'] = $this->key;
        $vars = array_merge($vars,\SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_beta/tpl/beta_register.tpl'), $vars);
    }
    public static function js(){
        return array(   \SYSTEM\WEBPATH(new PPAGE(),'default_beta/js/default_beta.js'),
                        \LIB\lib_jqbootstrapvalidation::js());}
}