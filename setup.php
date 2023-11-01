<?php
require_once 'index.inc';

\SYSTEM\system::start(\WEBCRAFT\get_config(dirname(__FILE__)));

echo \SYSTEM\SQL\setup::install();