<?php
namespace LOG;
class PLAYER_COUNT_CLASSIC_TEST extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('WoW Classic Test Players Online: '.$count, $count);
    }
}
    