<html>
   <body>
      <link rel="stylesheet" href="css/style.css">
     <div class="header">
  <h1>SOCIETY MANAGEMENT SYSTEM</h1>
</div>
	    <div id="topnav">
			<a href="user_page.php">My profile</a>
			<a href="pay_maintenance.php">Pay maintenance</a>
			<a href="place_complain.php">Place Complain</a>
			<a href="rules_regulations.php">Rules/Regulations</a>
			<a href="domestic_suppliers.php">Domestic Suppliers</a>
			<a href="notices.php">Notices</a>
		    <a href="logout.php" style="float:right">Logout</a>
	    </div>
		<section id="section">
		  <?php
			   include('config.php');
			   $result = mysqli_query($dbConn, "SELECT * FROM add_staff")
				or die(mysql_error());

				echo "<table border='4' width='100%' cellpadding='4' id='user'>";
				echo "<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Mobile_no</th>
				<th>Staff_for</th>
				</tr>";
				while($row = mysqli_fetch_array( $result ))
				{
				  echo "<tr>";
				  echo '<td align="center">' . $row['Name'] . '</td>';
				  echo '<td align="center">' . $row['Address'] . '</td>';
				  echo '<td align="center">' . $row['Mobile'] . '</td>';
				  echo '<td align="center">' . $row['Staff_for'] . '</td>';
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