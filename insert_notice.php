<?php
     include('config.php');
	 session_start();
	 $Email = $_SESSION['Email_Id'];		
			
	 if(!$Email)
		{
		  header("Location:index.php");
		}
?>

<html>
<head>
<title>Insert Notices</title>
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
				<td colspan="2"><b><font color='Red'>Insert Notices</font></b></td>
				</tr>
				<tr>
				<td width="149"><b><font color='#663300'>Date<em>*</em></font></b></td>
				<td><label>
				<input type="date"  name="Date"  required />
				</label></td>
				</tr>
				<tr>
				<td width="149"><b><font color='#663300'>Notice<em>*</em></font></b></td>
				<td><label>
				<input type="text"  name="Notice" required />
				</label></td>
				</tr>

				<tr align="Right">
				<td colspan="12"><label>
				<input type="submit" name="submit" value="Insert Notices">
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
			and the Admin solves many a problems"<br>and towards achieving this, we provide this as a Free feature for all users.</li></ul>
		</p>
		</section>

	<?php

		if (isset($_POST['submit']))
		{
		  $Date = mysqli_real_escape_string($dbConn, $_POST['Date']);
		  $Notice = mysqli_real_escape_string($dbConn, $_POST['Notice']);
				
				$search_query=mysqli_query($dbConn, "INSERT into notices (Date,Notice) values ('$Date','$Notice')");
				header("Location: post_notice.php");
		}
	?>
<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
</body>
</html>