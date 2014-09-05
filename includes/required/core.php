<?php
/*
| HablitASE - A secure management system for
| RevCMS, coded by Chenaho (AKA. Liam)
| ----------------------------------------------
| This is a development build, please report
| all errors or bugs to: report@chenaho.me
*/

class HabUsers
{

	function CheckUser($username, $password, $mysqli)
	{
		$result = $mysqli->query("SELECT null FROM users WHERE username = '" . $username . "' AND password = '" . $password. "' LIMIT 1");
		$row_cnt = $result->num_rows;
		
		// Returns the row count can either be 1, or 0
		return $row_cnt;
		//$result->close();
	}
	
}

?>