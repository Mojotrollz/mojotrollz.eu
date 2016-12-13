<?php
namespace SAI;
class saimod_mojotrollz_npc_vendor_template extends \SYSTEM\SAI\SaiModule {
    public static function sai_mod__SAI_saimod_mojotrollz_npc_vendor_template_action_comment($entry,$comment){
        \SQL\NPC_VENDOR_TEMPLATE_COMMENT::QI(array($comment,$entry),new \SQL\mangos_one_world_test());
        return \JsonResult::ok();}
    public static function sai_mod__SAI_saimod_mojotrollz_npc_vendor_template_action_add($entry,$item,$maxcount,$incrtime,$extendedcost,$condition_id){
        \SQL\NPC_VENDOR_TEMPLATE_ADD::QI(array($entry,$item,$maxcount,$incrtime,$extendedcost,$condition_id),new \SQL\mangos_one_world_test());
        return \SYSTEM\LOG\JsonResult::ok();}
    public static function sai_mod__SAI_saimod_mojotrollz_npc_vendor_template_action_del($entry,$item){
        \SQL\NPC_VENDOR_TEMPLATE_DEL::QI(array($entry,$item),new \SQL\mangos_one_world_test());
        return \SYSTEM\LOG\JsonResult::ok();}
    
    public static function sai_mod__SAI_saimod_mojotrollz_npc_vendor_template_action_vendor($entry,$search='{}',$page=0){
        $vars = array();
        $vars['search_item'] = $vars['search_maxcount'] = $vars['search_incrtime'] = $vars['search_extendedcost'] = $vars['search_condition_id'] = '';
        $query =    'SELECT * '.
                    'FROM npc_vendor_template WHERE entry = ?';
        $query_vars = array($entry);
        $search_ = \json_decode($search,true);
        if(\is_array($search_)){
            if(\array_key_exists('item', $search_) && $search_['item'] != ''){
                $query .= ' AND item = ?';
                $query_vars[] = $search_['item'];
                $vars['search_item'] = $search_['item'];
            }
            if(\array_key_exists('maxcount', $search_) && $search_['maxcount'] != ''){
                $query .= ' AND maxcount = ?';
                $query_vars[] = $search_['maxcount'];
                $vars['search_maxcount'] = $search_['maxcount'];
            }
            if(\array_key_exists('incrtime', $search_) && $search_['incrtime'] != ''){
                $query .= ' AND incrtime = ?';
                $query_vars[] = $search_['incrtime'];
                $vars['search_incrtime'] = $search_['incrtime'];
            }
            if(\array_key_exists('extendedcost', $search_) && $search_['extendedcost'] != ''){
                $query .= ' AND extendedcost = ?';
                $query_vars[] = $search_['extendedcost'];
                $vars['search_extendedcost'] = $search_['extendedcost'];
            }
            if(\array_key_exists('condition_id', $search_) && $search_['condition_id'] != ''){
                $query .= ' AND condition_id = ?';
                $query_vars[] = $search_['condition_id'];
                $vars['search_condition_id'] = $search_['condition_id'];
            }
        }
        $query_count = 'SELECT COUNT(*) as count FROM ('.$query.') t1';
        $con = new \SYSTEM\DB\Connection(new \SQL\mangos_one_world_test());
        $count = $con->prepare('count_npc_vendor_template_vendor',$query_count,$query_vars)->next()['count'];
        $res = $con->prepare('select_npc_vendor_template_vendor', $query, $query_vars);
        
        $vars['entries'] = '';
        $count_filtered = 0;
        $res->seek(100*$page);
        while(($row = $res->next()) && ($count_filtered < 100)){           
            $vars['entries'] .=  \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_npc_vendor_template/tpl/npc_vendor_template_vendor_entry.tpl'))->SERVERPATH(), $row);
            $count_filtered++;
        }
        $vars['pagination'] = '';
        $vars['page'] = $page;
        $vars['page_last'] = ceil($count/100)-1;
        for($i=0;$i < ceil($count/100);$i++){
            $data = array('entry' => $entry, 'page' => $i,'search' => $search, 'active' => ($i == $page) ? 'active' : '');
            $vars['pagination'] .= \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_npc_vendor_template/tpl/npc_vendor_template_vendor_pagination.tpl'))->SERVERPATH(), $data);
        }
        $vars['search'] = htmlentities($search);
        $vars['count'] = $count_filtered.'/'.$count;
        $vars['entry'] = $entry;
        $vars['wow_tooltip_templates'] = '';
        $vars['wow_tooltip_templates'] .= \SYSTEM\PAGE\replace::replaceFile((new \PLIB('wow_tooltips/lib/tpl/wow-item-template.tpl'))->SERVERPATH());
        $vars['wow_tooltip_templates'] .= \SYSTEM\PAGE\replace::replaceFile((new \PLIB('wow_tooltips/lib/tpl/wow-itemextendedcost-template.tpl'))->SERVERPATH());
        $vars = array_merge($vars,  \SYSTEM\PAGE\text::tag('basic'));
        return \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_npc_vendor_template/tpl/npc_vendor_template_vendor.tpl'))->SERVERPATH(), $vars);
    }
    public static function sai_mod__SAI_saimod_mojotrollz_npc_vendor_template($search='{}',$page=0){
        $vars = array();
        $vars['search_entry'] = $vars['search_items'] = $vars['search_comments'] = '';
        $query =    'SELECT npc_vendor_template.entry, COUNT(*) as items, comments '.
                    'FROM npc_vendor_template ';
        $query_group = ' GROUP BY npc_vendor_template.entry';
        $query_search = '';
        $query_search_having = '';
        $query_vars = array();
        $search_ = \json_decode($search,true);
        if(\is_array($search_)){
            if(\array_key_exists('entry', $search_) && $search_['entry'] != ''){
                $query_search .= ' AND npc_vendor_template.entry = ?';
                $query_vars[] = $search_['entry'];
                $vars['search_entry'] = $search_['entry'];
            }
            if(\array_key_exists('items', $search_) && $search_['items'] != ''){
                $query_search_having .= ' AND items = ?';
                $query_vars[] = $search_['items'];
                $vars['search_items'] = $search_['items'];
            }
            if(\array_key_exists('comments', $search_) && $search_['comments'] != ''){
                $query_search .= ' AND comments LIKE ?';
                $query_vars[] = '%'.$search_['comments'].'%';
                $vars['search_comments'] = $search_['comments'];
            }
        }
        if($query_search){
            $query = $query.' WHERE '.\substr($query_search, 4);}
        $query .= $query_group;
        if($query_search_having){
            $query = $query.' HAVING '.\substr($query_search_having, 4);}
        $query_count = 'SELECT COUNT(*) as count FROM ('.$query.') t1';
        $con = new \SYSTEM\DB\Connection(new \SQL\mangos_one_world_test());
        if(count($query_vars) > 0){
            $count = $con->prepare('count_npc_vendor_template',$query_count,$query_vars)->next()['count'];
            $res = $con->prepare('select_npc_vendor_template', $query, $query_vars);
        } else {
            $count = $con->query($query_count)->next()['count'];
            $res = $con->query($query);}
        
        $vars['entries'] = '';
        $count_filtered = 0;
        $res->seek(100*$page);
        while(($row = $res->next()) && ($count_filtered < 100)){           
            $vars['entries'] .=  \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_npc_vendor_template/tpl/npc_vendor_template_entry.tpl'))->SERVERPATH(), $row);
            $count_filtered++;
        }
        $vars['pagination'] = '';
        $vars['page'] = $page;
        $vars['page_last'] = ceil($count/100)-1;
        for($i=0;$i < ceil($count/100);$i++){
            $data = array('page' => $i,'search' => $search, 'active' => ($i == $page) ? 'active' : '');
            $vars['pagination'] .= \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_npc_vendor_template/tpl/npc_vendor_template_pagination.tpl'))->SERVERPATH(), $data);
        }
        $vars['search'] = htmlentities($search);
        $vars['count'] = $count_filtered.'/'.$count;
        $vars = array_merge($vars,  \SYSTEM\PAGE\text::tag('basic'));
        return \SYSTEM\PAGE\replace::replaceFile((new \PSAI('saimod_mojotrollz_npc_vendor_template/tpl/npc_vendor_template.tpl'))->SERVERPATH(), $vars);
    }
    public static function html_li_menu(){return '<li role="separator" class="nav-divider"></li><li><a data-toggle="tooltip" data-placement="left" title="test server: npc_vendor_template" href="#!mojotrollz_npc_vendor_template"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;Vendor Template</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    public static function js(){return array(   \LIB\lib_handlebars::js(),
                                                \LIB\lib_wow_tooltips::js(),
                                                new \PSAI('saimod_mojotrollz_npc_vendor_template/js/saimod_mojotrollz_npc_vendor_template.js'));}        
    //public static function css(){return array();}
    public static function scss(){
        return array(   new \PSAI('saimod_mojotrollz_npc_vendor_template/css/default_item.scss'));}
}