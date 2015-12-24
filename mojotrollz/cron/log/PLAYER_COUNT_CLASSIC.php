<?php
namespace LOG;
class PLAYER_COUNT_CLASSIC extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW Classic Players Online: '.$count, $count);
    }
}
    