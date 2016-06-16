<?php
class default_donate implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_donate');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_donate');}
    public function html(){
        $vars = \SYSTEM\PAGE\text::tag('mojotrollz');
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_donate/tpl/donate.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
    public static function js() {return array();}
}