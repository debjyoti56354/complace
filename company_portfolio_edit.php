<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/company_side.php');
$sql="SELECT  *  FROM  company WHERE Company_Username= '".$_SESSION['user_name']."'";
$result_1=  mysqli_query($conn,$sql);
$swl="SELECT * FROM upload_company WHERE Company_Username= '".$_SESSION['user_name']."'";
$result_2=  mysqli_query($conn,$swl);
$result_3 = mysqli_fetch_assoc($result_2);
?>
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
						<?php }
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
        <input type="hidden" placeholder="Student_Name" class="form-control" name="student_name" value="<?php echo $_SESSION['user_name']?>"></td>
		<center><input type="file" name="file" class="btn btn-success btn-sm"/></center>
					<button type="submit" class="btn btn-danger btn-sm">Upload Image</button>	
</form>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li class="active">
							<a href="company_portfolio_edit.php" target="_blank">
							<i class="glyphicon glyphicon-user"></i>
							Edit Account </a>
						</li>
						
						<li>
							<a href="change_password_company.php">
							<i class="glyphicon glyphicon-flag"></i>
							Change Password</a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <div class="form-group" style="margin:20px">
	<h1>Update Details  <?php  echo $_SESSION['user_name'];  ?>,</h1>
	<!--<strong><p>  You  are  now  logged  in.  you  can  logout  by  clicking  on  logout  link  given  above.</strong></p>-->
	<div class="container" style="margin:20px">
	 <form action="form_update_portfolio.php" method = "POST">    
  

                    <div class="form-group">
			<label>Company_Username</label>
              <input type="text" name="user_name" class="form-control" style="width:450px" placeholder="Username" value="<?php echo $result['Company_Username']?>" autofocus>
            </div>
			 <div class="form-group">
                <label>Company_Name</label>
                <input type="cid" class="form-control" name="cn" style="width:450px"  value="<?php echo $result['Company_name']?>" placeholder="Email Address">
            </div>
			<div class="form-group">
                <label>Company_Id</label>
                <input type="text" class="form-control" name="cid" style="width:450px"  value="<?php echo $result['Company_Id']?>" placeholder="Company_Id">
            </div>
			<div class="form-group">
               <label>HR_Username</label>
                <input type="text" class="form-control" name="hrn" style="width:450px"  value="<?php echo $result['HR_Username']?>" placeholder="Country">
            </div>
			<div class="form-group">
             <label>Email</label>
                <input type="text" class="form-control" name="email" style="width:450px"  placeholder="Phone" value="<?php echo $result['Email']?>">
            </div>
			<div class="form-group">
              <label>Branch</label>
                <input type="text" class="form-control" name="branch" style="width:450px"  placeholder="Phone" value="<?php echo $result['Branch']?>">
            </div>
			<div class="form-group">
              <label>Contact</label>
                <input type="text" class="form-control" name="cno" style="width:450px"  placeholder="Phone" value="<?php echo $result['Contact']?>">
            </div>
			<div class="form-group">
              <label>Year Of Joining</label>
                <input type="text" class="form-control" name="yoe" style="width:450px"  placeholder="Phone" value="<?php echo $result['yoe']?>">
            </div>
			
            
            <button class="btn btn-info btn-lg btn-block"  style="width:450px"  type="submit">Update</button>
           
        </div>
  <?php }?>
      </form>
	  </div>
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