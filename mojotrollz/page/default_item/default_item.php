<?php
class default_item extends \SYSTEM\PAGE\Page {
    public static function js(){
        return array(   \SYSTEM\WEBPATH(new PPAGE(),'default_item/js/default_item.js'));}
    public static function css(){
        return array(   \SYSTEM\WEBPATH(new PPAGE(),'default_item/css/default_item.scss'));}
    public function html(){
        $vars = array();
        $vars['css'] = \SYSTEM\HTML\html::link(\SYSTEM\WEBPATH(new PPAGE(),'default_item/css/default_item.scss'));
        $vars['js'] =   \SYSTEM\HTML\html::script(\LIB\lib_jquery::js()).
                        \SYSTEM\HTML\html::script(\SYSTEM\WEBPATH(new PPAGE(),'default_item/js/handlebars-v4.0.5.js')).
                        \SYSTEM\HTML\html::script(\SYSTEM\WEBPATH(new PPAGE(),'default_item/js/default_item.js'));
        return \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_item/tpl/default_item.tpl'),$vars);
    }
}
