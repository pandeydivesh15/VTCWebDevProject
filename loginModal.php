<?php 
    	
		if($_SERVER["REQUEST_METHOD"]=="POST" AND $_POST['email'])  
		{
			require 'createConnection.php';   //Establish connection
		
			$sql="SELECT Email,Password FROM persons;";
			$data=mysqli_query($conn,$sql) or die();
			$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);
			echo "<br>";
			
			while ($rowForCheck) 
			{
				$tempEmail=$rowForCheck[0];
				$tempPwd=$rowForCheck[1];
				if ($tempPwd==$_POST['passwd'] AND $tempEmail==$_POST['email'])
				{
					session_start();
					$_SESSION['email']=$tempEmail;
					$conn->close();
					header('location:home.php');
					return;
				}
				$rowForCheck=mysqli_fetch_array($data, MYSQLI_NUM);

			}
			header('location:error.php');

			$conn->close();		
		}
?>
<!--Modal for login-->
	<div id="logInId" class="modal custom1 fade" role="dialog">
		<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 align="center" class="modal-title"><b style="font:serif;color: rgb(51, 102, 204);">LOGIN</b></h4>
		      </div>
		      <div class="modal-body">
		        <p>Don't have a account. <a href="signup.php">Register</a></p>
		        <form role="form" action="" method="post">
		        <div class="form-group">
		        	<input class="form-control" required="True" type="text" name="email" placeholder="Email"></input></div>
		        <div class="form-group">
		        	<input class="form-control" required="True" type="password" name="passwd" placeholder="Password"></input></div>
		        <input class="btn btn-primary" type="submit" value="Login"></input>
		        
		        </form>
		      </div>
		      <div class="modal-footer" id="modalFoot">
		      	<div class="pull-left">
		        <button type="button" class="btn btn-primary btn-sm"><a style="color: white;" href="signup.php">Forgot Password</a></button>
		        </div>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		</div>
	</div>
	 