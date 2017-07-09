<?php
include_once('common/config.php');
session_start();
if(!empty($_POST))
{
	"<pre>";
	print_r($_FILES);
	"</pre>";
	$folder="Assets/student_port/";
	$upload_file=$_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],"$folder".$upload_file);
	

$query_insert= "INSERT INTO upload_student (img,username) VALUES ('".$upload_file."','".$_SESSION['user_name']."')";
$query_insert_result= mysqli_query($conn,$query_insert);
header('Location:student_portfolio.php');
}
else
{
	echo "Enter Proper data";
	//header('Location:assignment_notes.php');
}
?>