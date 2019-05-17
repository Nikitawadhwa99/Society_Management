<?php
     include('config.php');
	 session_start();
	 $Email = $_SESSION['Email_Id'];		
	 $dd = date("Y/m/d");
	
	 if(!$Email)
		{
		  header("Location:index.php");
		}
		
	if(isset($_POST['submit']))
	   {
		 $Name=$_POST['Name'];
		 $Staff_for = $_POST['Staff_for'];
		 $Date = date("Y/m/d"); 
		 $Check_in = $_POST['Check_in'];
		 $Check_out = $_POST['Check_out'];
	
		 if($Name!=''||  $Staff_for!=''|| $Date!= '' || $Check_in != '' || $Check_out != '')
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into staff_entry(Name, Staff_for, Date, Check_in, Check_out) values ('$Name','$Staff_for', '$Date', '$Check_in', '$Check_out')");	  
		       header("Location: gatekeeper.php");
		   }
		  else
		   {	    
			   echo "failed";    
		   }   
	   }
	   
	   if(isset($_POST['submitt']))
	   {
		 $Name=$_POST['Name'];
		 $Mobile_no=$_POST['Mobile_no'];
		 $Going_In = $_POST['Going_In'];
		 $Date =date("Y/m/d");
		 $Check_in = $_POST['Check_in'];
		 $Check_out = $_POST['Check_out'];
	
		 if($Name!=''||  $Mobile_no!=''|| $Going_In!=''|| $Date!='' || $Check_in != '' || $Check_out != '')
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into guest_entry(Name, Mobile_no, Going_In, Date, Check_in, Check_out) values ('$Name','$Mobile_no','$Going_In', '$Date', '$Check_in' , '$Check_out')");	  
		       header("Location: gatekeeper.php");
		   }
		  else
		   {	    
			   echo "failed";    
		   }   
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
			 <div id="car">
			  <form method="post">
				<h2 style="color:black;">Staff Entry:</h2>  
                    <label style="color:black;">Date:</label>
					<label style="color:black;"><?php echo $dd; ?></label>
					<br><br>
					<label style="color:black;">Name:</label>&nbsp;&emsp;&emsp;
				    <Select  name="Name" id="name" required />
					<option disabled selected value>--Select--</option>
					
					
						 <?php
							$result = mysqli_query($dbConn,"SELECT * FROM staff_entry");
							while($row = mysqli_fetch_array($result))
							  {
								echo  '<option>' . $row['Name'] . '</option>';
							  }		
						 ?>
					</Select><br><br>	 
						
					<label style="color:black;">Staff_for:</label>&emsp;
				    <Select  name="Staff_for" id="staff" required />
					<option disabled selected value>--Select--</option>
					
					
						 <?php
							$result = mysqli_query($dbConn,"SELECT * FROM staff_entry");
							while($row = mysqli_fetch_array($result))
							  {
								echo  '<option>' . $row['Staff_for'] . '</option>';
							  }		
						 ?>
						 
						 
					</Select><br><br>	
						<label style="color:black;">Check_in:</label><span id="Check_out_error"></span>&ensp;
						<input type="time" name="Check_in" id="Check_in" placeholder="Check_in time" required / ><br><br>
	
					  <label style="color:black;">Check_out:</label><span id="Check_out_error"></span>
						<input type="time" name="Check_out" id="Check_out" placeholder="Check_out time" >
					
									
									
	            <br><br><br>
					
							  
						<input type="submit" id="submit" name="submit" value="Save">
						<a href="staff_list.php"><div class="button">Staff_list</div></a>
						<a href="logout.php"><div class="button">Logout</div></a><br>
					
				
	          </div>
			  </form>

			  <div id="cardd">
			        <form method="post">
				       <h2 style="color:black;">Guest Entry:</h2>  
					 <label style="color:black;">Date:</label>
					 <label style="color:black;"><?php echo $dd; ?></label>
					
					<table>
					<tr>	 
					<td><br><label style="color:black;">Visiting Name:</label>
				    <Select  name="Name" id="name" required />
					<option disabled selected value>--Select--</option>
					
					
						 <?php
							$result = mysqli_query($dbConn,"SELECT * FROM register");
							while($row = mysqli_fetch_array($result))
							  {
								echo  '<option>' . $row['Name'] . '</option>';
							  }		
						 ?>
					</Select></td>
	
	                </tr>
					
						<td><br><label>Mobile no:</label><span id="mobile_error"></span><br>
						<input type="text" name="Mobile_no" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="mobile"  placeholder="Enter your mobile number" required / ><br><br>
					
						<td><br><label>Visitor Name:</label><span id="member_name_error"></span><br>
						<input type="text" name="Going_In" pattern="[a-zA-Z ]*$" title="please enter valid name" id="Going_In"  placeholder="Enter name " required / ><br><br>
							  
					</tr>
					
						<td><label>Check_in:</label><span id="Check_in_error"></span><br>
						<input type="time" name="Check_in" id="Check_in" title="Check_oin time" required / ><br><br>
					
					   
					   <td><label>Check_out:</label><span id="Check_out_error"></span><br>
						<input type="time" name="Check_out" id="Check_out" title="Check_out time"><br><br>
						
					</tr>
						</table>	  
						<td><input type="submit" id="submit" name="submitt" value="Save"></td>
						<td><a href="guest_list.php"><div class="button">Guest_list</div></a></td>
						
					 </form>
			  </div>
			  </div>
			  
			  <div>
   <img src="images/guest.png" id="guest_img"/>
  </div>
</div>
	    </section>
	<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>