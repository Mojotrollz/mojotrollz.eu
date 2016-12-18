REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (10, 1, 'start', 'start', -1, 0, 0, '#content', './?page=start', 'init_start', 'default_start');
REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (11, 1, 'serverlist', 'start', 10, 0, 0, '#content_servers', './?page=serverlist', 'init_serverlist', 'default_serverlist');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (12, 1, 'serverlist', 'serverlist', -1, 0, 0, '#content', './?page=serverlist', 'init_serverlist', 'default_serverlist');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (15, 1, 'impressum', 'impressum', -1, 0, 0, '#content', './?page=impressum', 'init_impressum', 'default_impressum');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (19, 1, 'resetpassword', 'resetpassword', -1, 0, 0, '#content', './?page=resetpassword', 'init_resetpassword', 'default_resetpassword');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (20, 1, 'account', 'account', -1, 0, 0, '#content', './?page=account', 'init_account', 'default_account');
REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (21, 1, 'website', 'account', 20, 1, 0, '#content_account', './?page=account_website', 'init_account_website', 'account_website');
REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (22, 1, 'changepassword', 'account', 20, 1, 1, '#content_account', './?page=account_changepassword', 'init_account_changepassword', 'account_changepassword');
REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (23, 1, 'changeemail', 'account', 20, 1, 1, '#content_account', './?page=account_changeemail', 'init_account_changeemail', 'account_changeemail');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (24, 1, 'tbc', 'account', 20, 1, 1, '#content_account', './?page=account_tbc', 'init_account_tbc', 'account_tbc');
REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (25, 1, 'tbc_new', 'account', 20, 1, 1, '#content_account', './?page=account_tbc_new', 'init_account_tbc_new', 'account_tbc_new');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (26, 1, 'beta', 'beta', -1, 0, 0, '#content', './?page=beta', 'init_beta', 'default_beta');
REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (27, 1, 'register', 'register', -1, 0, 0, '#content', './?page=register', 'init_register', 'default_register');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (30, 1, 'article', 'article', -1, 0, 0, '#content', './?page=article&id=${article}', 'init_article', 'default_article');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (35, 1, 'donate', 'donate', -1, 0, 0, '#content', './?page=donate', 'init_donate', 'default_donate');
