REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5600, 42, 0, 0, '_SAI_saimod_mojotrollz_server_tbc', 'action', NULL);

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5620, 42, 3, 5600, NULL, 'filter', 'INT');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5630, 42, 3, 5600, 'account', 'search', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5631, 42, 3, 5600, 'account', 'page', 'UINT0');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5640, 42, 2, 5600, 'account_show', 'id', 'UINT0');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5650, 42, 2, 5600, 'bot_toggle', 'account', 'UINT0');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5651, 42, 2, 5600, 'bot_toggle', 'guid', 'UINT0');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5652, 42, 2, 5600, 'bot_toggle', 'server', 'UINT0');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5653, 42, 2, 5600, 'bot_toggle', 'status', 'UINT0');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5660, 42, 3, 5600, 'character', 'search', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5661, 42, 3, 5600, 'character', 'page', 'UINT0');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5670, 42, 2, 5600, 'character_show', 'guid', 'UINT0');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5671, 42, 2, 5600, 'change_account', 'guid', 'UINT0');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5672, 42, 2, 5600, 'change_account', 'accountname', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5673, 42, 2, 5600, 'delete_account', 'id', 'UINT0');