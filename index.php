<?php
   
    include('config.php');
	session_start();
    if(isset($_POST['submit']))
		{		
			$Email_Id=$_POST['Email_Id'];
			$password = $_POST['password'];
			   
			$search_query=mysqli_query($dbConn,"select * from register where Email_Id='$Email_Id' and password='$password'");
			$_SESSION['Email_Id']=$Email_Id;	
				
			if($Email_Id=="Admin@gmail.com" && $password=="admin")
			{
			   header("Location: admin_page.php");
			}
			elseif(mysqli_num_rows($search_query) ==1)
			{
				header("Location: user_page.php");
			}
			elseif($Email_Id=="gatekeeper@gmail.com" && $password=="gatekeeper")
			{
			   header("Location: gatekeeper.php");
			}
			else
			{
			  echo "<script>alert('incorrect')</script>";
			}		
		}
?>


<html>
<head>
</head>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<div class="header">
  <h1>SOCIETY MANAGEMENT SYSTEM</h1>
</div>


<div class="row">
   <div class="col-3 col-s-3 menu">
    <ul>
      <li><p style="color:black;">The perfect solution to make living in an society complex a pleasant and convenient experience for the residents, the managing committee members, and the security staff.</p></li>
   </ul>
	 <div class="aside">
	 <form action="" method="POST">
		 <h2 style="color:black;">Login:</h2>
          <table>	
			<label for="email">Email:</label><br>
			<input type="email" name="Email_Id" id="email"  placeholder="Enter your Email_ID" required / ><br><br>
			<label for="password">Password:</label><br>
			<input type="password" placeholder="Password" id="password" name="password" required / ><br><br>
			<input type="submit" id="submit" name="submit" value="Login"><br><br><br>
		  </table>
	 </form>
  </div>
  </div>

  <div>
   <img src="images/app.png" id="img"/>
  </div>
</div>

<div class="footer">
  <p>Copyright 2019 | All Rights Reserved</p>
</div>

</body>
</html>
