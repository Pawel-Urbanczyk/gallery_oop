<?php

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("photo.php");
require_once("user.php");
require_once("sessios.php");
require_once("comment.php");

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', DS . 'Applications' . DS . 'MAMP' . DS . 'htdocs' . DS . 'gallery_oop');

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');


?>