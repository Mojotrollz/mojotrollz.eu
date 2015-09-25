<?php
namespace SAI;

class saimod_mojotrollz_servers extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SAI_saimod_mojotrollz_servers(){
        $vars = array();
        $vars['content'] = '';
        $vars['last_visit'] = \SYSTEM\time::time_ago_string(\SYSTEM\CRON\cron::last('\SYSTEM\CRON\cron_log2sqlite'));
        $res = \SQL\MOJOTROLLZ_SERVER_LIST_ALL::QQ();
        $i = 0;
        while($r = $res->next()){
            $r['selected_0'] = $r['selected_1'] = '';
            $r['selected_'.$r['visible']] = 'selected';
            $r['i'] = $i++;
            $vars['content'] .= \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new \PSAI(),'saimod_mojotrollz_servers/tpl/list_entry.tpl'), $r);}
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag(\SYSTEM\SQL\system_text::TAG_TIME),\SYSTEM\PAGE\text::tag(\SYSTEM\SQL\system_text::TAG_BASIC));
        return \SYSTEM\PAGE\replace::replaceFile(   \SYSTEM\WEBPATH(new \PSAI(),'saimod_mojotrollz_servers/tpl/saimod_mojotrollz_servers.tpl'),$vars);}
    public static function html_li_menu(){return '<li class=""><a id="menu_mojotrollz_servers" data-toggle="tooltip" data-placement="bottom" title="Servers" href="#!mojotrollz_servers"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\Security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    
    /*public static function css(){
        return array(   \SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'modules/saistart_sys_sai/css/saistart_sys_sai.css'));}*/
    public static function js(){
        return array(   \SYSTEM\WEBPATH(new \PSAI(),'saimod_mojotrollz_servers/js/saimod_mojotrollz_servers.js'));}
}