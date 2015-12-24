<?php
namespace LOG;
class PLAYER_COUNT_TBC extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW TBC Players Online: '.$count, $count);
    }
}
    