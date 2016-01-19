<?php
class default_article extends \SYSTEM\PAGE\Page {
    var $id = null;
    public function __construct($id) {
        $this->id = $id;}
    public static function js(){
        return array(   new PPAGE('default_article/js/handlebars-v4.0.5.js'),
                        new PPAGE('default_article/js/default_article.js'));}
    public static function scss(){
        return array(   new PPAGE('default_article/css/default_item.scss'));}
        
    public function html(){
        $element = array('text' => \SYSTEM\PAGE\text::get($this->id));
        $element = array_merge($element,\SYSTEM\PAGE\text::tag('time'));
        return SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_article/tpl/article.tpl'))->SERVERPATH(), $element);
    }
}