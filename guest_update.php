<?php
     include('config.php');
	 session_start();
	 $Email = $_SESSION['Email_Id'];		
			
	 if(!$Email)
		{
		  header("Location:index.php");
		}
		
		
		
		
		
		
		if (isset($_POST['submit']))
		{
			
			if (isset($_GET['id']) && is_numeric($_GET['id']))
			{
				$id = $_GET['id'];
			
				$Check_out = mysqli_real_escape_string($dbConn, $_POST['Check_out']);
				
				mysqli_query($dbConn, "UPDATE guest_entry SET Check_out='$Check_out'  WHERE Id='$id'")
				or die(mysqli_error());
				header("Location: guest_list.php");
			
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
			 <form action="" method="post">
<input type="hidden" name="Id" value="<?php echo $Id; ?>"/>
<table border="1">
	<tr>
	<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
	</tr>
	<tr>
	<td width="179"><b><font color='#663300'>Check_out<em>*</em></font></b></td>
	<td><label>
	<input type="time" name="Check_out" title="please enter valid mobile_number" required />
	</label></td>
	</tr>

	<tr align="Right">
	<td colspan="2"><label>
	<input type="submit" name="submit" value="Edit Records">
	</label></td>
</tr>
</table>
</form> 
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