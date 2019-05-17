<?php
    session_start();
    include('config.php');
	if(isset($_POST['submit']))
	   {
		 $Name=$_POST['Name'];
		 $Mobile=$_POST['Mobile'];
		 $Staff_for = $_POST['Staff_for'];
		 $Check_out = $_POST['Check_out'];
	
		 if($Name!=''||  $Mobile!=''|| $Staff_for!=''|| $Check_out != '')
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into staff_entry(Name, Mobile, Staff_for,Check_out) values ('$Name','$Mobile','$Staff_for', '$Check_out')");	  
		       header("Location: index.php");
		   }
		  else
		   {	    
			   echo "failed";    
		   }   
	   }
	   
?>


<html>
  <body id="homepage">
      <link rel="stylesheet" href="css/style.css" type="text/css"/>
   <div class="header">
  <h1>SOCIETY MANAGEMENT SYSTEM</h1>
</div>
             <div class="guest">
			  <form method="post">
				<h2 style="color:black;">Staff Entry:</h2>     
	             <table>
					<tr>	 
						<td><label>Name:</label><span id="name_error"></span><br>
						<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="name" placeholder="Enter your name" required / ><br><br>
	
						<td><label>Mobile no:</label><span id="mobile_error"></span><br>
						<input type="text" name="Mobile" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="mobile"  placeholder="Enter your mobile number" required / ><br><br>
					</tr>
					<tr>
					<td><label>Staff_for:</label>
				    <Select  name="Staff_for" id="staff_for" required />
					<option disabled selected value>--Select--</option><br><br>
					
					
						 <?php
							$result = mysqli_query($dbConn,"SELECT * FROM staff_entry");
							while($row = mysqli_fetch_array($result))
							  {
								echo  '<option>' . $row['Staff_for'] . '</option>';
							  }		
						 ?>
						 
						 
					</Select></td>
						
						<td><label>Check_out:</label><span id="Check_out_error"></span><br>
						<input type="time" name="Check_out" id="Check_out" placeholder="Check_out time" required / ><br><br>
					</tr>
					<tr>		  
						<td><input type="submit" id="submit" name="submit" value="Save"><br>
						</table>
						<p><font size="4px" color="black">Go to <a href="index.php" style="color:black;" >homepage</a><br><br>
						<b>Note:You must fill all the information correctly,this is due to the safety purpose.</font></p></b>
	          </div>
			  </form>
			  <div>
   <img src="images/guest.png" id="guest_img"/>
  </div>
</div>
            
  <div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>
