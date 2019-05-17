<?php
function valid($Name, $Supplies, $Address, $Mobile_no, $error)
{
?>

<html>
<head>
<title>Insert Records</title>
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
			<a href="admin_page.php" class="btn">Member Details</a>
			<a href="guest_details.php" class="btn">Guest Details</a>
			<a href="staff_details.php" class="btn">Staff Details</a>
			<a href="maintenance.php" class="btn">Maintenance</a>
			<a href="see_complains.php" class="btn">Complaints</a>
			<a href="post_rules.php" class="btn">Rules/Regulations</a>
			<a href="post_suppliers.php" class="btn">Domestic Suppliers</a>
			<a href="post_notice.php" class="btn">Notices</a>
		    <a href="logout.php"  class="btn" style="float:right">Logout</a>
	    </div>
<section id="section">
<nav id="navvv">
<form action="" method="post">
<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Insert Records </font></b></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" value="<?php echo $Name; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Supplies<em>*</em></font></b></td>
<td><label>
<input type="text" name="Supplies" pattern="[a-zA-Z ]*$" title="please enter valid supplier" value="<?php echo $Supplies; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Address<em>*</em></font></b></td>
<td><label>
<input type="text" name="Address" pattern="[a-zA-Z ]*$" title="please enter valid address" value="<?php echo $Address; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Mobile_no<em>*</em></font></b></td>
<td><label>
<input type="text" name="Mobile_no" pattern = "[0-9]{10}" title="please enter valid mobile_number" value="<?php echo $Mobile_no; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Insert Records">
</label></td>
</tr>
</table>
</form>
</nav>
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
	$Name = mysqli_real_escape_string($dbConn, $_POST['Name']);
	$Supplies = mysqli_real_escape_string($dbConn, $_POST['Supplies']);
	$Address = mysqli_real_escape_string($dbConn, $_POST['Address']);
	$Mobile_no= mysqli_real_escape_string($dbConn, $_POST['Mobile_no']);
		if ($Name == '' || $Supplies == '' || $Address == '' || $Mobile_no == '')
		{
			$error = 'Please enter the details!';
			valid($Name, $Supplies, $Address, $Mobile_no, $error);
		}
		else
		{
			mysqli_query($dbConn, "INSERT suppliers SET Name='$Name', Supplies='$Supplies' , Address='$Address', Mobile_no='$Mobile_no'")
			or die(mysqli_error());
			header("Location: post_suppliers.php");
		}
  }
else
  {
    valid('','','','','');
  }
?>

	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
</body>
</html>
