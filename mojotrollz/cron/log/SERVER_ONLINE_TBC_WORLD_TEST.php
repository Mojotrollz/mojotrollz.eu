<?php
namespace LOG;
class SERVER_ONLINE_TBC_WORLD_TEST extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW TBC Test World Status: '.$count, \intval($count));
    }
}
    