<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/company_side.php');

	//$chan= $_SESSION['user_id'];
$sql="SELECT  *  FROM  company WHERE Company_Username= '".$_SESSION['user_name']."'";
$result_1=  mysqli_query($conn,$sql);
$swl="SELECT * FROM upload_company WHERE Company_Username= '".$_SESSION['user_name']."'";
$result_2=  mysqli_query($conn,$swl);
$result_3 = mysqli_fetch_assoc($result_2);
?>
<html>
<style>

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}	
}
</style>

<body>
<div class="content">

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				<?php 
				$file = $result_3['img'] ;
					if($file == '' || $file == null || empty($file) || !($file))
					{
						
						print '<img src="Assets/images/profile.png" class="img-responsive" alt="">';
						
					}
					else
					{?>
						<img src="Assets/company_port/<?php echo $result_3['img'];?>" class="img-responsive" alt="">
					<?php
					}
			?>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['user_name']?>
					</div>
					<?php 
	while($result = mysqli_fetch_assoc($result_1)) 
	{
		?>
					<div class="profile-usertitle-job">
						<?php echo $result['Designation'];?>
					</div>

				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
										<form action="upload.php" method="POST" class="form-inline" role="form" enctype="multipart/form-data">			
        <input type="hidden" class="form-control" name="name" value="<?php echo $_SESSION['user_name']?>"></td>
		<center><input type="file" name="file" class="btn btn-success btn-sm"/></center>
						<button type="submit" class="btn btn-danger btn-sm">Upload Image</button>
						
		
</form>

					
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="company_portfolio_edit.php" target="_blank">
							<i class="glyphicon glyphicon-user"></i>
							Edit Account </a>
						</li>
						
						<li>
							<a href="change_password_company.php">
							<i class="glyphicon glyphicon-flag"></i>
							Change Password  </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <div class="container">
	<h1>Welcome  <?php  echo $_SESSION['user_name'];  ?>,</h1>
	<strong><p>  You  are  now  logged  in.  you  can  logout  by  clicking  on  logout  link  given  above.</strong></p>
	 <table class="table-striped" style="margin:50px"> <tbody>
	
      <tr>
        <th>Company_Username</th><td><?php echo $result['Company_Username'];?></td></tr>
		<tr><th>Company_Name</th><td><?php echo $result['Company_name'];?></td></tr>
		<tr><th>Company_Id</th><td><?php echo $result['Company_Id'];?></td></tr>
		<tr><th>HR_Username</th><td><?php echo $result['HR_Username'];?></td></tr>
		<tr><th>Email</th><td><?php echo $result['Email'];?></td></tr>
		<tr><th>Branch</th><td><?php echo $result['Branch'];?></td></tr>
		<tr><th>Contact</th><td><?php echo $result['Contact'];?></td></tr>
		<tr><th>Year Of Joining</th><td><?php echo $result['yoe'];?></td></tr>
		
      <?php } ?>
    </tbody></table>
            </div>
		</div>
	</div>
</div>
<center>

</center>
<br>
<br>
</div>
</div>
</body>
<?php include_once('common/footer.php')?>