<?php
class default_serverlist extends \SYSTEM\PAGE\Page {
    public static function js(){
        return array(   \SYSTEM\WEBPATH(new PPAGE(),'default_serverlist/js/default_serverlist.js'));}
    
    public function html(){
        $vars = array();
        $vars['server_list'] = '';
        $res = \SQL\MOJOTROLLZ_SERVER_LIST::QQ();
        while($row = $res->next()){
            $row['version'] = self::version_icon($row['version']);
            $vars['server_list'] .= \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_serverlist/tpl/serverlist_tr.tpl'),$row);}
        return \SYSTEM\PAGE\replace::replaceFile(SYSTEM\SERVERPATH(new PPAGE(),'default_serverlist/tpl/serverlist.tpl'), $vars);
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
