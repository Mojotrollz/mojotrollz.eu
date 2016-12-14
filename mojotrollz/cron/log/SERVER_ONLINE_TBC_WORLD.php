<?php
namespace LOG;
class SERVER_ONLINE_TBC_WORLD extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW TBC World Status: '.$count, $count);
    }
}
    