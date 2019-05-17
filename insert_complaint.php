<?php
session_start();
			include('config.php');
           	
			$Email = $_SESSION['Email_Id'];		
			
			if(!$Email)
			{
				header("Location:index.php");
			}
		
         if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
	          $name;
		        $result = mysqli_query($dbConn,"SELECT * FROM register WHERE Email_Id='$Email'");
          			while($row = mysqli_fetch_array($result))
					  {
						 $name=$row['Name'];
						 $email=$row['Email_Id'];
					  }					
?>

<html>
<head>
<title>Insert Notices</title>
</head>
<body>

 <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <div class="header">
  <h1>SOCIETY MANAGEMENT SYSTEM</h1>
</div>
	    <div id="topnav">
			<a class="active" href="user_page.php">My profile</a>
			<a href="pay_maintenance.php">Pay Maintenance</a>
			<a href="place_complain.php">Place Complain</a>
			<a href="rules_regulations.php">Rules/Regulations</a>
			<a href="domestic_suppliers.php">Domestic Suppliers</a>
			<a href="notices.php">Notices</a>
		    <a href="logout.php" style="float:right">Logout</a>
	    </div>
		<section id="section">
		<nav id="navvv">
		    <form method="post">
			<table border="1" align="right">
				<tr>
				<td colspan="2"><b><font color='Red'>Insert Complaint</font></b></td>
				</tr>
				<tr>
				<td width="149"><b><font color='#663300'>Complaint<em>*</em></font></b></td>
				<td><label>
				<input type="text"  name="complain" value="" required />
				</label></td>
				</tr>
				<tr align="Right">
				<td colspan="12"><label>
				<input type="submit" name="submit" value="Insert Complaint">
				</label></td>
				</tr>
			</table>
			</form>
		</nav>
		 <p id="imggg">		
		 <ul>
		  <br><br><br><li>The Admin can generate Notices /Circulars for communication with Members</li>
          <li> Notice may be drafted , corrected and then approved</li>
		  <li>The Notice will be published on a predetermined date</li>
		  <li>Notice will be withdrawn on the predetermined date</li>
		  <li>Notice can be seen by the members after login in</li>
		  <li>Archive Notices [ which are withdrawn] can also be seen by the members</li>
		  <li>An easy, cost effective way of communicating with the members</li>
		  <li>We believe "A very strong communication line between the members 
			and the Admin solves many a problems"<br>and towards achieving this, we provide this as a Free feature for all users.</li></ul>
		</p>
		</section>
        
		<?php
     
		if (isset($_POST['submit']))
		 {
			$complain = mysqli_real_escape_string($dbConn, $_POST['complain']);
			$status = "Pending";
			
			mysqli_query($dbConn, "INSERT into complaint ( Email_Id , Name, status, complain ) values ( '$email' , '$name' , '$status' ,'$complain' )")
			or die(mysqli_error($dbConn));
			header("Location: place_complain.php");
		 }	

		 ?>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
</body>
</html>
	

