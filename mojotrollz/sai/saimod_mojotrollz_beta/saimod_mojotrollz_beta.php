<?php
namespace SAI;
class saimod_mojotrollz_beta extends \SYSTEM\SAI\SaiModule {
    public static function code_check($code){
        return \SQL\BETA_CHECK_CODE::Q1(array($code))['count'] > 0;}
    
    public static function code_use($code,$user_new){
        return \SQL\BETA_USE_CODE::QI(array($user_new,$code));}
    
    public static function sai_mod__SAI_saimod_mojotrollz_beta_action_del($code){
        \SQL\BETA_DELETE_CODE::QI(array($code));
        return \JsonResult::ok();}
    public static function sai_mod__SAI_saimod_mojotrollz_beta($generate = false){
        $vars = array();
        $vars['entries'] = $vars['beta_code'] = '';
        
        if($generate){
            $vars['beta_code'] = \substr(\sha1(\rand(1, 99999)), 1, 6);
            if(!\SQL\BETA_INSERT_CODE::QI(array($vars['beta_code'], \SYSTEM\SECURITY\Security::getUser()->id))){
                $vars['beta_code'] = 'generate code failed. Retry!';}
        }
        
        $res = \SQL\BETA_GET_CODE::QQ();
        while($code = $res->next()){
            $code['ago_date_generated'] = \SYSTEM\time::time_ago_string(strtotime($code['date_generated']));
            $code['ago_date_redeemed'] = $code['date_redeemed'] ? \SYSTEM\time::time_ago_string(strtotime($code['date_redeemed'])) : 'Open';
            $vars['entries'] .= \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_beta/tpl/beta_entry.tpl'))->SERVERPATH(), $code);}
        $vars = \array_merge($vars, \SYSTEM\PAGE\text::tag('time'));    
        return \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_beta/tpl/beta.tpl'))->SERVERPATH(), $vars);}
    
    public static function html_li_menu(){return '<li class=""><a data-toggle="tooltip" data-placement="left" title="Mojotrollz Beta Codes" href="#!mojotrollz_beta"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Beta</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\Security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(new \PSAI('saimod_mojotrollz_beta/js/saimod_mojotrollz_beta.js'));}        
    //public static function css(){return array();}
}