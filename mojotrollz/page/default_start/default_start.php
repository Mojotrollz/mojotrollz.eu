<?php
class default_start implements \SYSTEM\PAGE\Page {
    public static function title(){
        return \SYSTEM\PAGE\text::get('title_start');}
    public static function meta(){
        return \SYSTEM\PAGE\text::tag('meta_start');}
    public static function js(){
        return array(new PPAGE('default_start/js/default_start.js'));}
    private static function downloads(){
        $result = '';
        $res = \SQL\MOJOTROLLZ_DOWNLOADS::QQ();
        while($row = $res->next()){
            $result .= \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_start/tpl/mojotrollz_download.tpl'))->SERVERPATH(),$row);}
        return $result;
    }
    
    public function html(){
        $vars = array();
        
        $vars['content_tshirt'] = '';//\SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_tshirt.tpl'));
        $vars['content_addons'] = '';//\SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_addons.tpl'));
            
        \LIB\lib_ts3::php();
        $ts3 = TeamSpeak3::factory("serverquery://mojotrollztsquery:9aYllYkG@127.0.0.1:10011/");
        $vars['ts_players'] = $ts3->serverGetByPort(9987)->clientCount();
        $vars['mojotrollz_downloads'] = self::downloads();
        
        /*$vars['addon_list'] = '';
        $res = \SQL\MOJOTROLLZ_ADDON_LIST::QQ();
        while($row = $res->next()){
            $row['download_1_12_1'] = $row['link_1_12_1'] ? \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/addonlist_download.tpl'),array('version' => '1.12.1', 'link' => $row['link_1_12_1'])) : '';
            $row['download_2_4_3']  = $row['link_2_4_3'] ? \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/addonlist_download.tpl'),array('version' => '2.4.3', 'link' => $row['link_2_4_3'])) : '';
            $row['download_3_3_5a'] = $row['link_3_3_5a'] ? \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/addonlist_download.tpl'),array('version' => '3.3.5a', 'link' => $row['link_3_3_5a'])) : '';
            $vars['addon_list'] .= \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/addonlist_tr.tpl'),$row);}*/
            
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_start/tpl/default_start.tpl'))->SERVERPATH(), $vars);
    }

    public static function css() {return array();}
}
