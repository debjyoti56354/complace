<?php 
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
	
	if(isset($_POST['submit']))
{ 
 $query = "SELECT * FROM company WHERE Email='" . $_POST["email"] . "' ";
 $result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
if($count > 0)
{
$row=mysqli_fetch_array($result);

			
			//unset($_POST);
			
			
                $to = "".$row['Email']."";
				$subject = "Please find your Password";
				$txt = "

We Welcome You

This email contains Registered Supplier Details!
Name             	".$row['name']."
Email			 	".$row['Email']."
Password		 	".$row['password']."
Date Joined		 	".$row['dt_created']."

				
				HOPE YOU HAVE A GOOD TIME!!!
				
				"
				;
			$headers = "From: dasjayatid@gmail.com" . "\r\n" .
						"CC: somebodyelse@example.com";
			
				$mail= mail($to,$subject,$txt,$headers);
				if($mail){
					$message = "You have registered successfully!";
				
			//header('Location:supplier_manage.php');
			echo "<script>location='http://jayatitest.forexwebsolutions.com/index_supplier.php'</script>";
				}
				else{
					echo "Mail Sending Failed";
				}
		}
 
 
 else{
	 echo "The following email doesnt exist";
	 
 }
} 
?>
<style>

.container-fluid{
    padding:0 !important;
}
.col-xs-4{
    background:rgba(157,52,99,0.7);    
}

.btn-circle.btn-xl {
  width: 150px;
  height: 150px;
  padding: 10px 10px;
  font-size: 30px;
  line-height: 1.33;
  border-radius: 150px;
  margin:10% 0 0 10%;
  
  }

.btn-circle.btn-x2{
  width: 150px;
  height: 150px;
  padding: 10px 10px;
  font-size: 30px;
  line-height: 1.33;
  border-radius: 150px;
  margin:10% 0% 0% 20%;
  
  }

  body { 
    background-image: url('images/regn.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
	 background-size: cover;
	
}
</style>
<body>
<head>
<div class="header">
	<div class="container">
		<div class="head-top">
			<div class="logo">
				<a href="index.html"><img src="images/bo.png" alt="" title="Academic"></a>
			</div>
			<div class="login">
				<ul class="nav-login">
					<li><a href="#" data-toggle="modal" data-target="#myModal1">Login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal2">Signup</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
		<!-- login -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
							
									<div class="login-right">
										<form action="#" method="post">
											<h3>Signin with your account </h3>
											<input type="text" value="" name="user_name" onfocus="this.value = '';" placeholder="Enter your User Name" required="">	
											<input type="text" value="Enter your mobile number or Email" name=" Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	

											<h4><a href="#" data-toggle="modal" data-target="#myModal">Forgot password
											<!-- Modal -->
											  <div class="modal fade" id="myModal" role="dialog">
												<div class="modal-dialog">
												
												  <!-- Modal content-->
												  <div class="modal-content">
													<div class="modal-header">
													  <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
													  <h3 class="modal-title">Forgot Your Password!!!</h3>
													</div>
													<div class="modal-body">
													 <div class="login-right">
																<div class="message text-center"><?php if(isset($message)) echo $message; ?></div>
																	  <form class="login-form" action="" method="POST">        
																		  <input type="email" value="" class="form" name="email" onfocus="this.value = '';" placeholder="EMAIL" required="">	
																		<button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">CLICK</button><br/>																		
																	  </form>
																	<div class="text-right">
																		  
																	</div>
													</div>
													</div>
												  </div>
												  
												</div>
											  </div>
											
											</a></h4>
											<div class="single-bottom">
												<input type="radio"  id="brand" value="">
												<label for="brand" style="color:#696969"><span></span>Company</label>
												<input type="radio"  id="brand" value="">
												<label for="brand" style="color:#696969"><span></span>Student</label>
											</div></br>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN" >
										</form>
									</div>
									
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->
			<!-- signup -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
							<div class="content-bottom">
							<h1>Registration Form</h1> 
							 </div>
									<div class="login-right">
										<a href="company_regn.php" target="_blank"><button type="button" class="btn btn-info btn-circle btn-xl">COMPANY</button></a>
<a href="student_regn.php" target="_blank"><button type="button" class="btn btn-warning btn-circle btn-x2">STUDENT</button></a>
									</div>
								
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
		<div class="banner">
			<div class="container">
				<div class="banner-text">
					<h2>CAMPLACE</h2>
					<p> Talent hits a target no one else can hit,<br/>genius hits a target no one else can see<br/>-Aurthur Schopenhauer</p>
				</div>
				<p class="banner-text1">Choose a Job you love, and you will never have to work a day in your life</p>
			</div>
		</div>
		<div class="nav-top">
			<div class="container">
				<div class="nav1">
					<div class="navbar1">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
		 
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav cl-effect-8">
								<li ><a class="active" href="index.php">Home </a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Job's</a></li>
								<li><a href="contact.php">Contact</a></li>	
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
					<!-- start search-->
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div> 
			</div> 
		</div> 
</div> 

	<div class="content">
	<div class="container">
	
					
					<div class="clearfix"></div>
					</div>
			</div>
		</div>
</head>
</body>