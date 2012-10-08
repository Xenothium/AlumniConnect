<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AlumniConnect | Welcome</title>
</head>
<div id="welcome">
<?php
/*
//Welcome 
Requires -
Session to be initialized.
Session var 'id' 
*/
include_once("include/sqlconnect.inc.php");
session_start();
if(!isset($_SESSION['id']))
die("Session Error");
$id = $_SESSION['id'];
$con = connectToDB($dbName);
$res = mysql_query("Select first_name from user where id = ".$id);
$row = mysql_fetch_array($res);
$firstname = $row['first_name'];
echo "Welcome, ".$firstname;
mysql_close($con);
?>
</div>
<body>
</body>
</html>