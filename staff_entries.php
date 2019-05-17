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
					$result = mysqli_query($dbConn,"SELECT * FROM staff_entry");
					echo "<table border='4' width='100%' cellspacing='4' id='user'>
					<tr>
					<th>Name</th>
					<th>Staff_for</th>
					<th>Date</th>
					<th>Check_in</th>
					<th>Check_out</th>
					</tr>";
						while($row = mysqli_fetch_array($result))
						  {
							echo '<tr>
							<td align="center">' . $row['Name'] . '</td>
							<td align="center">' . $row['Staff_for'] . '</td>
							<td align="center">' . $row['Date'] . '</td>
							<td align="center">' . $row['Check_in'] . '</td>
							<td align="center">'. $row['Check_out'] . '</td>
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