<?php
class default_article extends \SYSTEM\PAGE\Page {
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
}