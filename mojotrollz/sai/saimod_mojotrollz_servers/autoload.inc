<?php
require_once dirname(__FILE__).'/sql/autoload.inc';
\SYSTEM\autoload::registerFolder(dirname(__FILE__),'SAI');
\SYSTEM\autoload::registerFolder(dirname(__FILE__).'/qq/','SQL');
\SYSTEM\SAI\sai::register('\SAI\saimod_mojotrollz_servers');
