<?php
namespace LOG;
class SERVER_ONLINE_CLASSIC_WORLD extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW Classic World Status: '.$count, \intval($count));
    }
}
    