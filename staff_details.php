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
				$result = mysqli_query($dbConn,"SELECT * FROM add_staff");
				echo "<table border='4' width='100%' cellspacing='4' id='user'>
				<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Mobile_no</th>
				<th>Alt_Mobile_no</th>
				<th>Aadhar_no</th>
				<th>Staff_for</th>
				<th>Date_of_joining</th>
                <th>Remove</th>				
				</tr>";
					while($row = mysqli_fetch_array($result))
					  {
						echo "<tr>";
						echo '<td align="center">' . $row['Name'] . '</td>';
						echo '<td align="center">' . $row['Address'] . '</td>';
						echo '<td align="center">' . $row['Mobile'] . '</td>';
						echo '<td align="center">' . $row['Alt_mob'] . '</td>';
						echo '<td align="center">' . $row['Adhar_no'] . '</td>';
						echo '<td align="center">' . $row['Staff_for'] . '</td>';
						echo '<td align="center">' . $row['Date'] . '</td>';
						echo '<td align="center"><a href="remove_staff.php?id=' . $row['Id'] . '" style="color:black;">Remove</a></td>';
						echo "</tr>";
					  }
						echo "</table>";
	    ?>
		<p><button onclick="location.href='insert_staff.php'">Add new staff</button></p>
	</section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>