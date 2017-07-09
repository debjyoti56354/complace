<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="camplace";

$conn= mysqli_connect($hostname,$username,$password,$db_name);
if($conn==True)
{
echo " ";

}
else
{
echo "Connection Failed";
}




?>