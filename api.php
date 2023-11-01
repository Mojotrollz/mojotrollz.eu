<?php
require_once 'inex.inc';

\SYSTEM\system::start(\WEBCRAFT\config(dirname(__FILE__)));

echo \SYSTEM\API\api::run('\SYSTEM\API\verify','api_mojotrollz',array_merge($_POST,$_GET));
new \SYSTEM\LOG\COUNTER("API was called sucessfully.");