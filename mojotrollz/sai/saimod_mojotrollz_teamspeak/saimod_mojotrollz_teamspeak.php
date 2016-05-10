<?php
namespace SAI;
class saimod_mojotrollz_teamspeak extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SAI_saimod_mojotrollz_teamspeak(){
        $vars = array();
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/main.tpl', $vars);}            
    public static function html_li_menu(){return '<li class=""><a data-toggle="tooltip" data-placement="left" title="Mojotrollz Teamspeak" href="#!mojotrollz_teamspeak"><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>&nbsp;&nbsp;Teamspeak</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\Security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(new \PSAI('saimod_mojotrollz_teamspeak/js/saimod_mojotrollz_teamspeak.js'));}
    //public static function css(){}

    public static function sai_mod__SAI_saimod_mojotrollz_teamspeak_action_stats_ts($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_TS::QA(array($filter)));}
}