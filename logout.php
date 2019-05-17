<?php
	include('config.php');
	session_start(); 
	$Email_Id = $_SESSION['Email_Id'];
	session_destroy();	
	header("Location: index.php");
?> 