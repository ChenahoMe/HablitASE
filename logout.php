<?php
/*
| HablitASE - A secure management system for
| RevCMS, coded by Chenaho (AKA. Liam)
| ----------------------------------------------
| This is a development build, please report
| all errors or bugs to: report@chenaho.me
*/

// Require the global file
require_once("global.php");

if (LOGGED_IN)
{
	session_destroy();
	header("Location: index.php?logout");
	exit;
} else {
	header("Location: index.php?nologin");
	exit;
} 

?>