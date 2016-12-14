<?php
namespace SAI;
class saimod_mojotrollz_server_handling extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling(){
        $vars = array();
        $vars['classic_realm_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_classic_realm_status();
        $vars['classic_world_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_classic_world_status();
        $vars['classic_world_test_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_classic_world_test_status();
        $vars['classic_players_online'] = self::online_classic();
        $vars['classic_test_players_online'] = self::online_classic_test();
        $vars['tbc_realm_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_realm_status();
        $vars['tbc_world_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_status();
        $vars['tbc_world_test_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_test_status();
        $vars['tbc_players_online'] = self::online_tbc();
        $vars['tbc_test_players_online'] = self::online_tbc_test();
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/main.tpl', $vars);}            
    public static function html_li_menu(){return '<li class=""><a data-toggle="tooltip" data-placement="left" title="Mojotrollz Server" href="#!mojotrollz_server"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;&nbsp;WoW Servers</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(new \PSAI('saimod_mojotrollz_server_handling/js/saimod_mojotrollz_server_handling.js'));}
    //public static function css(){}
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_stats_tbc_player($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_TBC_PLAYER::QA(array($filter)));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_stats_tbc_server($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_TBC_SERVER::QA(array($filter)));}
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_stats_classic_player($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_CLASSIC_PLAYER::QA(array($filter)));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_stats_classic_server($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_CLASSIC_SERVER::QA(array($filter)));}
            
    public static function online_classic(){
        return \SQL\ONLINE_PLAYERS::Q1(new \SQL\mangos_zero_chars())['count'];}
    public static function online_tbc(){
        return \SQL\ONLINE_PLAYERS::Q1(new \SQL\mangos_one_chars())['count'];}
    public static function online_classic_test(){
        return 0;}//\SQL\ONLINE_PLAYERS::Q1(new \SQL\mangos_zero_chars_test())['count'];}
    public static function online_tbc_test(){
        return \SQL\ONLINE_PLAYERS::Q1(new \SQL\mangos_one_chars_test())['count'];}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_update(){        
        \LIB\lib_git::php();
        $log = '';
        try {
            $repo = \GIT\Git::open('/home/mojotrollz/mojo');
            $log .= $repo->run('fetch --all');
            $log .= $repo->pull('origin','master');
            $log .= $repo->run('submodule update --init --recursive');
            $log .= chmod('/home/mojotrollz/mojo/'.'compile',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'run',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'db',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'classic/compile',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'classic/run',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'classic/world',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'classic/realm',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'classic/db',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            //$log .= chmod('/home/mojotrollz/mojo/'.'classic/server/bin/bin/run-mangosd',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            //$log .= chmod('/home/mojotrollz/mojo/'.'classic/server/bin_test/bin/run-mangosd',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'tbc/compile',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'tbc/run',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'tbc/world',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'tbc/world_test',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'tbc/realm',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'tbc/db',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'tbc/server/bin/bin/run-mangosd',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrollz/mojo/'.'tbc/server/bin_test/bin/run-mangosd',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
        } catch (\Exception $e){
            $log .= 'Error: '.$e->getMessage();
        }
        return $log;
    }
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_changes(){
        \LIB\lib_git::php();
        $result = array('log' => '', 'revert' => array(), 'remove' => array());
        try {
            $repo = \GIT\Git::open('/home/mojotrollz/mojo');
            
            //Find Changes
            $log = $repo->run('diff --name-only');
            $sub_reverts = explode("\n", $log);
            foreach($sub_reverts as $sub){
                $result['revert'][] = array($sub,'');
            }
            \array_pop($result['revert']);
            $result['log'] .= $log;
            
            $log = $repo->run('submodule foreach --recursive git diff --name-only');
            $sub_reverts = explode("\n", $log);
            $last_path = '';
            foreach($sub_reverts as $sub){
                if(substr($sub,0,8) == 'Entering'){
                    $last_path = explode('\'',substr($sub,10))[0].'/';
                } else {
                    $result['revert'][] = array($sub,$last_path);
                }
            }
            \array_pop($result['revert']);
            $result['log'] .= $log;
           
            //Find Untracked Files
            $log = $repo->run('ls-files --others --exclude-standard');
            $sub_removes = explode("\n", $log);
            foreach($sub_removes as $sub){
                $result['remove'][] = array($sub,'');
            }
            \array_pop($result['remove']);
            $result['log'] .= $log;
            
            $log = $repo->run('submodule foreach --recursive git ls-files --others --exclude-standard');
            $sub_removes = explode("\n", $log);
            $last_path = '';
            foreach($sub_removes as $sub){
                if(substr($sub,0,8) == 'Entering'){
                    $last_path = explode('\'',substr($sub,10))[0].'/';
                } else {
                    $result['remove'][] = array($sub,$last_path);
                }
            }
            \array_pop($result['remove']);
            $result['log'] .= $log;
        } catch (\Exception $e){
            $result['log'] .= 'Error: '.$e->getMessage();
        }
        return \SYSTEM\LOG\JsonResult::toString($result);
    }
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_remove($path,$submodule = ''){
        if(!\unlink('/home/mojotrollz/mojo/'.$submodule.$path)){
            throw new \SYSTEM\LOG\ERROR('Could not remove File: /home/mojotrollz/mojo/'.$submodule.$path);}
        return \SYSTEM\LOG\JsonResult::ok();    
    }
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_revert($path,$submodule = ''){
        \LIB\lib_git::php();
        $result = array('log' => '', 'revert' => array(), 'remove' => array(), 'submodules' => array(), 'revert_submodules' => array());
        try {
            $repo = \GIT\Git::open('/home/mojotrollz/mojo/'.$submodule);
            //Find Changes
            $log = $repo->run('checkout '.$path);
            $result['log'] .= $log;
        } catch (\Exception $e){
            $result['log'] .= 'Error: '.$e->getMessage();
        }
        return \SYSTEM\LOG\JsonResult::toString($result);
    }

    private static function shell_run($ver,$prog,$cmd){
        return \str_replace("\n","\r\n",shell_exec('/home/mojotrollz/mojo/run '.$ver.' '.$prog.' '.$cmd.' 2>&1'));}
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_classic_realm_status(){
        return self::shell_run('classic', 'realm','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_classic_world_status(){
        return self::shell_run('classic', 'world','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_classic_world_test_status(){
        return self::shell_run('classic', 'world_test','status');}

    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_realm_status(){
        return self::shell_run('tbc', 'realm','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_status(){
        return self::shell_run('tbc', 'world','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_test_status(){
        return self::shell_run('tbc', 'world_test','status');}
}