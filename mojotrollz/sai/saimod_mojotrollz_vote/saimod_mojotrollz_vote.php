<?php
namespace SAI;

class saimod_mojotrollz_vote extends \SYSTEM\SAI\sai_module {    
    public static function sai_mod__SAI_saimod_mojotrollz_vote(){
        $vars = array();
        $vars['content'] = '';
        $vars['last_visit'] = \SYSTEM\time::time_ago_string(\SYSTEM\CRON\cron::last('\SYSTEM\CRON\cron_log2sqlite'));
        $res = \SQL\MOJOTROLLZ_SERVER_LIST_ALL::QQ();
        $i = 0;
        while($r = $res->next()){
            $r['selected_0'] = $r['selected_1'] = '';
            $r['selected_'.$r['visible']] = 'selected';
            $r['i'] = $i++;
            $vars['content'] .= \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_vote/tpl/list_entry.tpl'))->SERVERPATH(), $r);}
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag(\SYSTEM\SQL\system_text::TAG_TIME),\SYSTEM\PAGE\text::tag(\SYSTEM\SQL\system_text::TAG_BASIC));
        return \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_vote/tpl/saimod_mojotrollz_vote.tpl'))->SERVERPATH(),$vars);}
    public static function html_li_menu(){return '<li><a id="menu_mojotrollz_vote" data-toggle="tooltip" data-placement="left" title="Vote Servers" href="#!mojotrollz_vote"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;&nbsp;Vote Servers</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    
    public static function sai_mod__SAI_saimod_mojotrollz_vote_action_visible($id,$visible){
        \SQL\SAIMOD_MOJOTROLLZ_VISIBLE::QI(array($visible, $id));
        return \SYSTEM\LOG\JsonResult::ok();}
    
    public static function sai_mod__SAI_saimod_mojotrollz_vote_action_save($id,$name,$url,$version,$description){
        \SQL\SAIMOD_MOJOTROLLZ_SAVE::QI(array($id,$name,$url,$version,$description));
        return \SYSTEM\LOG\JsonResult::ok();}
    
    public static function sai_mod__SAI_saimod_mojotrollz_vote_action_del($id){
        \SQL\SAIMOD_MOJOTROLLZ_DEL::QI(array($id));
        return \SYSTEM\LOG\JsonResult::ok();}
    
    /*public static function css(){
        return array((new \SYSTEM\PSAI('modules/saistart_sys_sai/css/saistart_sys_sai.css'));}*/
    public static function js(){
        return array(new \PSAI('saimod_mojotrollz_vote/js/saimod_mojotrollz_vote.js'));}
}