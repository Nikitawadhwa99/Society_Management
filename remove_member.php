<?php
	include('config.php');

	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$id = $_GET['id'];

		$result = mysqli_query($dbConn, "DELETE FROM register WHERE id=$id")
		or die(mysqli_error());

		header("Location:admin_page.php");
	}
	else
	{
		header("Location: admin_page.php");
	}
?>