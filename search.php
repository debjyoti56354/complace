<?php 
require_once("common/config.php");
include_once('common/header.php');
include_once('common/students_side.php');


	

$search_term = "";
if(array_key_exists("q", $_GET) ){
	$search_term = $_GET["q"];
}
//$get_students_query = "SELECT * FROM company WHERE Company_Username LIKE '%".$search_term."%' OR HR_Username LIKE '%".$search_term."%' ";
$get_students_query = "SELECT * FROM students WHERE ID LIKE '%".$search_term."%' OR username LIKE '%".$search_term."%' OR first_name LIKE '%".$search_term."%' OR email LIKE '%".$search_term."%' ";
$response = mysqli_query($conn, $get_students_query);
?>




<center><div class="search" style="margin:50px"> 
	<form name="searchform" method="GET" action="search.php" >
		<input type="text" class="form-control" style="width:350px" name="q" value="<?php echo $search_term;?>" /><input type="submit" name="Search" value="Go" />
	</form>

</div></center>
<table class="table" cellpadding=5 cellspacing=5 border=1>
<thead><tr>
			<th style="width:50px">Sr.No</th>
			<th style="width:50px">Students Id</th>
			<th style="width:100px">Students Username</th></th>
			<th style="width:100px">Students First Name</th>
			<th style="width:100px">Students Email</th>
			<th style="width:100px">Mark a Mail</th>
			</tr></thead>
<?php
$i = 0;

while($rs = mysqli_fetch_assoc($response)) {
	//print_r($rs);
?>
<tr>
	<td><?php echo ++$i;?></td>
	<td><?php echo $rs['ID'];?></td>
	<td>	<a class="text-primary" href="view_student_portfolio.php?uid=<?php echo $rs['ID'];?>" target="_blank"><?php echo $rs["username"];?></a></td>
	<td><?php echo $rs["first_name"];?></td>
	<td><?php echo $rs["email"];?></td>
	<td><a class="text-primary" href="mark_a_email.php?uid=<?php echo $rs['ID'];?>" target="_blank" > Mail </a></td>

</tr>
	<?php } ?>

</table>

</div>
              <div>
       
  </section>
 



<?php include_once('common/footer.php')?>


  </body>
</html>
