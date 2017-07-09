<?php
  include_once('common/config.php');
  session_start();
  $first_name=$_POST["fn"];
		$middle_name=$_POST["mn"];
		$last_name=$_POST["ln"];
		$email=$_POST["email"];
		$contact_no=$_POST["cno"];
		$city=$_POST["city"];
		$PI=$_POST["PI"];
		$dob=$_POST["dob"];
		$age=$_POST["age"];
		$school=$_POST["school"];
		$sc_yop=$_POST["sc_yop"];
		$sc_univ=$_POST["sc_univ"];
		$sc_agg=$_POST["sc_agg"];
		$hsc=$_POST["hsc"];
		$hsc_yop=$_POST["hsc_yop"];
		$hsc_univ=$_POST["hsc_univ"];
		$hsc_agg=$_POST["hsc_agg"];
		$college=$_POST["college"];
		$coll_yop=$_POST["coll_yop"];
		$coll_univ=$_POST["coll_univ"];
		$coll_agg=$_POST["coll_agg"];
		$extra_curr=$_POST["extra_curr"];
		$other_qual=$_POST["other_qual"];
		$username=$_POST["user_name"];
		$password=$_POST["password"];
		$pic=$_POST["pic"]
		
		
		echo $query = "UPDATE student SET username='".$username."',first_name = '".$first_name."',middle_name = '".$middle_name."',last_name = '".$last_name."',email = '".$email."',contact_no = '".$contact_no."', city = '".$city."',address = '".$PI."',dob = '".$dob."',age = '".$age."',school = '".$school."',sc_yop = '".$sc_yop."',sc_univ = '".$sc_univ."',sc_agg = '".$sc_agg."',hsc = '".$hsc."',hsc_yop='".$hsc_yop."',hsc_univ='".$hsc_univ."',hsc_agg = '".$hsc_agg."',college = '".$college."',coll_yop = '".$coll_yop."',coll_univ='".$coll_univ."',coll_agg = '".$coll_agg."',extra_curr = '".$extra_curr."',othr_qual = '".$other_qual."',qual='".$pic."' WHERE Company_Username= '".$_SESSION['user_name']."'";
	
	mysqli_query($conn,$query);
	header ('Location:company_portfolio.php');
?>