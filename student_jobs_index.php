<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/students_side.php');?>
<style>

.container-fluid{
    padding:0 !important;
}
.col-xs-4{
    background:rgba(157,52,99,0.7);    
}

.btn-circle.btn-xl {
  width: 300px;
  height: 300px;
  padding: 10px 10px;
  font-size: 30px;
  line-height: 1.33;
  border-radius: 150px;
  margin:10% 0 0 10%;
  
  }

.btn-circle.btn-x2{
  width: 300px;
  height: 300px;
  padding: 10px 10px;
  font-size: 30px;
  line-height: 1.33;
  border-radius: 150px;
  margin:10% 0% 0% 10%;
  
  }

  body { 
    background-image: url('images/regn.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
	 background-size: cover;
	
}
</style>
<body>
<div class="container">
		<div class="service-head" style="margin:30px">
			<h3>Recruitment Services</h3>
									<div class="login-right" style="margin:70px">
										<a href="view_jobs_students.php" target="_blank"><button type="button" class="btn btn-info btn-circle btn-xl">VIEW JOB'S</button></a>
<a href="company_details.php" target="_blank"><button type="button" class="btn btn-warning btn-circle btn-x2">VIEW COMPANY<br/> DETAIL'S</button></a>
									</div>
									</div>
									</div>
</body>
<?php include_once('common/footer.php')?>