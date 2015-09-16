<?php
class default_login extends \SYSTEM\PAGE\Page {
    public function html(){
        return SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new PPAGE(),'default_login/tpl/login.tpl'));
    }
}