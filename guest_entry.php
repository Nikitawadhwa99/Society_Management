<?php
    session_start();
    include('config.php');
	if(isset($_POST['submit']))
	   {
		 $Name=$_POST['Name'];
		 $Mobile_no=$_POST['Mobile_no'];
		 $Going_In = $_POST['Going_In'];
		 $Check_out = $_POST['Check_out'];
	
		 if($Name!=''||  $Mobile_no!=''|| $Going_In!=''|| $Check_out != '')
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into guest_entry(Name, Mobile_no, Going_In,Check_out) values ('$Name','$Mobile_no','$Going_In', '$Check_out')");	  
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
				<h2 style="color:black;">Guest Entry:</h2>     
	             <table>
					<tr>	 
						<td><label>Visitor Name:</label><span id="name_error"></span><br>
						<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="name" placeholder="Enter your name" required / ><br><br>
	
						<td><label>Mobile no:</label><span id="mobile_error"></span><br>
						<input type="text" name="Mobile_no" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="mobile"  placeholder="Enter your mobile number" required / ><br><br>
					</tr>
					<tr>
						<td><label>Visiting Name:</label><span id="member_name_error"></span><br>
						<input type="text" name="Going_In" pattern="[a-zA-Z ]*$" title="please enter valid name" id="Going_In"  placeholder="Enter name " required / ><br><br>
							  
						
						<td><label>Check_in:</label><span id="Check_in_error"></span><br>
						<input type="time" name="Check_in" id="Check_in" title="Check_oin time" required / ><br><br>
					</tr>
					
					<tr>
					   
					   <td><label>Check_out:</label><span id="Check_out_error"></span><br>
						<input type="time" name="Check_out" id="Check_out" title="Check_out time" required / ><br><br>
						
					</tr>
					<tr>		  
						<td><input type="submit" id="submit" name="submit" value="Save"><br>
						</table>
						<p><font size="4px" color="black">Go to <a href="index.php" style="color:black;">homepage</a><br><br>
						<b>Note:You must fill all the information correctly,this is due to the safety purpose.</font></p></b>
	          </div>
			  </table>
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
