
<html>
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
	      <?php
		   include('config.php');  
				$result = mysqli_query($dbConn, "SELECT * FROM complaint where status='Pending'")
				or die(mysqli_error());	
				echo "<table border='0' width='100%' cellpadding='10'>";
				echo "<tr>
				<th><align='center'>Name</font></th>
				<th><align='center'>Complaints</font></th>
				<th><align='center'>Status</font></th>
				<th><align='center'>Edit</font></th>
				</tr>";
				while($row = mysqli_fetch_array( $result ))
				{
				 
				  echo "<tr>";
				  echo '<td align="center"><b><font color="#663300">' . $row['Name'] . '</font></b></td>';
				  echo '<td align="center"><b><font color="#663300">' . $row['complain'] . '</font></b></td>';
				  echo '<td align="center"><b><font color="#663300">' . $row['status'] . '</font></b></td>';
				  echo '<td align="center"><a href="approve_complains.php?Id=' . $row['Id'] . '" style="color:black;">Solved</a></td>'; 
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