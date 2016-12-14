<?php
namespace SAI;
class saimod_mojotrollz_server_tbc extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc(){
        $vars = array();
        $vars['tbc_realm_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_realm_status();
        $vars['tbc_world_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_status();
        $vars['tbc_world_test_status'] = self::sai_mod__SAI_saimod_mojotrollz_server_tbc_action_run_tbc_world_test_status();
        $vars['tbc_players_online'] = self::online_tbc();
        $vars['tbc_test_players_online'] = self::online_tbc_test();
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/main.tpl', $vars);}            
    public static function html_li_menu(){return '<li class=""><a data-toggle="tooltip" data-placement="left" title="Mojotrollz TBC Server" href="#!mojotrollz_server_tbc"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>&nbsp;&nbsp;TBC Server</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(new \PSAI('saimod_mojotrollz_server_tbc/js/saimod_mojotrollz_server_tbc.js'));}
    //public static function css(){}
    
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
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/DBErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/DBErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_eventai_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/EventAIErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_eventai_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/EventAIErrors.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_realm_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log/Realmd.log'));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_log_tbc_realm_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_get_contents('/home/mojotrollz/mojo/tbc/server/log_test/Realmd.log'));}
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
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_eventai_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/EventAIErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_eventai_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/EventAIErrors.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/EventAIErrors.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_realm_live(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log/Realmd.log',''));}
    public static function sai_mod__SAI_saimod_mojotrollz_server_tbc_action_logdel_tbc_realm_test(){
        if(!\file_exists('/home/mojotrollz/mojo/tbc/server/log_test/Realmd.log')){
            return 'File not Found';}
        return \htmlentities(\file_put_contents('/home/mojotrollz/mojo/tbc/server/log_test/Realmd.log',''));}
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