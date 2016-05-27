REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (10, 1, 'start', 'start', -1, 0, 0, '#content', './?page=start', 'init_start', 'default_start');
REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (11, 1, 'serverlist', 'start', 10, 0, 0, '#content_servers', './?page=serverlist', 'init_serverlist', 'default_serverlist');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (15, 1, 'impressum', 'impressum', -1, 0, 0, '#content', './?page=impressum', 'init_impressum', 'default_impressum');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (20, 1, 'login', 'login', -1, 0, 0, '#content', './?page=login', 'init_login', 'default_login');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (25, 1, 'beta', 'beta', -1, 0, 0, '#content', './?page=beta', 'init_beta', 'default_beta');
REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (26, 1, 'register', 'register', -1, 0, 0, '#content', './?page=register', 'init_register', 'default_register');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (30, 1, 'article', 'article', -1, 0, 0, '#content', './?page=article&id=${article}', 'init_article', 'default_article');

REPLACE INTO `system_page` (`id`, `group`, `name`, `state`, `parent_id`, `login`, `type`, `div`, `url`, `func`, `php_class`) VALUES (35, 1, 'donate', 'donate', -1, 0, 0, '#content', './?page=donate', 'init_donate', 'default_donate');
