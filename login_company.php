<?php
include_once('common/config.php');
include_once('common/header.php');
session_start();
 
if( count($_POST) > 0)
{
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value)
	{
		if(empty($_POST[$key]))
		{
			$message = ucwords($key) . "All Field are Mandatory to be filled";
			break;
		}
	}
	/* Email Validation */
	if(!isset($message))
	{
		if(!filter_var ($_POST["Email"], FILTER_VALIDATE_EMAIL))
		{
			$message = "Input a Valid Email Address";
		}
	}
	
	if(!isset($message))
	{
		require_once('common/config.php');
		$name=$_POST["user_name"];
		$email=$_POST["Email"];
		$password=$_POST["Password"];
		
		
		 $sql= "SELECT * FROM company WHERE Company_Username='$name' and Email='$email' and Password='$password'";
		$result= mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$role = $row['Role'];
      $id = $row['Id'];
		$name = $row['Company_Username'];
		$count = mysqli_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		 if($count == 1) 
		 {
		$_SESSION['user_id'] = $row['Id'];
		$_SESSION['user_name'] = $row['Company_Username'];
		$_SESSION['user_role'] = $row['Role'];
		
		/*if($row==2)
		{*/
		
      header("location: company_home.php");
		}
		else 
		{
			
				$message = "Your Login Name or Password is invalid";
		}
	}
	}
	
	
?>

<html>

<style>
.jumbotron{
    position: relative;
    padding:0 !important;
    margin-top:70px !important;
    background: #fff;
    margin-top: 23px;
    text-align:center;
    margin-bottom: 0 !important;
}
.container-fluid{
    padding:0 !important;
}


.btn-circle.btn-xl {
  width: 300px;
  height: 300px;
  padding: 10px 16px;
  font-size: 30px;
  line-height: 1.33;
  border-radius: 150px;
  margin:10% 0 0 20%;
  
  }

.btn-circle.btn-x2{
  width: 300px;
  height: 300px;
  padding: 10px 16px;
  font-size: 30px;
  line-height: 1.33;
  border-radius: 150px;
  margin:10% 0% 0% 30%;
  
  }

  body { 
    background-image: url('Assets/images/f.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
	 background-size: cover;
	
}
  
  
   form{
		margin-left: 10%;
		
		width: 80%;
		}
  
  

</style>




</head>
<body>

<div class="jumbotron">
<h1>Lets Login!!!</h1>

</div>
<br><br>


<!-- Form Name -->
<center><legend>Company Login</legend></center>


<!-- login -->
							
							<div class="login-grids">
							<div class="col-sm-9">
									<div class="login-right">
										<form action="#" method="post">
											<h3>Signin with your account </h3>
											<input type="text" value="" name="user_name" onfocus="this.value = '';" placeholder="Enter your User Name" required="">	
											<input type="text" value="Enter your mobile number or Email" name=" Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="forgot_company.php">Forgot password</a></h4>
											<div class="single-bottom" style="margin:20px">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN" >
										</form>
										
									</div>
									
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
								</div>
							</div>
							</center>
							


 </body>
 </html>










