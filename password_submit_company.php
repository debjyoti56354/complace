<?php include_once('common/config.php'); 
session_start();
if(count($_POST)>0) {
		$newPassword=$_POST["newpassword"] ;
	
$query = "SELECT * FROM company WHERE Company_Username='" . $_SESSION["user_name"] . "'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

if($row["Password"] == $_POST["currentpassword"]) {

$query_result ="UPDATE company SET Password='" .$newPassword. "' WHERE  Company_Username='" . $_SESSION["user_name"] . "'";
$result_1 = mysqli_query($conn,$query_result);
//$row_1 = mysqli_fetch_array($result_1,MYSQLI_ASSOC);
$message = "Password Changed";
header ('Location:company_portfolio.php');
 //echo "<script>location='http://jayatitest.forexwebsolutions.com/change_password.php'</script>";
};
}
?>
