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

			$Email = $_SESSION['Email_Id'];		
			
			if(!$Email)
			{
				header("Location:index.php");
			}
			
			
			$result = mysqli_query($dbConn, "SELECT * FROM complaint where Email_Id='$Email'");
			echo "<table border='0' width='100%' cellpadding='10'>";
			echo "<tr>
			<th><align='center'>Name</font></th>
			<th><align='center'>Complaint</font></th>
			<th><align='center'>Status</font></th>
			<th><align='center'>Delete</font></th>
			</tr>";
			while($row = mysqli_fetch_array($result))
			{
			  echo '<tr>
			  <td align="center"><b><font color="#663300">' . $row['Name'] . '</font></b></td>
			  <td align="center"><b><font color="#663300">' . $row['complain'] . '</font></b></td>
			  <td align="center"><b><font color="#663300">' . $row['status'] . '</font></b></td>
			  <td align="center"><b><font color="#663300"><a href="delete_complaint.php?id=' . $row['Id'] . '" style="color:black;">Delete</a></font></b></td>
			  </tr>';
			}
			  echo "</table>";
         ?>
            <p><button onclick="location.href='insert_complaint.php'" >Post Complaint</button></p>
		</section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>