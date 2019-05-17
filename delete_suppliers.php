<?php
	include('config.php');

	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$id = $_GET['id'];

		$result = mysqli_query($dbConn, "DELETE FROM suppliers WHERE id=$id")
		or die(mysqli_error());

		header("Location:post_suppliers.php");
	}
	else
	{
		header("Location: post_suppliers.php");
	}
?>