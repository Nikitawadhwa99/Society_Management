<?php
  session_start();
  include('config.php');

   if (isset($_POST['confirm']))
  {
	$name=$_SESSION['Name'];
	$mobile=$_SESSION['Mobile_no'];
	$date=$_SESSION['Date'];
	$plot = $_SESSION['Plot_no'];
	$payment_mode = $_SESSION['Payment_mode'];
	$pay = $_SESSION['Payment'];
	$plan = $_SESSION['Plans'];
		
			$search_query=mysqli_query($dbConn, "INSERT into pay_main (Name, Mobile_no, Date, Plot_no, Payment_mode , Payment, Plans) values ('$name','$mobile','$date','$plot', '$payment_mode', '$pay', '$plan')");
			header("Location: pay_maintenance.php");			
  }
  if (isset($_POST['cancel']))
  {
	  header("Location: user_page.php");	
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
		  <form method="post">
			<table>
			   <tr>
				  <td width="179"><b><font color='#663300'>Name:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Name'];?></font></td>
			  </tr>
			   <tr>
				  <td width="179"><b><font color='#663300'>Mobile_no:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Mobile_no'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Date:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Date'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Plot_no:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Plot_no'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Payment_mode:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Payment_mode'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Payment:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Payment'];?></font></td>
				</tr>
				<tr>
				  <td width="179"><b><font color='#663300'>Plan:</font></b></td>
				  <td width="179"><font color='#663300'><?php echo $_SESSION['Plans'];?></font></td>
				</tr>
			</table><br>
			    <input type="submit" name="confirm" value="Confirm payment"/><br><br>
				<input type="submit" name="cancel" value="Cancel payment"/>
			</form>
				   
		 </div>
	</section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>