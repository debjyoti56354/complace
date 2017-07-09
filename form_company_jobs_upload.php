<?php include_once('common/config.php');
if(!empty($_POST)){
	
	"<pre>";
	print_r($_FILES);
	"</pre>";
	$folder="Assets/Jobs/";
	$upload_file=$_FILES["uploaded_image"]["name"];
	move_uploaded_file($_FILES["uploaded_image"]["tmp_name"],"$folder".$upload_file);
 $titile=$_POST['title'];
 $criteria=$_POST['criteria'];
 $description=$_POST['description'];
 $branch_type=$_POST['branch_type'];
 $specialization=$_POST['specialization'];
 $cpn=$_POST['cpn'];
 $query = "INSERT INTO jobs (Title,Description,Branch,Crieteria,Specialization,Company_name,Upload)VALUES ('".$titile."','".$description."','".$branch_type."','".$criteria."','".$specialization."','".$cpn."','".$upload_file."')";
		$query_insert = mysqli_query($conn,$query);
		header ('Location:company_jobs_post.php');
}
?>