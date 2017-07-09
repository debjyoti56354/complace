<?php 
include_once('common/header.php');
session_start(); ?>
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
					<li><a href="#" data-toggle="modal" data-target="#myModal1"><?php echo $_SESSION['user_name']?></a></li>
					<li><a href="sign_out.php">LogOut</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
				<div class="banner">
			<div class="container">
				<div class="banner-text">
					<h2>CAMPLACE</h2>
					<p>Talent hits a target no one else can hit,<br/>genius hits a target no one else can see<br/>-Aurthur Schopenhauer</p>
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
								<li ><a class="active" href="company_home.php">Home </a></li>
								<li><a href="about_c.php">About</a></li>
								<li><a href="company_portfolio.php">Portfolio</a></li>
								<li><a href="company_jobs_index.php">JOB'S</a></li>
								<li><a href="contact_c.php">Contact</a></li>	
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