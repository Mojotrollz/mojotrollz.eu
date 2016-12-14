<?php
namespace LOG;
class PLAYER_COUNT_TBC_TEST extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW TBC Test Players Online: '.$count, $count);
    }
}
    