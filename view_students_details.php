<?php require_once('common/config.php');
include_once('common/header.php');
include_once('common/company_side.php');
$sql="SELECT*FROM students";
$query_result=mysqli_query ($conn,$sql);
$search_term = "";
if(array_key_exists("q", $_GET) ){
	$search_term = $_GET["q"];
}
$get_students_query = "SELECT * FROM students WHERE username LIKE '%".$search_term."%' OR first_name LIKE '%".$search_term."%' OR email LIKE '%".$search_term."%' ";
$response = mysqli_query($conn, $get_students_query);
?>

<body>
<section>
<section class="wrapper">
	
<div class="container">
<div class="service-head" style="margin:30px">
			<h3>View Student's Details</h3>
<div class="col-md-9" style="margin:90px">
			<center><div class="search"style="margin:0px 0px 90px 0px"> 
	<form name="searchform" method="GET" action="search.php" >
		<input type="text" name="q" value="<?php echo $search_term;?>" /> &nbsp;&nbsp;&nbsp;<input type="submit" name="Search" value="Go" />
	</form>
	</div></center>
 <!-- form start -->
 <!--<table cellpadding=5 cellspacing=5 border=1>
<tr>
	<td>id</td>
	<td>name</td>
	<td>desc</td>
</tr>
<?php
$i = 0;
while($rs = mysqli_fetch_assoc($response)) {
	//print_r($rs);
?>
<tr>
	<td><?php echo ++$i;?></td>
	<td><?php echo $rs["name"];?></td>
	<td><?php echo $rs["email"];?></td>
</tr>
	<?php } ?>

</table>-->
                       <table class="table-striped">
				<thead>
				<tr>
			<th style="width:200px">Students Id</th>
			<th style="width:200px">Students Username</th></th>
			<th style="width:200px">Students First Name</th>
			<th style="width:100px">Students Email</th>
			
			</thead>
				<tbody>
			<?php
            while($result = mysqli_fetch_assoc($query_result))
            {  
		?>
			<input type="hidden" value="<?php echo $result['ID']?>"  name="uid">
			<tr><td><?php echo $result['ID'];?> </td>
				<td ><a class="text-primary" href="view_student_portfolio.php?uid=<?php echo $result['ID'];?>" target="_blank"><?php echo $result['username'];?></a></td>
				<td><?php echo $result['first_name'];?></td>
				<td><?php echo $result['email'];?></td>
				
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