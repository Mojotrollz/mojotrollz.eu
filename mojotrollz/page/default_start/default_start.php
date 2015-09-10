<?php
class default_start extends \SYSTEM\PAGE\Page {
    public static function js(){
        return array(   \SYSTEM\WEBPATH(new PPAGE(),'default_start/js/default_start.js'));}
    
    public function html(){
        $vars = array();
        $vars['content_client'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_client.tpl'));
        $vars['content_server'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_server.tpl'));
        $vars['content_tshirt'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_tshirt.tpl'));
        $vars['content_addons'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_addons.tpl'));
        $vars['content_more'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_more.tpl'));
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('basic'));
        return SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/default_start.tpl'), $vars);
    }
}
