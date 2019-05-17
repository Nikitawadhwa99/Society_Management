<?php
function valid($Id,$Name, $Supplies, $Address, $Mobile_no, $error)
{
?>

<html>
<head>
<title>Edit Records</title>
</head>
<body>
<?php

	if ($error != '')
	{
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
	}
?>
 <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <div class="header">
  <h1>SOCIETY MANAGEMENT SYSTEM</h1>
</div>
	    <div id="topnav">
			<a class="active" href="admin_page.php">Member Details</a>
			<a href="guest_details.php">Guest Details</a>
			<a href="see_maintenance.php">Maintenance</a>
			<a href="see_complains.php">Complaints</a>
			<a href="post_rules.php">Rules/Regulations</a>
			<a href="post_suppliers.php">Domestic Suppliers</a>
			<a href="post_notice.php">Notices</a>
		    <a href="logout.php" style="float:right">Logout</a>
	    </div>
<section id="section">
<div id="navvv">
<form action="" method="post">
<input type="hidden" name="Id" value="<?php echo $Id; ?>"/>
<table border="1">
	<tr>
	<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
	</tr>
	<tr>
	<td width="179"><b><font color='#663300'>Name<em>*</em></font></b></td>
	<td><label>
	<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" value="<?php echo $Name ?>" />
	</label></td>
	</tr>

	
	<tr>
	<td width="179"><b><font color='#663300'>Supplies<em>*</em></font></b></td>
	<td><label>
	<input type="text" name="Supplies" pattern="[a-zA-Z ]*$" title="please enter valid supplier" value="<?php echo $Supplies ?>" />
	</label></td>
	</tr>

	
	<tr>
	<td width="179"><b><font color='#663300'>Address<em>*</em></font></b></td>
	<td><label>
	<input type="text" name="Address" pattern="[a-zA-Z ]*$" title="please enter valid address" value="<?php echo $Address ?>" />
	</label></td>
	</tr>

	
	<tr>
	<td width="179"><b><font color='#663300'>Mobile_no<em>*</em></font></b></td>
	<td><label>
	<input type="text" name="Mobile_no" pattern = "[0-9]{10}" title="please enter valid mobile_number" value="<?php echo $Mobile_no ?>" />
	</label></td>
	</tr>

	
	<tr align="Right">
	<td colspan="2"><label>
	<input type="submit" name="submit" value="Edit Records">
	</label></td>
</tr>
</table>
</form>
</div>
		 <p id="imggg">		
		 <ul>
		  <br><br><br><li>The Admin can generate Notices /Circulars for communication with Members</li>
          <li> Notice may be drafted , corrected and then approved</li>
		  <li>The Notice will be published on a predetermined date</li>
		  <li>Notice will be withdrawn on the predetermined date</li>
		  <li>Notice can be seen by the members after login in</li>
		  <li>Archive Notices [ which are withdrawn] can also be seen by the members</li>
		  <li>An easy, cost effective way of communicating with the members</li>
		  <li>We believe "A very strong communication line between the members 
			and the Admin solves many a <br>problems"and towards achieving this, we provide this as a Free feature for all users.</li></ul>
		</p>
		</section>

<?php
}
    session_start();
	include('config.php');

	if (isset($_POST['submit']))
	{
		if (is_numeric($_POST['Id']))
		 {
			$Id = $_POST['Id'];
			$Name = mysqli_real_escape_string($dbConn, $_POST['Name']);
			$Supplies = mysqli_real_escape_string($dbConn, $_POST['Supplies']);
			$Address = mysqli_real_escape_string($dbConn, $_POST['Address']);
			$Mobile_no= mysqli_real_escape_string($dbConn, $_POST['Mobile_no']);
				if ($Name == '' || $Supplies == '' || $Address == '' || $Mobile_no == '')
				  {
					$error = 'ERROR: Please fill in all required fields!';
					valid($Id, $Name, $Supplies, $Address, $Mobile_no, $error);
				  }
				else
				  {
					mysqli_query($dbConn, "UPDATE suppliers SET Name='$Name', Supplies='$Supplies' , Address='$Address', Mobile_no='$Mobile_no'  WHERE Id='$Id'")
					or die(mysqli_error());
					header("Location: post_suppliers.php");
				  }
		 }
		else
	     {
			echo 'Error!';
	     }
	}
	else
	{
		if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
		{
			$id = $_GET['id'];
			$result = mysqli_query($dbConn, "SELECT * FROM suppliers WHERE id=$id")
			or die(mysqli_error());
			$row = mysqli_fetch_array($result);
				if($row)
				  {
					$Name = $row['Name'];
					$Supplies = $row['Supplies'];
					$Address = $row['Address'];
					$Mobile_no = $row['Mobile_no'];
					valid($id, $Name, $Supplies, $Address, $Mobile_no,'');
				  }
				else
				  {
					echo "No results!";
				  }
		}
		else
		  {
			echo 'Error!';
		  }
	}
?>
<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
</body>
</html>