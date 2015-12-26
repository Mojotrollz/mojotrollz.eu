<?php
class default_beta extends \SYSTEM\PAGE\Page {
    private $key = null;
    public function __construct($key=null) {
        $this->key=$key;}
    public function html(){
        if(\SQL\BETA_CHECK_CODE::Q1(array($this->key))['count'] == 0){
            $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
            $vars['invalid_key'] = $this->key ? '<p><font color="red">Your key is invalid or already in use!</font></p>' : '';
            return \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_beta/tpl/beta.tpl'), $vars);
        }
        $vars = \SYSTEM\PAGE\text::tag('basic');
        $vars['key'] = $this->key;
        return \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_beta/tpl/beta_register.tpl'), $vars);
    }
    public static function js(){
        return array(   \SYSTEM\WEBPATH(new PPAGE(),'default_beta/js/default_beta.js'),
                        \LIB\lib_jqbootstrapvalidation::js());}
}