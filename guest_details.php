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
		session_start();
			include('config.php');
							
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
				$result = mysqli_query($dbConn,"SELECT * FROM guest_entry");
				echo "<table border='4' width='100%' cellspacing='4' id='user'>
				<tr>
				<th>Visitor Name</th>
				<th>Mobile_no</th>
				<th>Visiting Name</th>
				<th>Date</th>	
				<th>Check_in</th>	
				<th>Check_out</th>
				</tr>";
					while($row = mysqli_fetch_array($result))
					  {
						echo "<tr>";
						echo '<td align="center">' . $row['Name'] . '</td>';
						echo '<td align="center">' . $row['Mobile_no'] . '</td>';
						echo '<td align="center">' . $row['Going_In'] . '</td>';
						echo '<td align="center">' . $row['Date'] . '</td>';
						echo '<td align="center">' . $row['Check_in'] . '</td>';
						echo '<td align="center">' . $row['Check_out'] . '</td>';
						echo "</tr>";
					  }
						echo "</table>";
	    ?>
		</section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>