INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5100, 42, 0, 0, '_SAI_saimod_mojotrollz_server_handling', 'action', NULL);
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5110, 42, 2, 5100, 'revert', 'path', 'STRING');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5111, 42, 3, 5100, 'revert', 'submodule', 'STRING');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5115, 42, 2, 5100, 'remove', 'path', 'STRING');
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (5116, 42, 3, 5100, 'remove', 'submodule', 'STRING');