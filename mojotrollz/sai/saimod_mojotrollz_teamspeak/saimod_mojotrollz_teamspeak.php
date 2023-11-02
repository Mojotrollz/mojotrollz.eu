<?php
namespace SAI;
class saimod_mojotrollz_teamspeak extends \SYSTEM\SAI\sai_module {    
    public static function sai_mod__SAI_saimod_mojotrollz_teamspeak($db = null){
        $vars = array();
        $vars['db'] = $db;
        $vars['db_nav'] = '';
        if(file_exists((new \PLOG())->SERVERPATH())){
            $scanned_directory = array_diff(scandir((new \PLOG())->SERVERPATH()), array('..', '.'));
            foreach($scanned_directory as $file){
                if($file === '.gitignore'){
                    continue;
                }
                $vars['db_nav'] .= \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_teamspeak/tpl/db_menu.tpl'))->SERVERPATH(),
                                    array('db' => str_replace('.','_',$file), 'active' => str_replace('.','_',$file) == $db ? 'active' : '' ));
            }
        }
        return \SYSTEM\PAGE\replace::replaceFile(dirname(__FILE__).'/tpl/main.tpl', $vars);}            
    public static function menu(){
        return new \SYSTEM\SAI\sai_module_menu( 100,
                                    \SYSTEM\SAI\sai_module_menu::POISITION_LEFT,
                                    \SYSTEM\SAI\sai_module_menu::DIVIDER_NONE,
                                    \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_teamspeak/tpl/menu.tpl'))->SERVERPATH()));}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(new \PSAI('saimod_mojotrollz_teamspeak/js/saimod_mojotrollz_teamspeak.js'));}
    //public static function css(){}

    public static function sai_mod__SAI_saimod_mojotrollz_teamspeak_action_stats($filter = 600,$db = null){
        if(!$db){
            return \SYSTEM\LOG\JsonResult::toString(\SQL\STATS_TS::QA(array($filter)));}
        
        $result = array();
        $con = new \SYSTEM\DB\Connection(new \SYSTEM\DB\DBInfoSQLite((new \PLOG(str_replace('_','.',$db)))->SERVERPATH()));
        $res = $con->prepare('stats_ts',
                            'SELECT datetime(strftime("%s",'.\SYSTEM\SQL\system_log::FIELD_TIME.') - strftime("%s",'.\SYSTEM\SQL\system_log::FIELD_TIME.')%:filter,"unixepoch", "localtime")  as day,'
                            .'avg('.\SYSTEM\SQL\system_log::FIELD_CODE.') online'
                            .' FROM '.\SYSTEM\SQL\system_log::NAME_MYS
                            .' WHERE '.\SYSTEM\SQL\system_log::NAME_MYS.'.'.\SYSTEM\SQL\system_log::FIELD_CLASS.' LIKE "%PLAYER_COUNT_TS"'
                            .' GROUP BY day'
                            .' ORDER BY day DESC'
                            .' LIMIT 30;',
                            array(':filter' => $filter));
        while($row = $res->next()){
            $result[] = $row;}
        return \SYSTEM\LOG\JsonResult::toString($result);
    }
}