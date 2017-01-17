<?php
namespace SAI;
class saimod_mojotrollz_server_tbc extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc(){
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/mojotrollz_server_tbc.tpl');}
    public static function html_li_menu(){return '<li class=""><a data-toggle="tooltip" data-placement="left" title="Mojotrollz TBC Server" href="#!mojotrollz_server_tbc"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>&nbsp;&nbsp;TBC Server</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(new \PSAI('saimod_mojotrollz_server_tbc/js/saimod_mojotrollz_server_tbc.js'));}
    //public static function css(){}
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_status(){
        $vars = array();
        $vars['tbc_realm_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_realm_status();
        $vars['tbc_world_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_status();
        $vars['tbc_world_test_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_test_status();
        $vars['tbc_players_online'] = self::online_tbc();
        $vars['tbc_test_players_online'] = self::online_tbc_test();
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/status.tpl', $vars);
    }
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_control(){
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/control.tpl');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_account($search='%',$page=0){
        $res = \SQL\TBC_ACCOUNTS::QQ(array($search,$search,$search));
        $count = \SQL\TBC_ACCOUNTS_COUNT::Q1(array($search,$search,$search))['count'];
        
        $vars = array();
        $vars['search'] = $search;
        $vars['page'] = $page;
        $vars['entries'] = '';
        $count_filtered = 0;
        $res->seek(100*$page);
        while(($r = $res->next()) && ($count_filtered < 100)){  
            $r['online'] = $r['online'] == 1 ? 'online' : 'offline';
            $r['system_account'] = $r['system_account'] > 0 ? 'online' : 'offline';
            $r['bot'] = $r['bot'] > 0 ? 'online' : 'offline';
            $r['username'] = \htmlspecialchars($r['username']);
            $vars['entries'] .= \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/account_entry.tpl', $r);
            $count_filtered++;}
        $vars['pagination'] = '';
        $vars['page_last'] = ceil($count/100)-1;
        for($i=0;$i < ceil($count/100);$i++){
            $data = array('page' => $i,'search' => $search, 'active' => ($i == $page) ? 'active' : '');
            $vars['pagination'] .= \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/account_pagination.tpl', $data);
        }
        $vars['count'] = $count_filtered.'/'.$count;
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/account.tpl',$vars);
    }
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_account_show($id){
        $vars = \SQL\TBC_ACCOUNT::Q1(array($id));
        $vars['entries'] = $vars['entries_test'] = '';
        $res = \SQL\TBC_ACCOUNT_CHARACTERS::QQ(array($id));
        while($r = $res->next()){
            $r['online'] = $r['online'] == 1 ? 'online' : 'offline';
            $r['status'] = $r['bot'] ? '1' : '0';
            $r['bot'] = $r['bot'] ? 'online' : 'offline';
            $r['server'] = 0;
            $r['account'] = $vars['id'];
            $vars['entries'] .= \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/account_show_entry.tpl', $r);
        }
        $res = \SQL\TBC_CHARACTERS_TEST::QQ(array($id));
        while($r = $res->next()){
            $r['online'] = $r['online'] == 1 ? 'online' : 'offline';
            $r['status'] = $r['bot'] ? '1' : '0';
            $r['bot'] = $r['bot'] ? 'online' : 'offline';
            $r['server'] = 1;
            $r['account'] = $vars['id'];
            $vars['entries_test'] .= \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/account_show_entry_test.tpl', $r);
        }
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/account_show.tpl',$vars);
    }
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_delete_account($id){
        $account = \SQL\TBC_ACCOUNT_CHARACTERS_COUNT::Q1(array($id));
        if(!$account){
            throw new \SYSTEM\LOG\ERROR('Account not found.');}
        if($account['char_count'] > 0){
            throw new \SYSTEM\LOG\ERROR('Account still has Characters.');}
        \SQL\TBC_ACCOUNT_DELETE::QI(array($id));
        return \SYSTEM\LOG\JsonResult::ok();
    }
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_character($search='%',$page=0){
        $res = \SQL\TBC_CHARACTERS::QQ(array($search,$search,$search));
        $count = \SQL\TBC_CHARACTERS_COUNT::Q1(array($search,$search,$search))['count'];
        
        $vars = array();
        $vars['search'] = $search;
        $vars['page'] = $page;
        $vars['entries'] = '';
        $count_filtered = 0;
        $res->seek(100*$page);
        while(($r = $res->next()) && ($count_filtered < 100)){  
            $r['online'] = $r['online'] == 1 ? 'online' : 'offline';
            $r['system_account'] = $r['system_account'] > 0 ? 'online' : 'offline';
            $r['bot'] = $r['bot'] > 0 ? 'online' : 'offline';
            $r['username'] = \htmlspecialchars($r['username']);
            $r['totaltime'] = floor($r['totaltime']/86400).'d '.gmdate("H\h i\m s\s", $r['totaltime']);
            $vars['entries'] .= \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/character_entry.tpl', $r);
            $count_filtered++;}
        $vars['pagination'] = '';
        $vars['page_last'] = ceil($count/100)-1;
        for($i=0;$i < ceil($count/100);$i++){
            $data = array('page' => $i,'search' => $search, 'active' => ($i == $page) ? 'active' : '');
            $vars['pagination'] .= \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/character_pagination.tpl', $data);
        }
        $vars['count'] = $count_filtered.'/'.$count;
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/character.tpl',$vars);
    }
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_character_show($guid){
        $vars = \SQL\TBC_CHARACTER::Q1(array($guid));
        $vars['totaltime'] = floor($vars['totaltime']/86400).'d '.gmdate("H\h i\m s\s", $vars['totaltime']);
        $vars['online'] = $vars['online'] == 1 ? 'online' : 'offline';
        $vars['status'] = $vars['bot'] ? '1' : '0';
        $vars['bot'] = $vars['bot'] > 0 ? 'online' : 'offline';
        $vars['server'] = 0;
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/character_show.tpl',$vars);
    }
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_change_account($guid, $accountname){
        $account = \SQL\TBC_ACCOUNT_NAME::Q1(array($accountname));
        if(!$account){
            throw new \SYSTEM\LOG\ERROR('Account not found.');}
        if($account['char_count'] >= 10){
            throw new \SYSTEM\LOG\ERROR('Account has to many Characters.');}
        \SQL\TBC_CHARACTER_CHANGE_ACCOUNT::QI(array($account['id'],$guid));
        return \SYSTEM\LOG\JsonResult::ok();
    }
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_bot_toggle($account, $guid, $server, $status){
        if($status == 0){
            \SQL\TBC_CHARACTER_BOT::QI(array($account,$guid,$server));
            //\mojotrollz_tbc_soap::test_bot_login($account, $guid);
        } else {
            \SQL\TBC_CHARACTER_UNBOT::QI(array($account));
            $server == 0 ? \mojotrollz_tbc_soap::bot_logout($account) : \mojotrollz_tbc_soap::test_bot_logout($account);
        }
    }
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_stats_tbc_player($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_TBC_PLAYER::QA(array($filter)));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_stats_tbc_server($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_TBC_SERVER::QA(array($filter)));}
            
    public static function online_tbc(){
        return \SQL\ONLINE_PLAYERS::Q1(new \SQL\mangos_one_chars())['count'];}
    public static function online_tbc_test(){
        return \SQL\ONLINE_PLAYERS::Q1(new \SQL\mangos_one_chars_test())['count'];}
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_chars_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Char.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/Char.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_chars_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Char.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/Char.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_db_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/DBErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_db_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/DBErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_database_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Database.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/Database.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_eventai_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/EventAIErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_eventai_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/EventAIErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_gm_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Gm.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/Gm.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_gm_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Gm.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/Gm.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_realm_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/Realmd.log'));}
    /*public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_realm_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/Realmd.log'));}*/
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_sd2_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/SD2Errors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/SD2Errors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_sd2_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/SD2Errors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/SD2Errors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_server_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Server.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/Server.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_server_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Server.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/Server.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_crash_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/bin/bin/crash.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/bin/bin/crash.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_crash_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/bin_test/bin/crash.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/bin_test/bin/crash.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_serverlog_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/bin/bin/serverlog')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/bin/bin/serverlog'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_serverlog_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/bin_test/bin/serverlog')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/bin_test/bin/serverlog'));}
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_chars_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Char.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/Char.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_chars_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Char.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/Char.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_db_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/DBErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_db_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/DBErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_database_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Database.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/Database.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_eventai_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/EventAIErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_eventai_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/EventAIErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_gm_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Gm.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/Gm.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_gm_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Gm.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/Gm.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_realm_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/Realmd.log',''));}
    /*public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_realm_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/Realmd.log',''));}*/
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_sd2_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/SD2Errors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/SD2Errors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_sd2_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/SD2Errors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/SD2Errors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_server_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Server.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/Server.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_server_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Server.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/Server.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_crash_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/bin/bin//crash.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/bin/bin/crash.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_crash_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/bin_test/bin/crash.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/bin_test/bin/crash.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_serverlog_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/bin/bin/serverlog')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/bin/bin/serverlog',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_serverlog_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/bin_test/bin/serverlog')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/bin_test/bin/serverlog',''));}
    
