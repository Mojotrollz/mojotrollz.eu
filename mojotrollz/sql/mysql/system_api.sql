REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (27, 0, 2, 11, 'create', 'wow_password', 'STRING');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (200, 0, 2, 11, 'newserver', 'address', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (205, 0, 2, 11, 'vote', 'server', 'INT');

-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (210, 0, 2, 11, 'register', 'username', 'STRING');
-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (211, 0, 2, 11, 'register', 'password_sha1', 'STRING');
-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (212, 0, 2, 11, 'register', 'email', 'STRING');
-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (213, 0, 2, 11, 'register', 'wow_password', 'STRING');
-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (214, 0, 3, 11, 'register', 'betakey', 'STRING');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (210, 0, 2, 11, 'create_wow', 'username', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (211, 0, 2, 11, 'create_wow', 'wow_password', 'STRING');

-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (210, 1, 3, 1, 'beta', 'key', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (215, 1, 2, 1, 'article', 'id', 'STRING');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (216, 1, 2, 1, 'account_tbc_account', 'account', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (217, 1, 2, 1, 'account_tbc_changepassword', 'account', 'STRING');

-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (220, 0, 2, 11, 'changepassword', 'old_password_sha1', 'STRING');
-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (221, 0, 2, 11, 'changepassword', 'new_password_sha1', 'STRING');

-- REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (222, 0, 2, 11, 'changeemail', 'new_email', 'EMAIL');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (220, 0, 2, 11, 'change_password_wow', 'account', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (221, 0, 2, 11, 'change_password_wow', 'old_wow_password_sha1', 'STRING');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (222, 0, 2, 11, 'change_password_wow', 'new_wow_password_sha1', 'STRING');

REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (500, 0, 2, 11, 'item', 'id', 'INT');
REPLACE INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (501, 0, 2, 11, 'itemextendedcost', 'id', 'INT');