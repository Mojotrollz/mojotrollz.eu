<?php
class default_donate extends \SYSTEM\PAGE\Page {
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_donate/tpl/donate.tpl'))->SERVERPATH(), $vars);
    }
    //public static function js(){
    //    return array(   new PPAGE('default_beta/js/default_beta.js'),
    //                    \LIB\lib_jqbootstrapvalidation::js());}
}