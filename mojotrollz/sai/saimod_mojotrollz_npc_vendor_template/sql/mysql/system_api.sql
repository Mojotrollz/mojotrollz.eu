INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5300, 42, 0, 0, '_SAI_saimod_mojotrollz_npc_vendor_template', 'action', NULL);
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5301, 42, 3, 0, '_SAI_saimod_mojotrollz_npc_vendor_template', 'search', 'JSON');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5302, 42, 3, 0, '_SAI_saimod_mojotrollz_npc_vendor_template', 'page', 'INT');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5310, 42, 2, 5300, 'comment', 'entry', 'INT');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5311, 42, 2, 5300, 'comment', 'comment', 'STRING');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5320, 42, 2, 5300, 'vendor', 'entry', 'INT');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5321, 42, 3, 5300, 'vendor', 'search', 'JSON');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5322, 42, 3, 5300, 'vendor', 'page', 'INT');