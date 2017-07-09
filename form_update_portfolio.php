<?php
  include_once('common/config.php');
  session_start();
  $name=$_POST ["user_name"];
		$email=$_POST["email"];
		$branch=$_POST["branch"];
		$compid=$_POST["cid"];
		$cname=$_POST["cn"];
		$hname=$_POST["hrn"];
		$cno=$_POST["cno"];
		$yoe=$_POST["yoe"];
		
		
		echo $query = "UPDATE company SET Company_Username='".$name."',Email = '".$email."',Branch = '".$branch."',Company_Id = '".$compid."',Company_name = '".$cname."',HR_Username = '".$hname."',Contact = '".$cno."',yoe = '".$yoe."' WHERE Company_Username= '".$_SESSION['user_name']."'";
	
	mysqli_query($conn,$query);
	header ('Location:company_portfolio.php');
?>