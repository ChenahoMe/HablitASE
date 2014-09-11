<?php
/*
| HablitASE - A secure management system for
| RevCMS, coded by Chenaho (AKA. Liam)
| ----------------------------------------------
| This is a development build, please report
| all errors or bugs to: report@chenaho.me
*/

// Require the Global file
require("global.php");

// If the user is already logged in, let's take them to the dashboard
if (LOGGED_IN)
{
	header("Location: dash.php");
	exit;
}

// Check if a login has been submitted
if(isset($_POST['login']))
{
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = filter($_POST['username']);
		$password = md5($_POST['password']);
		
			if(LOGLOGINS == true)
			{
				$a = $_SERVER["REMOTE_ADDR"];
				$myFile = "logins.php";
				$fh = fopen($myFile, 'a') or die("Can not open login log file.");
				/* For security reasons, you are not allowed to remove the password hashing,
					doing so hearby breaks the licensing agreement.  */
				$stringData = "\necho 'Timestamp: " . date("D M d, Y G:i a") . " | IP Addr: " . $a . " | Attempted user: " . filter($_POST['username']) . " - Password hash: " . md5($_POST['password']) . "<br />';\n";
				fwrite($fh, $stringData);
				fclose($fh);
			}
		
		if($user->CheckUser($username, $password, $mysqli, MODERATOR));
		{
			$_SESSION['HABLIT_ASE_USERNAME'] = $username;
			$_SESSION['HABLIT_ASE_PASSWORD'] = $password;
			header("Location: dash.php");
			exit;
		}
	} 
}

// Include login HTML
require( I . T . "index.tpl");
?>