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

	function CheckUser($username, $password, $mysqli, $mod)
	{
		$result = $mysqli->query("SELECT null FROM users WHERE username = '" . $username . "' AND password = '" . $password. "' AND rank >= '" . $mod . "' LIMIT 1");
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

class QueryManager
{
	
	function Select($var, $from, $where, $row, $mysqli)
	{
		$query = $mysqli->query("SELECT " . $var . " FROM " . $from . " WHERE " . $where . " = '" . $row . "' LIMIT 1");
		$result = $query->fetch_assoc(); // We need to fetch the result first
		return $result[$var];
	}

}

function filter($var)
	{
		return mysql_real_escape_string(stripslashes(htmlspecialchars($var)));
	}

?>