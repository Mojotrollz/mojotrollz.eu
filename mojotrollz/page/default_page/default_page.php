<?php
class default_page implements \SYSTEM\PAGE\DefaultPage {
    public static function js(){        
        return  \SYSTEM\HTML\html::script(\SYSTEM\CACHE\cache_js::minify(
                    array(  \LIB\lib_jquery::js(),
                            \LIB\lib_bootstrap3::js(),
                            \LIB\lib_jqbootstrapvalidation::js(),
                            \LIB\lib_flexslider::js(),
                            \LIB\lib_system::js(),
                            new PPAGE('default_page/js/default_page.js'))));
    }
    
    public static function css(){  
        return  \SYSTEM\HTML\html::link(\LIB\lib_bootstrap3::css()->WEBPATH(false)).
                \SYSTEM\HTML\html::link(\LIB\lib_font_awesome4::css()->WEBPATH(false)).
                \SYSTEM\HTML\html::link(\SYSTEM\CACHE\cache_css::minify(
                    array(  \LIB\lib_flexslider::css(),
                            \LIB\lib_animate::css(),
                            \LIB\lib_system::css(),
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
