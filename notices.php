<html>
   <body>
      <link rel="stylesheet" href="css/style.css" type="text/css"/>
     <div class="header">
  <h1>SOCIETY MANAGEMENT SYSTEM</h1>
</div>
	    <div id="topnav">
			<a class="active" href="user_page.php">My profile</a>
			<a href="pay_maintenance.php">Pay maintenance</a>
			<a href="place_complain.php">Place Complain</a>
			<a href="rules_regulations.php">Rules/Regulations</a>
			<a href="domestic_suppliers.php">Domestic Suppliers</a>
			<a href="notices.php">Notices</a>
		    <a href="logout.php" style="float:right">Logout</a>
	    </div>
		<section id="section"> 
	     <?php
			session_start();
			include('config.php');

			$result = mysqli_query($dbConn, "SELECT * FROM Notices")
			or die(mysqli_error());
			echo "<table border='0' width='100%' cellpadding='10'>";
			echo "<tr>
			<th><align='center'>Notice</font></th>
			</tr>";
			while($row = mysqli_fetch_array( $result ))
			{
				echo "<tr>";
				echo '<td align="center"><b><font color="#663300">' . $row['Notice'] . '</font></b></td>';
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