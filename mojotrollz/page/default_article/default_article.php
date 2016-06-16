<?php
class default_article implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_article');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_article');}
    var $id = null;
    public function __construct($id) {
        $this->id = $id;}
    public static function js(){
        return array(   new PPAGE('default_article/js/default_article.js'));}
        
    public function html(){
        $element = array('text' => \SYSTEM\PAGE\text::get($this->id));
        $element = array_merge($element,\SYSTEM\PAGE\text::tag('time'));
        return SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_article/tpl/article.tpl'))->SERVERPATH(), $element);
    }

    public static function css(){return array();}
}