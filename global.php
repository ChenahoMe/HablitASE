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

// Require
require( I . R . "configuration.php");
//require( I . R . "mysqli.php"); // MySQLi is currently embedded in the Global file
require( I . R . "functions.php");
require( I . R . "core.php");

// MySQLi
$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

// Sets the sessions IP
$ip = $_SERVER['REMOTE_ADDR'];
define('IP', $_SERVER['REMOTE_ADDR']);

// Set variables for classes
$user = new HabUsers();
$query = new QueryManager();
$moderator = new ModeratorFunctions();
$admin = new AdministratorFunctions();
$manager = new ManagerFunctions();
$owner = new OwnerFunctions();

// Start zee' session
session_start();

// Check to see if a session is set
if(isset($_SESSION['HABLIT_ASE_USERNAME']) && isset($_SESSION['HABLIT_ASE_PASSWORD']))
{
	$userN = filter($_SESSION['HABLIT_ASE_USERNAME']);
	$userP = filter($_SESSION['HABLIT_ASE_PASSWORD']);
	
	if($user->CheckUser($userN, $userP, $mysqli, MODERATOR))
	{
		define('LOGGED_IN', true);
		define('USER_NAME', $userN);
		define('USER_HASH', $userP);
		define('RANK', $user->GetVar('rank', USER_NAME, $mysqli));
	} 
	else 
	{
		@session_destroy();
		define('LOGGED_IN', false);
		define('RANK', '0');
	}
} 
	else 
	{
		define('LOGGED_IN', false);
		define('RANK', '0');
	}

?>