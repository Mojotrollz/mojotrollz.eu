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
                \SYSTEM\HTML\html::link(\SYSTEM\WEBPATH(new PPAGE(),'default_page/css/table.css'));
    }
    
    public function html($_escaped_fragment_ = NULL){
        $vars = array();
        $vars['js'] = '';
        if(!$_escaped_fragment_){
            $vars['js'] = $this->js();}
        $vars['css'] = $this->css();
        $vars['content_facebook'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_facebook.tpl'));
        $vars['content_header'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_header.tpl'));
        $vars['content_menu'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_menu.tpl'));
        $vars['content'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content.tpl'));
        $vars['content_footer'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/content_footer.tpl'));
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('meta'));
        return \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_page/tpl/default_page.tpl'), $vars);
    }
}