    private static function shell_run($ver,$prog,$cmd){
        return \str_replace("\n","\r\n",shell_exec('/home/mojotrollz/mojo/run '.$ver.' '.$prog.' '.$cmd.' 2>&1'));}
    private static function shell_db($ver,$db,$cmd){
        return \str_replace("\n","\r\n",shell_exec('/home/mojotrollz/mojo/db '.$ver.' '.$db.' '.$cmd.' 2>&1'));}
    private static function shell_compile($ver,$cmd){
        return \str_replace("\n","\r\n",shell_exec('/home/mojotrollz/mojo/compile '.$ver.' '.$cmd.' 2>&1'));}
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_compile_tbc_live(){
        $log  = \htmlentities(self::shell_compile('tbc', 'live'));
        $log .= chmod('/home/mojotrollz/mojo/'.'tbc/server/bin/bin/run-mangosd',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
        return $log;
    }
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_compile_tbc_test(){
        $log  = \htmlentities(self::shell_compile('tbc', 'test'));
        $log .= chmod('/home/mojotrollz/mojo/'.'tbc/server/bin_test/bin/run-mangosd',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
        return $log;
    }
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_db_tbc_realm_live(){
        return \htmlentities(self::shell_db('tbc', 'realm', 'live'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_db_tbc_chars_live(){
        return \htmlentities(self::shell_db('tbc', 'chars', 'live'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_db_tbc_chars_test(){
        return \htmlentities(self::shell_db('tbc', 'chars', 'test'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_db_tbc_world_live(){
        return \htmlentities(self::shell_db('tbc', 'world', 'live'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_db_tbc_world_test(){
        return \htmlentities(self::shell_db('tbc', 'world', 'test'));}
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_realm_start(){
        return self::shell_run('tbc', 'realm','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_start(){
        return self::shell_run('tbc', 'world','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_test_start(){
        return self::shell_run('tbc', 'world_test','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_realm_stop(){
        return self::shell_run('tbc', 'realm','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_stop(){
        return self::shell_run('tbc', 'world','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_test_stop(){
        return self::shell_run('tbc', 'world_test','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_realm_status(){
        return self::shell_run('tbc', 'realm','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_status(){
        return self::shell_run('tbc', 'world','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_test_status(){
        return self::shell_run('tbc', 'world_test','status');}
}