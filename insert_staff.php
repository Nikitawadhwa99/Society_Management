<?php
include('config.php');

if (isset($_POST['submit']))
  {
	$Name = mysqli_real_escape_string($dbConn, $_POST['Name']);
	$Address = mysqli_real_escape_string($dbConn, $_POST['Address']);
	$Mobile_no= mysqli_real_escape_string($dbConn, $_POST['Mobile']);
	$Alt_Mobile_no= mysqli_real_escape_string($dbConn, $_POST['Alt_mob']);
	$Aadhar_no= mysqli_real_escape_string($dbConn, $_POST['Adhar_no']);
	$Staff_for= mysqli_real_escape_string($dbConn, $_POST['Staff_for']);
	$Date= mysqli_real_escape_string($dbConn, $_POST['Date']);

			mysqli_query($dbConn, "INSERT into add_staff (Name, Address, Mobile, Alt_mob, Adhar_no , Staff_for , Date) values ('$Name','$Address','$Mobile_no','$Alt_Mobile_no', '$Aadhar_no', '$Staff_for', '$Date')");
			header("Location:staff_details.php");
		}
?>

<html>
<head>
<title>Insert Records</title>
</head>
<body>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <div class="header">
  <h1>SOCIETY MANAGEMENT SYSTEM</h1>
</div>
	    <div id="topnav">
			<a href="admin_page.php" class="btn">Member Details</a>
			<a href="guest_details.php" class="btn">Guest Entries</a>
			<a href="staff_details.php" class="btn">Staff Details</a>
			<a href="staff_entries.php" class="btn">Staff Entries</a>
			<a href="maintenance.php" class="btn">Maintenance</a>
			<a href="see_complains.php" class="btn">Complaints</a>
			<a href="post_rules.php" class="btn">Rules/Regulations</a>
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
<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name"  required / >
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Address<em>*</em></font></b></td>
<td><label>
<input type="text" name="Address" title="please enter valid address"  required / >
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Mobile_no<em>*</em></font></b></td>
<td><label>
<input type="text" name="Mobile" title="please enter valid mobile_number"  required / >
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Alt_Mobile_no</font></b></td>
<td><label>
<input type="text" name="Alt_mob"  title="please enter valid alt_mobile_number"  />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Aadhar_no<em>*</em></font></b></td>
<td><label>
<input type="text" name="Adhar_no" title="please enter valid aadhar_number"  required / >
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Staff_for<em>*</em></font></b></td>
<td><label>
<input type="text" name="Staff_for" pattern="[a-zA-Z ]*$" title="please enter valid staff"  required / >
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Date_of_joining<em>*</em></font></b></td>
<td><label>
<input type="date" pattern="Y/m/d" name="Date"  title="please enter valid date" required / >
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
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
</body>
</html>
