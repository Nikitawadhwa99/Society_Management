<?php
	include('config.php');

	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$id = $_GET['id'];

		$result = mysqli_query($dbConn, "DELETE FROM complaint WHERE id=$id")
		or die(mysqli_error());

		header("Location:place_complain.php");
	}
	else
	{
		header("Location: place_complain.php");
	}
?>