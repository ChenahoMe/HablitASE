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
		return $row_cnt;
	}
	
	function GetVar($var, $username, $mysqli)
	{
		$query = $mysqli->query("SELECT " . $var . " FROM users WHERE username = '" . $username . "' LIMIT 1");
		$result = $query->fetch_assoc(); // We need to fetch the result first
		return $result[$var];
	}
	
}

?>