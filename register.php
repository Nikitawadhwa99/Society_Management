<?php
session_start();
    include('config.php');
	if(isset($_POST['submit']))
	   {
		 $Name=$_POST['Name'];
		 $Address=$_POST['Address'];
		 $Mobile_no=$_POST['Mobile_no'];
		 $Email_Id = $_POST['Email_Id'];
		 $Usertype = $_POST['Usertype'];
		 $Hometype = $_POST['Hometype'];
		 $password = $_POST['password'];
		 $confirm_password= $_POST['confirm_password'];
	
		 if($Usertype!=''|| $Name!=''|| $Address!=''|| $Mobile_no!=''|| $Email_Id!=''|| $Hometype!=''|| $password!=''|| $confirm_password='')
		   {	   
			   $search_query=mysqli_query($dbConn, "insert into register(Name, Address, Mobile_no, Email_Id, Usertype, Hometype, password, confirm_password) values ('$Name','$Address','$Mobile_no','$Email_Id', '$Usertype', '$Hometype', '$password','$confirm_password')");	  
		       header("Location: admin_page.php");
		   }
		
		  else
		   {	    
			   echo "failed";    
		   }   
	   }
?>


<html>
	<head>
		<script>
			function valid()
			{
			if(document.registration.password.value!= document.registration.confirm_password.value)
			{
			alert("Password and Re-Type Password Field do not match  !!");
			document.registration.confirm_password.focus();
			return false;
			}
			return true;
			}
		</script>
	</head>
  <body id="homepage">
      <link rel="stylesheet" href="css/style.css" type="text/css"/>
   <div class="header">
  <h1>SOCIETY MANAGEMENT SYSTEM</h1>
</div>
        <div class="regg">
            <form method="post"  name="registration" onSubmit="return valid();">
				<h2 align="left" style="color:black;">Register new member:</h2><br><br>    
	             <table>
					<tr>	 
					   <td><label>Usertype:</label>
						 <Select name="Usertype" id="Usertype" required>
							<option disabled selected value>--Select--</option>
							<option value="Renter">Renter</option>
							<option value="Owner">Owner</option>
						 </Select><br><br>
						 
						 <td><label>Hometype:</label>
							  <Select  name="Hometype" id="Hometype" required >
								<option disabled selected value>--Select--</option>
								<option value="2BHK">2bhk</option>
								<option value="3BHK">3bhk</option>
							  </Select><br><br>
					</tr>
					<tr>
						<td><label>Name:</label><span id="name_error"></span><br>
						<input type="text" name="Name" pattern="[a-zA-Z ]*$" title="please enter valid name" id="name" placeholder="Enter your name" required / ><br><br>
						  
						<td><label>Address:</label><span id="address_error"></span><br>
						<input type="text" name="Address"  title="please enter valid address" id="address" placeholder="Enter your address" required / ><br><br>		   
					</tr>
					<tr>	
						<td><label>Mobile no:</label><span id="mobile_error"></span><br>
						<input type="text" name="Mobile_no" pattern = "[0-9]{10}" title="please enter valid mobile_number" id="mobile"  placeholder="Enter your mobile number" required / ><br><br>
							
						<td><label>Email:</label><span id="email_error"></span><br>
						<input type="email" name="Email_Id" id="email"  placeholder="Enter your Email ID" required / ><br><br>
					</tr>
					<tr>		  
						<td><label>Password:</label><span id="password_error"></span><br>
						<input type="Password" name="password" id="password" placeholder="Enter your password" required / ><br><br>
						
						<td><label>Confirm Password:</label><span id="confirm_password_error"></span><br>
						<input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter your password" required / ><br><br>
					</tr>
					<tr>		  
						<td><input type="submit" id="submit" name="submit" value="Add member"><br>
		          </table>
            </form>
          </div>
		  <div>
   <img src="images/app.png" id="regg_img"/>
  </div>
</div>
  <div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>
  </body>
</html>
