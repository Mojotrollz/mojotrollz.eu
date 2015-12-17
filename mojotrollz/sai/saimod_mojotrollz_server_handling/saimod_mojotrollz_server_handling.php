<?php
namespace SAI;
class saimod_mojotrollz_server_handling extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling(){
        $vars = \SYSTEM\PAGE\text::tag('basic');
        $vars['tbc_realm_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_realm_status();
        $vars['tbc_world_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_status();
        $vars['tbc_world_test_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_test_status();
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/main.tpl', $vars);}            
    public static function html_li_menu(){return '<li class=""><a data-toggle="tooltip" data-placement="left" title="Mojotrollz" href="#!mojotrollz_server"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Mojotrollz Server</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\Security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(
            \SYSTEM\WEBPATH(new \PSAI(),'saimod_mojotrollz_server_handling/js/saimod_mojotrollz_server_handling.js'));}
    //public static function css(){}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_update(){        
        \LIB\lib_git::php();
        $log = '';
        try {
            $repo = \GIT\Git::open('/home/mojotrolls/mojo');
            $log .= $repo->run('fetch --all');
            $log .= $repo->pull('origin','master');
            $log .= $repo->run('submodule update --init --recursive');
            $log .= chmod('/home/mojotrolls/mojo/'.'compile',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'run',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'db',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'classic/compile',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'classic/run',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'classic/world',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'classic/realm',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'classic/db',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'tbc/compile',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'tbc/run',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'tbc/world',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'tbc/world_test',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'tbc/realm',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
            $log .= chmod('/home/mojotrolls/mojo/'.'tbc/db',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
        } catch (\Exception $e){
            $log .= 'Error: '.$e->getMessage();
        }
        return $log;
    }
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_changes(){
        \LIB\lib_git::php();
        $result = array('log' => '', 'revert' => array(), 'remove' => array());
        try {
            $repo = \GIT\Git::open('/home/mojotrolls/mojo');
            
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
        if(!\unlink('/home/mojotrolls/mojo/'.$submodule.$path)){
            throw new \SYSTEM\LOG\ERROR('Could not remove File: /home/mojotrolls/mojo/'.$submodule.$path);}
        return \SYSTEM\LOG\JsonResult::ok();    
    }
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_revert($path,$submodule = ''){
        \LIB\lib_git::php();
        $result = array('log' => '', 'revert' => array(), 'remove' => array(), 'submodules' => array(), 'revert_submodules' => array());
        try {
            $repo = \GIT\Git::open('/home/mojotrolls/mojo/'.$submodule);
            //Find Changes
            $log = $repo->run('checkout '.$path);
            $result['log'] .= $log;
        } catch (\Exception $e){
            $result['log'] .= 'Error: '.$e->getMessage();
        }
        return \SYSTEM\LOG\JsonResult::toString($result);
    }
    
    /* programms: run, db, update, compile
     * run classic/tbc world/realm/world_test start/stop/status
     * db classic/tbc realm live
     * db classic/tbc chars/world live/test
     * compile classic/tbc live/test
     */
    
    
    private static function shell_run($ver,$prog,$cmd){
        return str_replace("\n","\r\n",shell_exec('/home/mojotrolls/mojo/run '.$ver.' '.$prog.' '.$cmd.' 2>&1'));}
    private static function shell_db($ver,$db,$cmd){
        return str_replace("\n","\r\n",shell_exec('/home/mojotrolls/mojo/db '.$ver.' '.$db.' '.$cmd.' 2>&1'));}
    private static function shell_compile($ver,$cmd){
        return str_replace("\n","\r\n",shell_exec('/home/mojotrolls/mojo/compile '.$ver.' '.$cmd.' 2>&1'));}
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_compile_tbc_live(){
        return htmlentities(self::shell_compile('tbc', 'live'));}    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_compile_tbc_test(){
        return htmlentities(self::shell_compile('tbc', 'test'));}
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_realm_start(){
        return self::shell_run('tbc', 'realm','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_start(){
        return self::shell_run('tbc', 'world','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_test_start(){
        return self::shell_run('tbc', 'world_test','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_realm_stop(){
        return self::shell_run('tbc', 'realm','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_stop(){
        return self::shell_run('tbc', 'world','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_test_stop(){
        return self::shell_run('tbc', 'world_test','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_realm_status(){
        return self::shell_run('tbc', 'realm','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_status(){
        return self::shell_run('tbc', 'world','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling_action_run_tbc_world_test_status(){
        return self::shell_run('tbc', 'world_test','status');}
}