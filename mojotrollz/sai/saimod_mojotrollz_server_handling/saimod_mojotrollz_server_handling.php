<?php
namespace SAI;
class saimod_mojotrollz_server_handling extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SAI_saimod_mojotrollz_server_handling(){
        $vars = \SYSTEM\PAGE\text::tag('basic');
        //$vars['status_realm'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_realmstatus();
        //$vars['status_world'] = self::sai_mod__SAI_saimod_mojotrollz_server_handling_action_worldstatus();
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
    
    /* programms: run, db, update, compile
     * run classic/tbc world/realm/world_test start/stop/status
     * db classic/tbc realm live
     * db classic/tbc chars/world live/test
     * compile classic/tbc live/test
     * update
     * dif
     */
}