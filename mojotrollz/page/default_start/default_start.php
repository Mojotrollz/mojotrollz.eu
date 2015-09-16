<?php
class default_start extends \SYSTEM\PAGE\Page {
    public static function js(){
        return array(   \SYSTEM\WEBPATH(new PPAGE(),'default_start/js/default_start.js'));}
    
    public function html(){
        $vars = array();
        
        $vars['content_client'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_client.tpl'));
        $vars['content_server'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_server.tpl'));
        $vars['content_tshirt'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_tshirt.tpl'));
        $vars['content_addons'] = \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/content_addons.tpl'));
        
        $vars['magnet_classic'] = 'magnet:?xt=urn:btih:m5dkc7lnrryhleqpugzspoyurwsaykyg&dn=WoW%201.12.1&xl=5387778663&fc=38';
        $vars['magnet_bc'] = 'magnet:?xt=urn:btih:akirevdngf3djcti35gnk4l2z6ffoyw2&dn=WoW%202.4.3&xl=9537364669&fc=305';
        $vars['magnet_wotlk'] = 'magnet:?xt=urn:btih:3u442mbojtl46ywlspou2d4ai5qo2i7r&dn=WoW%203.3.5a&xl=17897255192&fc=172';
            
        \LIB\lib_ts3::php();
        $ts3 = TeamSpeak3::factory("serverquery://mojotrollztsquery:9aYllYkG@127.0.0.1:10011/");
        $vars['ts_players'] = $ts3->serverGetByPort(9987)->clientCount();
        
        $vars['addon_list'] = '';
        $res = \SQL\MOJOTROLLZ_ADDON_LIST::QQ();
        while($row = $res->next()){
            $row['download_1_12_1'] = $row['link_1_12_1'] ? \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/addonlist_download.tpl'),array('version' => '1.12.1', 'link' => $row['link_1_12_1'])) : '';
            $row['download_2_4_3']  = $row['link_2_4_3'] ? \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/addonlist_download.tpl'),array('version' => '2.4.3', 'link' => $row['link_2_4_3'])) : '';
            $row['download_3_3_5a'] = $row['link_3_3_5a'] ? \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/addonlist_download.tpl'),array('version' => '3.3.5a', 'link' => $row['link_3_3_5a'])) : '';
            $vars['addon_list'] .= \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/addonlist_tr.tpl'),$row);}
            
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/default_start.tpl'), $vars);
    }
}
