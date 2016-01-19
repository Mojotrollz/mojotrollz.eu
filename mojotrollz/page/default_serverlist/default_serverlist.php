<?php
class default_serverlist extends \SYSTEM\PAGE\Page {
    public static function js(){
        return array(   new PPAGE('default_serverlist/js/default_serverlist.js'));}
    
    public function html(){
        $vars = array();
        $vars['server_list'] = '';
        $vote = \SQL\MOJOTROLLZ_IP_VOTED::Q1(array($_SERVER['REMOTE_ADDR']));
        $vote_server = $vote ? $vote['server'] : null;
        $res = \SQL\MOJOTROLLZ_SERVER_LIST::QQ();
        while($row = $res->next()){
            $row['version'] = self::version_icon($row['version']);
            $row['version_url'] = \str_replace('.', '_', $row['version']);
            $row['btn_vote_color'] = 'btn-warning';
            $row['glyphicon_vote'] = 'glyphicon-hand-up';
            if(!$vote_server){
                $row['btn_vote_color'] = 'btn-success';}
            if($vote_server == $row['id']){
                $row['btn_vote_color'] = 'btn-success';
                $row['glyphicon_vote'] = 'glyphicon-ok';
            }
            $row['score'] += $row['votes'];
            $vars['server_list'] .= \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_serverlist/tpl/serverlist_tr.tpl'))->SERVERPATH(),$row);}
        $vars = array_merge($vars, \SYSTEM\PAGE\text::tag('mojotrollz'));
        return \SYSTEM\PAGE\replace::replaceFile((new PPAGE('default_serverlist/tpl/serverlist.tpl'))->SERVERPATH(), $vars);
    }
    
    private static function version_icon($version){
        switch($version){
            case 1:
                return '1.12.1';
            case 2:
                return '2.4.3';
            case 3:
                return '3.3.5a';
            default:
                return '';
        }
    }
}
