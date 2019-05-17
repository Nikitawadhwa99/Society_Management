<html>
   <body>
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
	     <?php
             session_start();
			include('config.php');

			$result = mysqli_query($dbConn, "SELECT * FROM suppliers")
			or die(mysql_error());
			echo "<table border='4' width='100%' cellpadding='4' id='user'>
			<tr>
			<th>Name</th>
			<th>Supplies</th>
			<th>Address</th>
			<th>Mobile_no</th>
			<th>Edit</th>
			<th>Delete</th>
			</tr>";
			while($row = mysqli_fetch_array( $result ))
			{
				echo "<tr>";
				echo '<td align="center">' . $row['Name'] . '</td>';
				echo '<td align="center">' . $row['Supplies'] . '</td>';
				echo '<td align="center">' . $row['Address'] . '</td>';
				echo '<td align="center">' . $row['Mobile_no'] . '</td>';
				echo '<td align="center"><a href="edit_suppliers.php?id=' . $row['Id'] . '" style="color:black;">Edit</a></td>';
				echo '<td align="center"><a href="delete_suppliers.php?id=' . $row['Id'] . '" style="color:black;">Delete</a></td>';
				echo "</tr>";
			}
				echo "</table>";
         ?>
            <p><button onclick="location.href='insert_suppliers.php'">Insert new record</button></p>
		</section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>