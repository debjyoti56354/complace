<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/students_side.php');
$sql="SELECT*FROM complist";
$query_result=mysqli_query ($conn,$sql);
?>

<body>
<section>
<section class="wrapper">
<div class="container">
<div class="service-head" style="margin:30px">
			<h3>View Company's Details</h3>
<div class="col-lg-12" style="margin:50px">
 <!-- form start -->
                       <table class="table-striped">
				<thead>
				<tr>
			<th style="width:100px;margin:10px">Company Id</th>
			<th style="width:500px;margin:10px">Company Name</th></th>
			<th style="width:200px;margin:10px">Company YOE</th>
			<th style="width:300px;margin:10px">Services Provided</th>
			<th style="width:200px">Owners Name</th>
			<th style="width:200px">Website</th>
			</thead>
				<tbody>
				<?php
            while($result = mysqli_fetch_assoc($query_result))
            {  
		?>
				<tr><td><?php echo $result['id'];?> </td>
				<td><div  style="height:30px"><a class="text-primary" href="view_company_details.php?uid=<?php echo $result['id'];?>"><?php echo $result['Company_name'];?></a></div></td>
				<td><?php echo $result['yoe'];?></td>
				<td><?php echo $result['services'];?></td>
				<td><?php echo $result['owner'];?></td>
				<td><?php echo $result['website'];?></td>
			</tr>
			<?php }?>
			</tbody>
			</table>
							</div>
						</div>
						</div>
					</div>
					</div>		
			</div>
		</div>
	</div>

</div>
</section>
</section>
</body>


<?php include_once('common/footer.php')?>