<?php
namespace LOG;
class PLAYER_COUNT_TS extends \SYSTEM\LOG\INFO {
    public function __construct($count){
        parent::__construct('TS Players Online: '.$count, $count);
    }
}
    