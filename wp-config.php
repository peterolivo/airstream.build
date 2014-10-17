<?php
$services = getenv("VCAP_SERVICES");
$services_json = json_decode($services,true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];

// ** MySQL settings from resource descriptor ** //
if (getenv("VCAP_SERVICES")) {
	define('DB_NAME', $mysql_config["name"]);
	define('DB_USER', $mysql_config["user"]);
	define('DB_PASSWORD', $mysql_config["password"]);
	define('DB_HOST', $mysql_config["hostname"]);
	define('DB_PORT', $mysql_config["port"]);
	//define('WP_HOME', 'http://airstream.uc01.clc.af.cm/');
	//define('WP_SITEURL', 'http://www.airstream.build/');
} else {
	define('DB_NAME', 'airstreamWordpress');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
	define('WP_HOME', 'http://localhost');
	define('WP_SITEURL', 'http://localhost');
}
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define ('WPLANG', '');
define('WP_DEBUG', false);

$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

