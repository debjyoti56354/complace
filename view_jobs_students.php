<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/students_side.php');
$sql="SELECT*FROM jobs";
$query_result=mysqli_query ($conn,$sql);
$search_term = "";
if(array_key_exists("q", $_GET) ){
	$search_term = $_GET["q"];
}
$get_students_query = "SELECT * FROM jobs WHERE id LIKE '%".$search_term."%' OR Title LIKE '%".$search_term."%' OR Company_name LIKE '%".$search_term."%' ";
$response = mysqli_query($conn, $get_students_query);
?>

<body>
<section>
<section class="wrapper">
<div class="container">
<div class="service-head" style="margin:30px">
			<h3>View Job's</h3>
<div class="col-md-9" style="margin:150px">
<center><div class="search"style="margin:0px 0px 90px 0px"> 
	<form name="searchform" method="GET" action="search_company.php" >
		<input type="text" name="q" value="<?php echo $search_term;?>" /> &nbsp;&nbsp;&nbsp;<input type="submit" name="Search" value="Go" />
	</form>
	</div></center>
 <!-- form start -->
                       <table class="table-striped">
				<thead>
				<tr>
			<th  style="width:500px ;margin:20px">Job Id</th>
			<th  style="width:500px; margin:20px">Job Title</th>
			<th style="width:500px; margin:20px">Company Name</th>
			</thead>
				<tbody>
				<?php
            while($result = mysqli_fetch_assoc($query_result))
            {  
		?>
				<tr><td><?php echo $result['id'];?> </td>
				<td ><a class="text-primary" href="form_view.php?uid=<?php echo $result['id'];?>"><?php echo $result['Title'];?></a></td>
				<td><?php echo $result['Company_name'];?></td>
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