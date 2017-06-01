<?php
require 'connect.inc.php';
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];

function loggedin()
{
	if(isset($_SESSION['email']) && !empty($_SESSION['email']))
		return true;
	else
		return false;
	
}




?>