<?php
session_start();
$u = $_SESSION['user'];

if(!isset($u))
{
	header("location: index.php");
}

?>