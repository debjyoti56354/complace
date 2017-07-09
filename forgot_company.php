<?php
include_once('common/config.php');
include_once('common/header.php');
session_start();
 
	if(isset($_POST['submit']))
{ 
 $query = "SELECT * FROM company WHERE Email='" . $_POST["email"] . "' ";
 $result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
if($count > 0)
{
$row=mysqli_fetch_array($result);

			
			//unset($_POST);
			
			
                $to = "".$row['email']."";
				$subject = "Please find your Password";
				$txt = "

We Welcome You

This email contains Registered Supplier Details!
Name             	".$row['Company_Username']."
Email			 	".$row['email']."
Password		 	".$row['password']."
Reporting HR		".$row['HR_Username']."

				
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
<h1>Forgot Password!!!</h1>

</div>
<br><br>


<!-- Form Name -->
<center><legend>Company Login</legend></center>


<!-- login -->
							
							<div class="login-grids">
							<div class="col-sm-9">
									<div class="login-right">
								<form action="#" method="post">
								<input type="email" value="" class="form-control" name="email" onfocus="this.value = '';" placeholder="EMAIL" required="">	
								<div style="margin:20px">
								<button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">CLICK</button><br/>					
								</div>
								</form>	
									</div>
									
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
								</div>
							</div>
							</center>
							


 </body>
 </html>










