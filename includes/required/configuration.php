<?php
/*
| HablitASE - A secure management system for
| RevCMS, coded by Chenaho (AKA. Liam)
| ----------------------------------------------
| This is a development build, please report
| all errors or bugs to: report@chenaho.me
*/

// MySQL details
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'abc123');
define('DATABASE', 'camwijs');

// Site/hotel information
define('HOTEL_NAME', 'Hablit');
define('SITE_URL', 'http://127.0.0.1');
define('PANEL_URL', 'http://127.0.0.1/HablitASE');

// Rank setup
define('MODERATOR', '4');
define('ADMINISTRATOR', '6');
define('MANAGER', '8');
define('OWNER', '10');

// Login security features
define('LIMIT_ATTEMPTS', 0); // Feature is not active. Keep set to 0.
define('LOGLOGINS', false); // Currently in development, may be somewhat unsafe to use? Set to true to enable login logs.

// Keep DEVELOPMENT mode as false, unless
define('DEVELOPMENT', true);
// you are aware of the development features.

?>