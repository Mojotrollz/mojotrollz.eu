<?php
namespace LOG;
class SERVER_ONLINE_TBC_REALM extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW TBC Realm Status: '.$count, $count);
    }
}
    