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

// Rank setup
define('MODERATOR', 4);
define('ADMINISTRATOR', 6);
define('MANAGER', 8);
define('OWNER', 10);

// Login security features
define('LIMIT_ATTEMPTS', 0); // 0 to disable login attempts
define('USERTOIP', false); // Current IP must match registered IP in order to login

// For development use only
define('DEVELOPMENT', true); // Do not set to true unless you know what you're doing
// For development use only

?>