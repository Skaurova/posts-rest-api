<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'wamp64'.DS.'www'.DS.'rest-api');
defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'add');
defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'main');

require_once(INC_PATH.DS."config.php");

require_once(CORE_PATH.DS."post.php");

