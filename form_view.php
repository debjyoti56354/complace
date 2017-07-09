<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/company_side.php');
$sql="SELECT*FROM jobs WHERE id=".$_GET['uid'];
$query_result=mysqli_query ($conn,$sql);


?>
<html>

<body>
<section>
<section class="wrapper">
<div class="container">
<div class="service-head" style="margin:30px">
			<h3>Job's Description</h3>
			<?php while($result = mysqli_fetch_assoc($query_result))
  {?>	  
       
<div class="col-md-9" style="margin:150px">
<div class="box-body">
               <div class="form-group">
                                    
                                   <h2> <?php echo $result['Title'];?></h2>
								   
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Company Name</label>
                                    <?php echo $result['Company_name']?>
                                </div>
								<br/>
								<div class="form-group">
                                    <label for="exampleInputFile">Criteria</label>
									<?php echo $result['Crieteria']?>
                                </div>
								<br/>
								<div class="form-group">
								<label for="exampleInputPassword1">Description</label>
                                    <?php echo $result['Description']?>
                                </div>
								<br/>
								<div class="form-group">
                                    <label for="exampleInputPassword1">Branch</label>
                                    <?php echo $result['Branch']?>
                                </div> 
								<br/>	
								<div class="form-group">
                                    <label for="exampleInputPassword1">Specialization</label>
                                    <?php echo $result['Specialization']?>
                                </div> 
							

	</div>
	</div>
		
	</div>
  <?php }?>
	</div>
	</div>
	
	</section>
	</section>
	<?php include_once('common/footer.php')?>
	