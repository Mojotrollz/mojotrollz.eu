<?php
class default_minecraft implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_minecraft');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_minecraft');}
    public static function js(){return array();}
    public static function css() {return array();}
    
    public function html(){
        $vars = array(); 
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_minecraft/tpl/default_minecraft.tpl'))->SERVERPATH(), $vars);
    }
}
