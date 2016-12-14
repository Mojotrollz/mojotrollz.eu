<?php
namespace LOG;
class SERVER_ONLINE_CLASSIC_WORLD_TEST extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW Classic Test World Status: '.$count, \intval($count));
    }
}
    