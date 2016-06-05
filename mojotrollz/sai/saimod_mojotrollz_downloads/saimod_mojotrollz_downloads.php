<?php
namespace SAI;

class saimod_mojotrollz_downloads extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SAI_saimod_mojotrollz_downloads(){
        $vars = array();
        $vars['content'] = '';
        $res = \SQL\MOJOTROLLZ_DOWNLOADS::QQ();
        $i = 0;
        while($r = $res->next()){
            $r['i'] = $i++;
            $vars['content'] .= \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_downloads/tpl/list_entry.tpl'))->SERVERPATH(), $r);}
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag(\SYSTEM\SQL\system_text::TAG_TIME),\SYSTEM\PAGE\text::tag(\SYSTEM\SQL\system_text::TAG_BASIC));
        return \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_downloads/tpl/saimod_mojotrollz_downloads.tpl'))->SERVERPATH(),$vars);}
    public static function html_li_menu(){return '<li class=""><a data-toggle="tooltip" data-placement="left" title="Mojotrollz Downloads" href="#!mojotrollz_downloads"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;&nbsp;Downloads</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    
    public static function sai_mod__SAI_saimod_mojotrollz_downloads_action_save($id,$link,$img,$text,$subtext){
        \SQL\SAIMOD_MOJOTROLLZ_DOWNLOADS_SAVE::QI(array($id,$link,$img,$text,$subtext));
        return \SYSTEM\LOG\JsonResult::ok();}
    
    public static function sai_mod__SAI_saimod_mojotrollz_downloads_action_del($id){
        \SQL\SAIMOD_MOJOTROLLZ_DOWNLOADS_DEL::QI(array($id));
        return \SYSTEM\LOG\JsonResult::ok();}
    
    /*public static function css(){
        return array((new \SYSTEM\PSAI('modules/saistart_sys_sai/css/saistart_sys_sai.css'));}*/
    public static function js(){
        return array(new \PSAI('saimod_mojotrollz_downloads/js/saimod_mojotrollz_downloads.js'));}
}