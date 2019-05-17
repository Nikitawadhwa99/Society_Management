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
  <body id="adminpage">
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
		    <?php
			
			if(mysqli_connect_errno())
			  {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			else
				{
					$result = mysqli_query($dbConn,"SELECT * FROM pay_maintenance");
					echo "<table border='4' width='100%' cellspacing='4' id='user'>
					<tr>
					<th>Name</th>
					<th>Mobile_no</th>
					<th>Date</th>
					<th>Plot_no</th>
					<th>Payment_mode</th>
					<th>Payment</th>
					<th>Plans</th>
					</tr>";
						while($row = mysqli_fetch_array($result))
						  {
							echo '<tr>
							<td align="center">' . $row['Name'] . '</td>
							<td align="center">' . $row['Mobile_no'] . '</td>
							<td align="center">' . $row['Date'] . '</td>
							<td align="center">'. $row['Plot_no'] . '</td>
							<td align="center">' . $row['Payment_mode'] . '</td>
							<td align="center">' . $row['Payment'] . '</td>
							<td align="center">' . $row['Plans'] . '</td>
							</tr>';
						  }
							echo "</table>";
				}
						
	    ?>
	</section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>