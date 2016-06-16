<?php
class default_page implements \SYSTEM\PAGE\DefaultPage {
    public static function js(){        
        return  \SYSTEM\HTML\html::script(\LIB\lib_jquery::js()->WEBPATH()).
                \SYSTEM\HTML\html::script(\LIB\lib_bootstrap::js()->WEBPATH()).
                \SYSTEM\HTML\html::script(\LIB\lib_jqbootstrapvalidation::js()->WEBPATH()).
                \SYSTEM\HTML\html::script(\LIB\lib_flexslider::js()->WEBPATH()).
                \SYSTEM\HTML\html::script(\SYSTEM\CACHE\cache_js::url(
                    array(  \LIB\lib_system::js(),
                            new PPAGE('default_page/js/default_page.js'))));
    }
    
    public static function css(){  
        return  \SYSTEM\HTML\html::link(\LIB\lib_bootstrap::css()->WEBPATH(false)).
                \SYSTEM\HTML\html::link(\LIB\lib_font_awesome::css()->WEBPATH(false)).
                \SYSTEM\HTML\html::link(\LIB\lib_animate::css()->WEBPATH()).
                \SYSTEM\HTML\html::link(\LIB\lib_flexslider::css()->WEBPATH(false)).
                \SYSTEM\HTML\html::link(\SYSTEM\CACHE\cache_css::url(
                    array(  \LIB\lib_system::css(),
                            new PPAGE('default_page/css/default_page.css'),
                            new PPAGE('default_page/css/btn-success.css'),
                            new PPAGE('default_page/css/btn-primary.css'),
                            new PPAGE('default_page/css/btn-warning.css'),
                            new PPAGE('default_page/css/flexslider.css'),
                            new PPAGE('default_page/css/table.css')
                )));
    }
    
    public function html($_escaped_fragment_ = NULL){
        $vars = array();
        $vars['js'] = $_escaped_fragment_ ? '' : self::js();
        $vars['css'] = self::css();
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_page/tpl/default_page.tpl'))->SERVERPATH(), $vars);
    }
}
