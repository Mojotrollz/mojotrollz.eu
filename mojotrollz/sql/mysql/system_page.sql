INSERT INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (10, 1, 'start', 'start', -1, 0, 0, '#content', './?page=start', 'init_start', 'default_start');
INSERT INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (11, 1, 'serverlist', 'start', 10, 0, 0, '#content_servers', './?page=serverlist', 'init_serverlist', 'default_serverlist');

INSERT INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (15, 1, 'impressum', 'impressum', -1, 0, 0, '#content', './?page=impressum', 'init_impressum', 'default_impressum');

INSERT INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (20, 1, 'login', 'login', -1, 0, 0, '#content', './?page=login', 'init_login', 'default_login');

-- Saimod
INSERT INTO `system_api` (`ID`, `group`, `type`, `parentID`, `parentValue`, `name`, `verify`) VALUES (500, 42, 0, 0, '_SYSTEM_SAI_saimod_sys_config', 'action', NULL);
