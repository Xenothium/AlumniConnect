<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<div id="biodata">
<?php
/*
UNFINISHED
*/
$debug = true; //Will be removed
include_once("include/sqlconnect.inc.php");
include_once("include/sessioncheck.inc.php");
$id = 1;
if($debug==false)
{checkSessionID();
$id = $_SERVER['id'];
}
$con = connectToSQL();
if(!$con)
die("Error : " + mysql_error($con));
$query = "SELECT * FROM user WHERE id = ".$id;
$res = mysql_query($query,$con);
if(!$res)die("Unable to fetch data");

$row = mysql_fetch_array($res);
$firstName = $row['first_name'];
$lastName = $row['last_name'];

echo $firstName," ",$lastName;
?>
</div>




<?php
//***Close SQL connection***//
mysql_close($con);
?>
<body>
</body>
</html>