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
        
        $vars['server_list'] = '';
        $res = \SQL\MOJOTROLLZ_SERVER_LIST::QQ();
        while($row = $res->next()){
            $row['version'] = self::version_icon($row['version']);
            $vars['server_list'] .= \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/serverlist_tr.tpl'),$row);}
            
        \LIB\lib_ts3::php();
        // connect to local server, authenticate and spawn an object for the virtual server on port 9987
        $ts3 = TeamSpeak3::factory("serverquery://mojotrollztsquery:9aYllYkG@127.0.0.1:10011/");
        // query clientlist from virtual server
        $clients = $ts3->serverGetByPort(9987)->clientCount();
        $vars['ts_players'] = $clients;
            
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('basic'));
        return \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_start/tpl/default_start.tpl'), $vars);
    }
    
    private static function version_icon($version){
        switch($version){
            case 0:
                return 'wow_normal.png';
            case 1:
                return 'wow_bc_normal.png';
            case 2:
                return 'wow_wotlk_normal.png';
            default:
                return '';
        }
    }
}
