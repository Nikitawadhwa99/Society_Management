<?php
	include('config.php');

	if (isset($_GET['Id']) && is_numeric($_GET['Id']))
	{
		$id = $_GET['Id'];

		$result = mysqli_query($dbConn, "Update complaint SET status='Solved' where Id='$id'" )
		or die(mysqli_error());

		header("Location:see_complains.php");
	}
	else
	{
		header("Location: see_complains.php");
	}
?>