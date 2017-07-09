<?php
include_once('common/config.php');
include_once('common/header.php');

 
if(count($_POST)>0)
{
	/* Form Required Field Validation */
	foreach($_POST as $key=>$values)
	{
		if(empty ($_POST[$key]))
		{
			$message= ucwords ($key) . "All feilds Required";
			break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password']!= $_POST['confirm_password'])
	{
		$message="Entered Password Should be Same <br>";
	}
	/* Email Validation */
	if(!isset($message))
	{
		if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
		{
			$message ="Please enter a valid email address";
		}
	}
	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($message))
	{
		if(!isset($_POST ["terms"]))
		{
			$message="Please Accept the Terms and Condition";
		}
	}
	/* Validation to check if Gender are accepted */
	if(!isset($message))
	{
		if(!isset($_POST["branch"]))
		{
			$message="Please Enter your Branch name";
		}
	}
	
	if(!isset($message))
	{
		require_once('common/config.php');
		$name=$_POST ["user_name"];
		$email=$_POST["email"];
		$branch=$_POST["branch"];
		$compid=$_POST["cid"];
		$password=$_POST["password"];
		$cname=$_POST["cn"];
		$hname=$_POST["hrn"];
		$cno=$_POST["cno"];
		$yoe=$_POST["yoe"];
		$desgn=$_POST["desgn"];
		$role=3;
		echo $query="INSERT INTO company (Email,Branch,Password,Company_Username,Company_Id,Role,Company_name,HR_Username,Contact,yoe,Designation) VALUES ('".$email."','".$branch."','".$password."','".$name."','".$compid."','".$role."','".$cname."','".$hname."','".$cno."','".$yoe."','".$desgn."')";
		$query_result= mysqli_query($conn,$query);
		if(!empty($query_result))
		{
			$message="You have registered successfully";
			unset($_POST);
			header('location:index.php');
		}
		else
		{
			$message="Problem in registration. Try Again!";
		}
	}
}
?>

<html>

<style>
.jumbotron{
    position: relative;
    padding:0 !important;
    margin-top:70px !important;
    background: #fff;
    margin-top: 23px;
    text-align:center;
    margin-bottom: 0 !important;
}
.container-fluid{
    padding:0 !important;
}


.btn-circle.btn-xl {
  width: 300px;
  height: 300px;
  padding: 10px 16px;
  font-size: 30px;
  line-height: 1.33;
  border-radius: 150px;
  margin:10% 0 0 20%;
  
  }

.btn-circle.btn-x2{
  width: 300px;
  height: 300px;
  padding: 10px 16px;
  font-size: 30px;
  line-height: 1.33;
  border-radius: 150px;
  margin:10% 0% 0% 30%;
  
  }

  body { 
    background-image: url('Assets/images/regn.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
	 background-size: cover;
	
}
  
  
   form{
		margin-left: 10%;
		
		width: 80%;
		}
  
  

</style>




</head>
<body>

<div class="jumbotron">
<h1>Registration Form</h1>

</div>
<br><br>


<!-- Form Name -->
<center><legend>Company Registration</legend></center>


<form action="" method="POST" id="compForm" >
<fieldset>
							<div class="form-group">
        <div class="row">
			<div class="message text-center"><?php if(isset($message)) echo $message ;?></div>
		
            <div class="col-xs-6" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Company Name</b></label>
              <input id="cn" name="cn" type="text" placeholder="company name" class="form-control input-md" required="">
            </div>

            <div class="col-xs-6 selectContainer"Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Year of Joining</label>
                <input id="yoe" name="yoe"  type="number" min="1900" max="2099" step="1" value="2017" class="form-control input-md" required="">  
  
            </div>
        </div>
    </div>

    <div class="form-group" Style="color:#ccc; font-size:20px">
        <div class="row">
            <div class="col-xs-4">
                <label class="control-label">E-mail</label>
              <input id="email" name="email" type="email" placeholder="enter email" class="form-control input-md" required="">
            </div>

            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Contact</label>
                 <input id="cno" name="cno" type="tel" placeholder="Contact no" class="form-control input-md" required="">
            </div>

           <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Designation</label>
                 <input id="desgn" name="desgn" type="tel" placeholder="Designation" class="form-control input-md" required="">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>HR Name</label>
              <input id="hrn" name="hrn" type="text" placeholder="Name of Your Recuiter" class="form-control input-md" required="">
            </div>
			 <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Branch</label>
              <input id="hrn" name="branch" type="text" placeholder="Branch Name" class="form-control input-md" required="">
            </div>

            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Company_Id</label>
             <input id="cid" name="cid" type="text" placeholder="Comapany Id" class="form-control input-md">
            </div>
        </div>
    </div>
	
	 <div class="form-group">
        <div class="row">
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Company_UserName</label>
              <input id="user_name" name="user_name" type="text" placeholder="Name" class="form-control input-md" required="">
            </div>

            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Password</label>
           <input id="pwd" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
            </div>
			 <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Confirm Password</label>
           <input id="pwd" name="confirm_password" type="password" placeholder="Password" class="form-control input-md" required="">
            </div>
			
			
			
        </div><br><br>
		<center><label class="checkbox">
                <input type="checkbox" value="remember-me" name="terms"> I Accept the Terms and Conditions
                
            </label></center>
			<!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
			<button class="btn btn-info btn-lg btn-block" type="submit">SUBMIT</button>
    </div>
<br><br>
    

</fieldset>
</form>


 </body>
 </html>










