REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5400, 42, 0, 0, '_SAI_saimod_mojotrollz_downloads', 'action', NULL);

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5401, 42, 2, 5400, 'save', 'id', 'INT');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5402, 42, 2, 5400, 'save', 'link', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5403, 42, 2, 5400, 'save', 'img', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5404, 42, 2, 5400, 'save', 'text', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5405, 42, 2, 5400, 'save', 'subtext', 'STRING');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5408, 42, 2, 5400, 'del', 'id', 'INT');