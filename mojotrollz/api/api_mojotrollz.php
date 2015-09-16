<?php
class api_mojotrollz extends \SYSTEM\API\api_system {
    public static function call_mojo_action_newserver($address){
        return  \SQL\MOJOTROLLZ_SERVER_INSERT::QI(array($address,$address)) ?
                \SYSTEM\LOG\JsonResult::ok() :
                \SYSTEM\LOG\JsonResult::fail();
    }
    public static function call_mojo_action_vote($server){
        return  \SQL\MOJOTROLLZ_VOTE_INSERT::QI(array($server,$_SERVER['REMOTE_ADDR'])) ?
                \SYSTEM\LOG\JsonResult::ok() :
                \SYSTEM\LOG\JsonResult::fail();
    }
}