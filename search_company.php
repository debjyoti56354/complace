<?php 
require_once("common/config.php");
include_once('common/header.php');
include_once('common/students_side.php');


$search_term = "";
if(array_key_exists("q", $_GET) ){
	$search_term = $_GET["q"];
}
//$get_students_query = "SELECT * FROM company WHERE Company_Username LIKE '%".$search_term."%' OR HR_Username LIKE '%".$search_term."%' ";
$get_students_query = "SELECT * FROM jobs WHERE id LIKE '%".$search_term."%' OR Title LIKE '%".$search_term."%' OR Company_name LIKE '%".$search_term."%' ";
//$get_students_query = "SELECT * FROM jobs WHERE id LIKE '%".$search_term."%' Title LIKE '%".$search_term."%' OR Company_name LIKE '%".$search_term."%' ";
$response = mysqli_query($conn, $get_students_query);
?>




<center><div class="search" style="margin:50px"> 
	<form name="searchform" method="GET" action="search_company.php" >
		<input type="text" class="form-control" style="width:350px" name="q" value="<?php echo $search_term;?>" /><input type="submit" name="Search" value="Go" />
	</form>

</div></center>
<table class="table" cellpadding=5 cellspacing=5 border=1>
<thead><tr>
			<th style="width:50px">Sr.No</th>
			<th style="width:200px">Jobs Id</th>
			<th style="width:200px">Jobs Title</th></th>
			<th style="width:200px">Company Name</th>
			</tr></thead>
<?php
$i = 0;

while($rs = mysqli_fetch_assoc($response)) {
	//print_r($rs);
?>
<tr>
	<td><?php echo ++$i;?></td>
	<td><?php echo $rs['id'];?></td>
	<td>	<a class="text-primary" href="form_view.php?uid=<?php echo $rs['id'];?>"><?php echo $rs["Title"];?></a></td>
	<td><?php echo $rs["Company_name"];?></td>

</tr>
	<?php } ?>

</table>

</div>
              <div>
       
  </section>
 



<?php include_once('common/footer.php')?>


  </body>
</html>
