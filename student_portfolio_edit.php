<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/students_side.php');
$sql="SELECT  *  FROM  students WHERE username= '".$_SESSION['user_name']."'";
$result_1=  mysqli_query($conn,$sql);
$swl="SELECT * FROM upload_student WHERE username= '".$_SESSION['user_name']."'";
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
						<?php echo $result['qual'];?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
				<form action="upload_student.php" method="POST" class="form-inline" role="form" enctype="multipart/form-data">
<input type="hidden" placeholder="Student_Name" class="form-control" name="student_name" value="<?php echo $_SESSION['user_name']?>">
		<input type="file" class="btn btn-success btn-sm" name="file" />
<button type="submit" class="btn btn-danger btn-sm">Upload Images</button>
 
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
		</div>		<div class="col-md-9">
            <div class="profile-content">
			   <div class="form-group" style="margin:20px">
	<h1>Update Details  <?php  echo $_SESSION['user_name'];  ?>,</h1>
	<!--<strong><p>  You  are  now  logged  in.  you  can  logout  by  clicking  on  logout  link  given  above.</strong></p>-->
	<div class="container" style="margin:20px">
	 <form action="form_update_portfolio_student.php" method = "POST">    
  
 <div class="form-group">
			<label>UserName</label>
             UserName</label>
              <input id="user_name" name="user_name" type="text" placeholder="city" class="form-control input-md" required="" value="<?php echo $result['username']?>">
            </div>
                    <div class="form-group">
			<label>First Name</label>
             <input id="fn" name="fn" type="text" placeholder="first name" class="form-control input-md" required="" value="<?php echo $result['first_name']?>">
            </div>
			 <div class="form-group">
                <label>Middle Name</label>
                <input id="mn" name="mn" type="text" placeholder="middle name" class="form-control input-md" required="" value="<?php echo $result['middle_name']?>">
            </div>
			<div class="form-group">
                <label>Last Name</label>
              <input id="ln" name="ln" type="text" placeholder="last name" class="form-control input-md" required="" value="<?php echo $result['last_name']?>">  
            </div>
			
			<div class="form-group">
             <label>E-mail</label>
               <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="" value="<?php echo $result['email']?>">
            </div>
			<div class="form-group">
              <label>Contact</label>
               <input id="cno" name="cno" type="tel" placeholder="Contact no" class="form-control input-md" required="" value="<?php echo $result['contact_no']?>"> 
            </div>
			<div class="form-group">
              <label>City</label>
                <input  type="text" name="city" placeholder="Enter a location"  class="form-control input-md"autocomplete="on" value="<?php echo $result['city']?>">
            </div>
			<div class="form-group">
              <label>Address</label>
                <input id="PI" name="PI" type="text" placeholder="email" class="form-control input-md" required="" value="<?php echo $result['address']?>">
            </div>
			<div class="form-group">
              <label>Highest Qualification</label>
                <input type="text" name="pic" class="form-control input-md" required="" value="<?php echo $result['qual']?>">
            </div>
			<div class="form-group">
              <label>Date of Birth</label>
               <input id="dob" type="date" name="dob"   class="form-control input-md"autocomplete="on" value="<?php echo $result['dob']?>">
            </div>
			<div class="form-group">
              <label>Age</label>
                <input id="age" name="age"  type="number" min="20" max="70" step="1" value="22" class="form-control input-md" required="" value="<?php echo $result['age']?>">  
            </div>
			<div class="form-group">
              <label>School Name</label>
                <input id="school" type="text" name="school" placeholder="Enter school"  class="form-control input-md"autocomplete="on" value="<?php echo $result['school']?>">
            </div>
			<div class="form-group">
              <label>School Year of passing</label>
               <input id="sc_yop" name="sc_yop"  type="number" min="1970" max="2016" step="1" value="2000" class="form-control input-md" required="" value="<?php echo $result['sc_yop']?>">  
            </div>
			<div class="form-group">
              <label>University of School</label>
                <input id="sc_univ" name="sc_univ" type="text" name="school" placeholder="University"  class="form-control input-md"autocomplete="on" value="<?php echo $result['sc_univ']?>">
            </div>
			<div class="form-group">
              <label>Aggregrate(%)</label>
                <input id="sc_agg" name="sc_agg" type="text"  placeholder="Score"  class="form-control input-md"autocomplete="on" value="<?php echo $result['sc_agg']?>">
            </div>
			<div class="form-group">
              <label>12th College Name</label>
                 <input id="hsc_school" type="text" name="hsc" placeholder="Enter College Name"  class="form-control input-md"autocomplete="on" value="<?php echo $result['hsc']?>">
            </div>
			<div class="form-group">
              <label>HSC Year of passing</label>
                <input id="sc_yop" name="hsc_yop"  type="number" min="1970" max="2016" step="1" value="2000" class="form-control input-md" required="" value="<?php echo $result['hsc_yop']?>">  
            </div>
			<div class="form-group">
              <label>University of School</label>
                <input id="hsc_univ" name="hsc_univ" type="text" name="school" placeholder="University"  class="form-control input-md"autocomplete="on" value="<?php echo $result['hsc_univ']?>">
            </div>
			<div class="form-group">
              <label>Aggregrate(%)</label>
               <input id="hsc_agg" name="hsc_agg" type="text"  placeholder="Score"  class="form-control input-md"autocomplete="on" value="<?php echo $result['hsc_agg']?>">
            </div>
			<div class="form-group">
              <label>Engg College Name</label>
               <input id="college" type="text" name="college" placeholder="Enter Grad College Name"  class="form-control input-md"autocomplete="on" value="<?php echo $result['college']?>">
            </div>
            <div class="form-group">
              <label>Engg Year of passing</label>
              <input id="coll_yop" name="coll_yop"  type="number" min="1970" max="2016" step="1" value="2000" class="form-control input-md" required="" value="<?php echo $result['coll_yop']?>">  
            </div>
			<div class="form-group">
              <label>University of Engg</label>
              <input id="coll_univ" name="coll_univ" type="text" name="school" placeholder="Engg University"  class="form-control input-md"autocomplete="on" value="<?php echo $result['coll_univ']?>">
            </div>
			<div class="form-group">
              <label>Aggregrate(CGPA)</label>
                <input id="sc_yop" name="coll_agg"  type="number" min="0" max="10" step="0.5" value="7" class="form-control input-md" required="" value="<?php echo $result['coll_agg']?>"> 
            </div>
			<div class="form-group">
              <label>Extra Curriculars</label>
               <input id="extra_curr" name="extra_curr" type="text" placeholder="Other-Activities" class="form-control input-md" required="" value="<?php echo $result['extra_curr']?>">
            </div>
			<div class="form-group">
              <label>Other Qualifications</label>
                 <input id="other_qual" name="other_qual" type="text" placeholder="Courses/Certification" class="form-control input-md" required="" value="<?php echo $result['othr_qual']?>">
            </div>
	
  
      </form>
	  </div>
            </div>
			<?php }?>
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