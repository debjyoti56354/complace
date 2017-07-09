<?php
include_once('common/config.php');
session_start();
if(!empty($_POST))
{
	echo"<pre>";
	print_r($_FILES);
	echo"</pre>";
	$folder="Assets/company_port/";
	 $upload_file=$_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],"$folder".$upload_file);
	
	 $query_insert= "INSERT INTO upload_company (img,Company_Username) VALUES ('".$upload_file."','".$_SESSION['user_name']."')";
$query_insert_result= mysqli_query($conn,$query_insert);
header('Location:company_portfolio.php');
}
else
{
	echo "Enter Proper data";
	
}
?>