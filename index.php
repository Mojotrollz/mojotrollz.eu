<?php
require_once 'lib/system/autoload.inc';                                         //SYSTEM Classes
require_once 'lib/font_awesome/autoload.inc';                                   
require_once 'mojotrollz/autoload.inc';                                      //Project Classes
require_once '/home/web/web/config/get_config.php';

\SYSTEM\system::start(\WEBCRAFT\get_config(dirname(__FILE__)));
\SYSTEM\system::include_ExceptionShortcut();
\SYSTEM\system::include_ResultShortcut();
\SYSTEM\system::register_errorhandler_dbwriter();
\SYSTEM\system::register_errorhandler_jsonoutput();

echo \SYSTEM\API\api::run('\SYSTEM\API\verify', 'page_mojotrollz', array_merge($_POST,$_GET), 1, true, true);
new \SYSTEM\LOG\COUNTER("Page was called sucessfully.");