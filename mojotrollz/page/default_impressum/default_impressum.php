<?php
class default_impressum extends \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_impressum');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_impressum');}
    public function html(){
        $vars['impressum'] = \SYSTEM\PAGE\text::get('webcraft_impressum');
        return SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_impressum/tpl/impressum.tpl'))->SERVERPATH(), $vars);
    }
}