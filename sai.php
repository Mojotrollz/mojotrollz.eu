<?php
require_once 'index.inc';

\SYSTEM\system::start(\WEBCRAFT\config(dirname(__FILE__)));

echo (new SYSTEM\SAI\sai_gui())->html();