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
		<section> 
	        <div class="guest">
			  <form method="post">
				<h2 style="color:black;">Staff List:</h2>     
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
					<th>Update</th>
					</tr>";
						while($row = mysqli_fetch_array($result))
						  {
							echo '<tr>
							<td align="center">' . $row['Name'] . '</td>
							<td align="center">' . $row['Staff_for'] . '</td>
							<td align="center">' . $row['Date'] . '</td>
							<td align="center">' . $row['Check_in'] . '</td>
							<td align="center">'. $row['Check_out'] . '</td>
							<td align="center"><a href="staff_update.php?id=' .$row['Id'] . '" style="color:black;">Update</a>
							</tr>';
						  }
							echo "</table>";
				}
						
	    ?>
						<p><font size="4px" color="black">Go to <a href="gatekeeper.php" style="color:black;" >homepage</a><br><br>
						<button onclick="printt()">Print Page</button>
						
	          </div>
			  </form>
			  <div>
   <img src="images/guest.png" id="guest_img"/>
  </div>
</div>
	    </section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
<script>
   function printt()
   {
	   window.print();
   }
</script>
  </body>
</html>