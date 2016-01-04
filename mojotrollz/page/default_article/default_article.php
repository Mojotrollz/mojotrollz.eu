<?php
class default_article extends \SYSTEM\PAGE\Page {
    var $id = null;
    public function __construct($id) {
        $this->id = $id;}

    public function html(){
        $element = \SYSTEM\PAGE\text::get_adv($this->id);
        $element['published'] = date_format(new DateTime($element['time_create']), 'H:i d-m-Y');
        $element['ago'] = \SYSTEM\time::time_ago_string(strtotime($element['time_create']));
        $element = array_merge($element,\SYSTEM\PAGE\text::tag('time'));
        return SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_article/tpl/article.tpl'), $element);
    }
}