<?php
session_start();
$_SESSION['already_register']='okay';
	
$okay = $_SESSION['already_register'];
header('location:landsearch.php');

?>