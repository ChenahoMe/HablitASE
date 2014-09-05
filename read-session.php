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

// This is used for development reasons. And only enables if DEVELOPMENT is set to true
if(isset($_SESSION['HABLIT_ASE_USERNAME']) && isset($_SESSION['HABLIT_ASE_PASSWORD']) && DEVELOPMENT == true)
{
	echo $_SESSION['HABLIT_ASE_USERNAME'] . '<br />';
	echo $_SESSION['HABLIT_ASE_PASSWORD'];
} else {
	if(DEVELOPMENT == false) { echo 'HablitASE is not in development mode. '; } else { echo 'No active session found. '; }
}

?>