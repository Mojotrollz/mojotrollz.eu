<?php
namespace SAI;
class saimod_mojotrollz_npc_vendor_template extends \SYSTEM\SAI\SaiModule {
    public static function sai_mod__SAI_saimod_mojotrollz_npc_vendor_template(){
        $vars = array();
        return \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new \PSAI(),'saimod_mojotrollz_npc_vendor_template/tpl/npc_vendor_template.tpl'), $vars);}
    
    public static function html_li_menu(){return '<li role="separator" class="nav-divider"></li><li><a data-toggle="tooltip" data-placement="left" title="test server: npc_vendor_template" href="#!mojotrollz_npc_vendor_template"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;Vendor Template</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\Security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(\SYSTEM\WEBPATH(new \PSAI(),'saimod_mojotrollz_npc_vendor_template/js/saimod_mojotrollz_npc_vendor_template.js'));}        
    //public static function css(){return array();}
}