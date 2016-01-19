<?php
class default_impressum extends \SYSTEM\PAGE\Page {
    public function html(){
        $vars['impressum'] = \SYSTEM\PAGE\text::get('webcraft_impressum');
        return SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_impressum/tpl/impressum.tpl'))->SERVERPATH(), $vars);
    }
}