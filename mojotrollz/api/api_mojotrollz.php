<?php
class api_mojotrollz extends \SYSTEM\API\api_system {
    public static function call_mojo_action_newserver($address){
        return  \SQL\MOJOTROLLZ_SERVER_INSERT::QI(array($address,$address)) ?
                \SYSTEM\LOG\JsonResult::ok() :
                \SYSTEM\LOG\JsonResult::fail();
    }
}