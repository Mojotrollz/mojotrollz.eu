<?php
require_once 'lib/autoload.inc';                                                //SYSTEM Classes
require_once 'mojotrollz/autoload.inc';                                         //Project Classes
require_once '/home/web/web/config/get_config.php';

\SYSTEM\system::start(\WEBCRAFT\get_config(dirname(__FILE__)));

echo \SYSTEM\API\api::run('\SYSTEM\API\verify','api_mojotrollz',array_merge($_POST,$_GET));
new \SYSTEM\LOG\COUNTER("API was called sucessfully.");