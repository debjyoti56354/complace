<?php 
include_once('common/header.php');
session_start();


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
				<a href="index.php"><img src="Assets/images/bo.png" alt="" title="Academic"></a>
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
										<div class="content-bottom">
							<h1>Login Form</h1> 
							 </div>
									<div class="login-right">
										<a href="login_company.php"><button type="button" class="btn btn-info btn-circle btn-xl">COMPANY</button></a>
<a href="login_student.php" ><button type="button" class="btn btn-warning btn-circle btn-x2">STUDENT</button></a>
									</div>
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
						<li><a href="https:www.facebook.com"><i></i></a></li>
						<li><a href="https:www.google.com#q=complace" target="_blank"><i class="ic"></i></a></li>
						<li><a href="https:www.instagram.com""><i class="ic1"></i></a></li>
						<li><a href="https:www.youtube.com/results?search_query=campus+placement""><i class="ic2"></i></a></li>
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