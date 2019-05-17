<?php
      
	session_start();
	include('config.php');
	$Name;
	$mobile;
					$Email = $_SESSION['Email_Id'];	
					$result = mysqli_query($dbConn,"SELECT * FROM register WHERE Email_Id='$Email'");
          			while($row = mysqli_fetch_array($result))
					  {
						$Name=$row['Name'];
						$mobile=$row['Mobile_no'];
					  }
							
	$pay;
	   if(isset($_POST['submit']))
	   {		  
		  $_SESSION['Name']=$Name;
          $_SESSION['Mobile_no']=$mobile;
		  $_SESSION['Date']=$_POST['Date'];
		  $_SESSION['Plot_no']=$_POST['Plot_no']; 
		  $_SESSION['Payment_mode']=$_POST['Payment_mode'];	
		  
          $_SESSION['Plans']=$_POST['Plans'];

		  if($_POST['Plans'] == "1 month")
		  {
			  $pay="1000";
		  }
		   elseif($_POST['Plans'] == "6 month")
		  {
			  $pay="6000";
		  }
		  else
		  {
			  $pay="9000";
		  }
		  $_SESSION['Payment']=$pay;	
		   header("Location: confirmation_payment.php");
			  
	   }			
?>


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
		    <form method="post">
				<h2 align="center" style="color:black;">Pay Maintenance:</h2>     
	             <table align="center">
		
					<tr>	 
						
						<td><label>Date:</label><span id="mobile_error"></span><br>
						<input type="date" name="Date" title="please enter valid date" id="mobile"  required / ><br><br>
					
					    <td><label>&emsp;&emsp;Plot no:</label><span id="plot_error"></span><br>
						&emsp;&emsp;<input type="text" name="Plot_no" title="please enter valid plot_no" id="plot" placeholder="Enter your plot number" required / ><br><br>
					</tr>
					
					<tr>
						<td><label>Payment mode:</label>
						 <br><Select name="Payment_mode" id="pay" required>
							<option disabled selected value>--Select--</option>
							<option value="Cash">Cash</option>
							<option value="Debit card">Debit card</option>
						 </Select><br><br>  
						
						<td><label>&emsp;&emsp;Plans Duration:</label>
						 <br>&emsp;&emsp;<Select name="Plans" id="plans" required>
							<option disabled selected value>--Select--</option>
							<option value="1 month">1 month</option>
							<option value="6 month">6 month</option>
							<option value="1 year">1 Year</option>
						 </Select><br><br>  
						 
						 
					</tr>
					<tr>
					</table>
					    <p align="center"><b>Note:</b> For 1 month maintenance is 1000rs<br>&nbsp;&nbsp;&nbsp;&emsp;&emsp;For 6 month maintenance is 5500rs<br>&nbsp;&nbsp;&nbsp;&emsp;&emsp;For 1 year maintenance is 11000rs</p>
						<p align="center"><input type="submit" value="Pay" name="submit"/></p>
	          </div>
			  </table>
			  </form>
		</section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>