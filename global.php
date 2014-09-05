<?php
/*
| HablitASE - A secure management system for
| RevCMS, coded by Chenaho (AKA. Liam)
| ----------------------------------------------
| This is a development build, please report
| all errors or bugs to: report@chenaho.me
*/

// Define
define('I', 'includes/');
define('R', 'required/');
define('T', 'template/');
define('NOTSET', false);
define('NOGO', false);

// Require
require( I . R . "configuration.php");
//require( I . R . "mysqli.php"); // MySQLi is currently embedded in the Global file
//require( I . R . "functions.php");
require( I . R . "core.php");

// MySQLi
$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

// Sets the sessions IP
$ip = $_SERVER['REMOTE_ADDR'];

// Set variables for classes
$user = new HabUsers();
//$moderator = new ModeratorFunctions();
//$admin = new AdministratorFunctions();
//$manager = new ManagerFunctions();
//$owner = new OwnerFunctions();

// Start zee' session
session_start();

// Check to see if a session is set
if(isset($_SESSION['HABLIT_ASE_USERNAME']) && isset($_SESSION['HABLIT_ASE_PASSWORD']))
{
	$userN = $_SESSION['HABLIT_ASE_USERNAME'];
	$userP = $_SESSION['HABLIT_ASE_PASSWORD'];
	
	if($user->CheckUser($userN, $userP, $mysqli))
	{
		define('LOGGED_IN', true);
		define('USER_NAME', $userN);
		define('USER_HASH', $userP);	
	} 
	else 
	{
		define('LOGGED_IN', false);
	}
} 
	else 
	{
		define('LOGGED_IN', false);
	}

?>