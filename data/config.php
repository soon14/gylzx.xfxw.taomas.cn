<?php
// database host
$db_host   = "localhost:3306";

// database name
$db_name   = "gylzx";

// database username
$db_user   = "root";

// database password
$db_pass   = "000000";

// table prefix
$prefix    = "ecs_";

$timezone    = "UTC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

if(!defined('ADMIN_PATH'))
{
define('ADMIN_PATH','admin');
}

define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2016-10-25 06:13:40');

?>
