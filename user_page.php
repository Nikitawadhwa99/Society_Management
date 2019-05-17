<?php
session_start();
			include('config.php');
           	
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
			<a href="user_page.php">My profile</a>
			<a href="pay_maintenance.php">Pay maintenance</a>
			<a href="place_complain.php">Place Complain</a>
			<a href="rules_regulations.php">Rules/Regulations</a>
			<a href="domestic_suppliers.php">Domestic Suppliers</a>
			<a href="notices.php">Notices</a>
		    <a href="logout.php" style="float:right">Logout</a>
		</div>
	<section id="section"> 
  
	<div id="card">
	    <?php
			
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
	
		        $result = mysqli_query($dbConn,"SELECT * FROM register WHERE Email_Id='$Email'");
          			while($row = mysqli_fetch_array($result))
					  {
						echo "<tr><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Name-</font></STRONG></FONT></td><td>' . $row['Name'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Address-</font></STRONG></FONT></td><td align="center">' . $row['Address'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Mobile_no-</font></STRONG></FONT></td><td align="center">' . $row['Mobile_no'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Email_Id-</font></STRONG></FONT></td><td align="center">' . $row['Email_Id'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Usertype-</font></STRONG></FONT></td><td align="center">'. $row['Usertype'] . '</td>';
						echo "<br><br>";
						echo '<td><FONT size=4><STRONG><font face="Arial">Hometype-</font></STRONG></FONT></td><td align="center">' . $row['Hometype'] . '</td>';
						echo "</tr>";
					  }
	    ?>
	 </div>
	</section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>