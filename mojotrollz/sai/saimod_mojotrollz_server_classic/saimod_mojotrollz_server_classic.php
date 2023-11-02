<?php
namespace SAI;
class saimod_mojotrollz_server_classic extends \SYSTEM\SAI\sai_module {    
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic(){
        $vars = array();
        $vars['classic_realm_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_realm_status();
        $vars['classic_world_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_world_status();
        $vars['classic_world_test_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_world_test_status();
        $vars['classic_players_online'] = self::online_classic();
        $vars['classic_test_players_online'] = self::online_classic_test();
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/main.tpl', $vars);}            
    public static function menu(){
        return new \SYSTEM\SAI\sai_module_menu( 100,
                                    \SYSTEM\SAI\sai_module_menu::POISITION_LEFT,
                                    \SYSTEM\SAI\sai_module_menu::DIVIDER_NONE,
                                    \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_server_classic/tpl/menu.tpl'))->SERVERPATH()));}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(new \PSAI('saimod_mojotrollz_server_classic/js/saimod_mojotrollz_server_classic.js'));}
    //public static function css(){}
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_stats_classic_player($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_CLASSIC_PLAYER::QA(array($filter)));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_stats_classic_server($filter = 600){
        return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_CLASSIC_SERVER::QA(array($filter)));}
               
    public static function online_classic(){
        return \SQL\ONLINE_PLAYERS::Q1(\SQL\mangos_zero_chars::connection())['count'];}
    public static function online_classic_test(){
        return 0;}//\SQL\ONLINE_PLAYERS::Q1(new \SQL\mangos_zero_chars_test())['count'];}
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_chars_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/Char.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log/Char.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_chars_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/Char.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log_test/Char.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_db_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log/DBErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_db_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log_test/DBErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_eventai_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log/EventAIErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_eventai_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log_test/EventAIErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_realm_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log/Realmd.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_realm_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log_test/Realmd.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_sd2_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/SD2Errors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log/SD2Errors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_sd2_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/SD2Errors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log_test/SD2Errors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_server_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/Server.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log/Server.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_log_classic_server_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/Server.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/classic/server/log_test/Server.log'));}
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_chars_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/Char.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log/Char.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_chars_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/Char.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log_test/Char.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_db_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log/DBErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_db_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log_test/DBErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_eventai_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log/EventAIErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_eventai_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log_test/EventAIErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_realm_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log/Realmd.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_realm_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log_test/Realmd.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_sd2_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/SD2Errors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log/SD2Errors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_sd2_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/SD2Errors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log_test/SD2Errors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_server_live(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log/Server.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log/Server.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_logdel_classic_server_test(){
        if(!\file_exists('/home/mojotrollz/mojo/classic/server/log_test/Server.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/classic/server/log_test/Server.log',''));}
    
    private static function shell_run($ver,$prog,$cmd){
        return \str_replace("\n","\r\n",shell_exec('/home/mojotrollz/mojo/run '.$ver.' '.$prog.' '.$cmd.' 2>&1'));}
    private static function shell_db($ver,$db,$cmd){
        return \str_replace("\n","\r\n",shell_exec('/home/mojotrollz/mojo/db '.$ver.' '.$db.' '.$cmd.' 2>&1'));}
    private static function shell_compile($ver,$cmd){
        return \str_replace("\n","\r\n",shell_exec('/home/mojotrollz/mojo/compile '.$ver.' '.$cmd.' 2>&1'));}
    
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_compile_classic_live(){
        $log  = \htmlentities(self::shell_compile('classic', 'live'));
        $log .= chmod('/home/mojotrollz/mojo/'.'classic/server/bin/bin/run-mangosd',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
        return $log;
    }
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_compile_classic_test(){
        $log  = \htmlentities(self::shell_compile('classic', 'test'));
        $log .= chmod('/home/mojotrollz/mojo/'.'classic/server/bin_test/bin/run-mangosd',0755) ? "rights apply: yes\r\n" : "rights apply: no\r\n";
        return $log;
    }
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_db_classic_realm_live(){
        return \htmlentities(self::shell_db('classic', 'realm', 'live'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_db_classic_chars_live(){
        return \htmlentities(self::shell_db('classic', 'chars', 'live'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_db_classic_chars_test(){
        return \htmlentities(self::shell_db('classic', 'chars', 'test'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_db_classic_world_live(){
        return \htmlentities(self::shell_db('classic', 'world', 'live'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_db_classic_world_test(){
        return \htmlentities(self::shell_db('classic', 'world', 'test'));}
        
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_realm_start(){
        return self::shell_run('classic', 'realm','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_world_start(){
        return self::shell_run('classic', 'world','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_world_test_start(){
        return self::shell_run('classic', 'world_test','start');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_realm_stop(){
        return self::shell_run('classic', 'realm','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_world_stop(){
        return self::shell_run('classic', 'world','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_world_test_stop(){
        return self::shell_run('classic', 'world_test','stop');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_realm_status(){
        return self::shell_run('classic', 'realm','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_world_status(){
        return self::shell_run('classic', 'world','status');}
    public static function sai_mod__SAI_saimod_mojotrollz_server_classic_action_run_classic_world_test_status(){
        return self::shell_run('classic', 'world_test','status');}
}