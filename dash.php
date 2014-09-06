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

// If the user is not logged in, they don't have access to this page!
if(!LOGGED_IN)
{
	header("Location: index.php");
	exit;
}

?>
<br /><br />secret content, <a href="logout.php">logout</a>