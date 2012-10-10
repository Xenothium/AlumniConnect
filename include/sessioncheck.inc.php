<?php

function checkSessionID() //Session Check after *LOGIN*
{
	if(!isset($_SESSION))
	session_start();
	if(!isset($_SESSION['id']))
	die("Session Error");
}

?>