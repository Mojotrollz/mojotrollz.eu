<?php
require_once 'index.inc';

\SYSTEM\system::start(\WEBCRAFT\config(dirname(__FILE__)));

echo \SYSTEM\API\api::run('\SYSTEM\API\verify', 'page_mojotrollz', array_merge($_POST,$_GET), 1, false, true);
new \SYSTEM\LOG\COUNTER("Page was called sucessfully.");