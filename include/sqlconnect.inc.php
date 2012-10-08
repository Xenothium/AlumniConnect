<?php
include_once("config.inc.php");
function connectsql()
{
	global $sqlUser,$sqlPass,$server;
	$conn = mysql_connect($server,$sqlUser,$sqlPass);
	return $conn;
}

function connectToDB($name)
{
	$conn = connectsql();
	mysql_select_db($name,$conn);
	return $conn;
}


?>