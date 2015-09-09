<?php
class default_page extends \SYSTEM\PAGE\Page {
    private function js(){        
        return  \SYSTEM\HTML\html::script(\LIB\lib_jquery::js()).
                \SYSTEM\HTML\html::script(\LIB\lib_bootstrap::js()).
                \SYSTEM\HTML\html::script(\LIB\lib_system::js()).
                \SYSTEM\HTML\html::script(\SYSTEM\WEBPATH(new PPAGE(),'default_page/js/default_page.js'));
    }
    
    private function css(){  
        return  \SYSTEM\HTML\html::link(\LIB\lib_bootstrap::css()).
                \SYSTEM\HTML\html::link(\LIB\lib_font_awesome::css()).
                \SYSTEM\HTML\html::link(\SYSTEM\WEBPATH(new PPAGE(),'default_page/css/default_page.css')).
                \SYSTEM\HTML\html::link(\SYSTEM\WEBPATH(new PPAGE(),'default_page/css/navbar.css'));
    }
    
    public function html($_escaped_fragment_ = NULL){
        $vars = array();
        $vars['js'] = '';
        if(!$_escaped_fragment_){
            $vars['js'] = $this->js();}
        $vars['css'] = $this->css();
        $vars['content_navbar'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_navbar.tpl'));
        $vars['content_client'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_client.tpl'));
        $vars['content_server'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_server.tpl'));
        $vars['content_tshirt'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_tshirt.tpl'));
        $vars['content_addons'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_addons.tpl'));
        $vars['content_more'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_more.tpl'));
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('meta'));
        return \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/default_page.tpl'), $vars);
    }
}
