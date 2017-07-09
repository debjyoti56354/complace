<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/students_side.php');
$sql="SELECT*FROM complist WHERE id=".$_GET['uid'];
$query_result=mysqli_query ($conn,$sql);


?>
<html>

<body>
<section>
<section class="wrapper">
<div class="container">
<div class="service-head" style="margin:30px">
			<h3>Job's Description</h3>
			
<div class="col-md-9" style="margin:150px">
<?php while($result = mysqli_fetch_assoc($query_result))
  {?>	  
       
<div class="box-body">
               <div class="form-group">
                                    
                                   <h2> <?php echo $result['Company_name'];?></h2>
								   
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Company Name</label>
                                    <div><?php echo $result['Company_name'];?></div>
                                </div>
								<br/>
								<div class="form-group">
                                    <label for="exampleInputFile">Company Description</label>
									<div style="height:300px ;margin:20px"><?php echo $result['Company_desc'];?></div>
                                </div>
								<br/>
								<div class="form-group">
								<label for="exampleInputPassword1">Year Of Establishment</label>
                                   <div> <?php echo $result['yoe'];?></div>
                                </div>
								<br/>
								<div class="form-group">
                                    <label for="exampleInputPassword1">Services Provided</label>
                                   <div> <?php echo $result['services'];?></div>
                                </div> 
								<br/>	
								<div class="form-group">
                                    <label for="exampleInputPassword1">Owners Name</label>
                                   <div> <?php echo $result['owner'];?></div>
                                </div> 
								<div class="form-group">
                                    <label for="exampleInputPassword1">Website</label>
                                   <div> <?php echo $result['website'];?></div>
                                </div> 

	</div>
	</div>
  <?php }?>
	</div>
	</div>
	</div>
	
	</section>
	</section>
	<?php include_once('common/footer.php')?>
	