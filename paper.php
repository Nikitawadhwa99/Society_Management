<?php
    $sDbHost = 'localhost';
	$sDbUser = 'root';
	$sDbPwd = '';
	$sDbName = 'demo';

	$dbConn = mysqli_connect ($sDbHost,$sDbUser ,$sDbPwd,$sDbName);
	session_start();
	
	if(isset($_POST['submit']))
	{
		$email_Id=$_POST['Email_Id'];
		$password=$_POST['password'];
		$query=mysqli_query($dbConn, "select * from demo_table where Email_Id='$email_Id' and password='$password'");
		$count=mysqli_num_rows($query);
		if($count==0)
		{
			echo "<script>alert('incorrect email and password')</script>";
		}
		else
		{
			echo "<script>alert('login successful')</script>";
		}
	}
?>
<html>
   <body>
      <form method="post">
	    <input type="text" name="Email_Id"/>
		<input type="text" name="password"/>
	    <input type="submit" name="submit" value="submit"/>
	  </form>
   </body>
</html>