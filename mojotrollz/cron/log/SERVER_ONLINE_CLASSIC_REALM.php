<?php
namespace LOG;
class SERVER_ONLINE_CLASSIC_REALM extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW Classic Realm Status: '.$count, $count);
    }
}
    