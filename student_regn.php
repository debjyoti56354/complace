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
		require_once('common/config.php');
		
		$first_name=$_POST["fn"];
		$middle_name=$_POST["mn"];
		$last_name=$_POST["ln"];
		$gender=$_POST["Gender"];
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
		$uid=$_POST["uid"];
		$date=date('Y-m-d H:i:s');
		$pic=$_POST["pic"];
		
		
		$role=3;
		$query="INSERT INTO students (first_name,middle_name,last_name,gender,email,contact_no,city,address,dob,age,school,sc_yop,sc_univ,sc_agg,hsc,hsc_yop,hsc_univ,hsc_agg,college,coll_yop,coll_univ,coll_agg,extra_curr,username,password,uid,role,date_created,othr_qual,qual) VALUES ('".$first_name."','".$middle_name."','".$last_name."','".$gender."','".$email."','".$contact_no."','".$city."','".$PI."','".$dob."','".$age."','".$school."','".$sc_yop."','".$sc_univ."','".$sc_agg."','".$hsc."','".$hsc_yop."','".$hsc_univ."','".$hsc_agg."','".$college."','".$coll_yop."','".$coll_univ."','".$coll_agg."','".$extra_curr."','".$username."','".$password."','".$uid."','".$role."','".$date."','".$other_qual."','".$pic."')";
		$query_result= mysqli_query($conn,$query);
		if(!empty($query_result))
		{
			$message="You have registered successfully";
			unset($_POST);
			//header('location:index.php');
		}
		else
		{
			$message="Problem in registration. Try Again!";
		}
	}
}
?>
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

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('searchTextField');
      var autocomplete = new google.maps.places.Autocomplete(input);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>	




</head>
<body>

<div class="jumbotron">
<h1>Registration Form</h1>

</div>
<br><br>
<!-- Form Name -->
<center><legend>Student Registration</legend></center>

<form action="" method="POST" id="bookForm">
<fieldset>
							<div class="form-group">
        <div class="row">
		<div class="message text-center"><?php if(isset($message)) echo $message ;?></div>
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>First Name</b></label>
				<input id="fn" name="fn" type="text" placeholder="first name" class="form-control input-md" required="">
            </div>
			
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Middle Name</b></label>
                <input id="mn" name="mn" type="text" placeholder="middle name" class="form-control input-md" required="">
            </div>  
			 
		
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Last Name</b></label>
             <input id="ln" name="ln" type="text" placeholder="last name" class="form-control input-md" required="">  
            </div> 
		
            
        </div>
    </div>
	
	  <div class="row">
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Gender</b></label>
				<br>
				<center>  <input type="radio" name="Gender" id="Male" value="male" checked="checked">
				 Male
				</label> 
				<label class="radio-inline" for="Training-1">
				  <input type="radio" name="Gender" id="Female" value="female">
				  Female
				</label>
				</center>
            </div>
			
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>E-mail</b></label>
				<input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">
            </div>  
			 
		
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Contact</b></label>
               <input id="cno" name="cno" type="tel" placeholder="Contact no" class="form-control input-md" required=""> 
            </div> 
		
            
        </div>
    </div>
	<br>
	
	<div class="form-group">
        <div class="row">
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>City</b></label>
				 <input  type="text" name="city" placeholder="Enter a location"  class="form-control input-md"autocomplete="on">
            </div>
			
            <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Address</b></label>
				 <input id="PI" name="PI" type="text" placeholder="email" class="form-control input-md" required="">
            </div>
			 
		
           <div class="col-xs-4" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Highest Qualification</b></label>
				 <input type="text" name="pic" class="form-control input-md" required="">
          
            </div> 
		
            
        </div>
    </div>
	
	
	<div class="form-group">
        <div class="row">
            <div class="col-xs-6" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Date of Birth</b></label>
				 <input id="dob" type="date" name="dob"   class="form-control input-md"autocomplete="on">
            </div>
			
            <div class="col-xs-6" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Age</b></label>
          <input id="age" name="age"  type="number" min="20" max="70" step="1" value="22" class="form-control input-md" required="">  
            </div>  
			 
		
           
            
        </div>
    </div>
	
	<div class="form-group">
        <div class="row">
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>School Name</b></label>
				 <input id="school" type="text" name="school" placeholder="Enter school"  class="form-control input-md"autocomplete="on">
            </div>
			
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>School Year of passing</b></label>
          <input id="sc_yop" name="sc_yop"  type="number" min="1970" max="2016" step="1" value="2000" class="form-control input-md" required="">  
            </div>  
			 
		
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>University of School</b></label>
				  <input id="sc_univ" name="sc_univ" type="text" name="school" placeholder="University"  class="form-control input-md"autocomplete="on">
          
            </div> 
			
               
				<div class="col-xs-3" Style="color:#ccc; font-size:20px">
				 <label class="control-label"><b><span style="color:red">*</span>Aggregrate(%)</b></label>
				  <input id="sc_agg" name="sc_agg" type="text"  placeholder="Score"  class="form-control input-md"autocomplete="on">
          
            </div> 
		
            
        </div>
    </div>
	
	
	
		<div class="form-group">
        <div class="row">
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>12th College Name</b></label>
				 <input id="hsc_school" type="text" name="hsc" placeholder="Enter College Name"  class="form-control input-md"autocomplete="on">
            </div>
			
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>HSC Year of passing</b></label>
          <input id="sc_yop" name="hsc_yop"  type="number" min="1970" max="2016" step="1" value="2000" class="form-control input-md" required="">  
            </div>  
			 
		
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>University of School</b></label>
				  <input id="hsc_univ" name="hsc_univ" type="text" name="school" placeholder="University"  class="form-control input-md"autocomplete="on">
          
            </div> 
			
                
				<div class="col-xs-3" Style="color:#ccc; font-size:20px">
				<label class="control-label"><b><span style="color:red">*</span>Aggregrate(%)</b></label>
				  <input id="hsc_agg" name="hsc_agg" type="text"  placeholder="Score"  class="form-control input-md"autocomplete="on">
          
            </div> 
		
            
        </div>
    </div>
	
	
		<div class="form-group">
        <div class="row">
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Engg College Name</b></label>
				 <input id="college" type="text" name="college" placeholder="Enter Grad College Name"  class="form-control input-md"autocomplete="on">
            </div>
			
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>Engg Year of passing</b></label>
          <input id="coll_yop" name="coll_yop"  type="number" min="1970" max="2016" step="1" value="2000" class="form-control input-md" required="">  
            </div>  
			 
		
            <div class="col-xs-3" Style="color:#ccc; font-size:20px">
                <label class="control-label"><b><span style="color:red">*</span>University of Engg</b></label>
				  <input id="coll_univ" name="coll_univ" type="text" name="school" placeholder="Engg University"  class="form-control input-md"autocomplete="on">
          
            </div> 
			
                
				<div class="col-xs-3" Style="color:#ccc; font-size:20px">
				<label class="control-label"><b><span style="color:red">*</span>Aggregrate(CGPA)</b></label>
				   <input id="sc_yop" name="coll_agg"  type="number" min="0" max="10" step="0.5" value="7" class="form-control input-md" required=""> 
          
            </div> 
		
            
        </div>
    </div>
	
	
	
	
	

    <div class="form-group" Style="color:#ccc; font-size:20px">
        <div class="row">
            <div class="col-xs-6">
                <label class="control-label">Extra Curriculars</label>
              <input id="extra_curr" name="extra_curr" type="text" placeholder="Other-Activities" class="form-control input-md" required="">
            </div>

            <div class="col-xs-6" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Other Qualifications</label>
                 <input id="other_qual" name="other_qual" type="text" placeholder="Courses/Certification" class="form-control input-md" required="">
            </div>

           
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-6" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Password</label>
              <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
            </div>
			 <div class="col-xs-6" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>Confirm Password</label>
           <input id="pwd" name="confirm_password" type="password" placeholder="Password" class="form-control input-md" required="">
            </div>

        </div>
    </div>
	
	 <div class="form-group">
        <div class="row">
            <div class="col-xs-6" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>UserName</label>
              <input id="user_name" name="user_name" type="text" placeholder="UserName" class="form-control input-md" required="">
            </div>
			
            <div class="col-xs-6" Style="color:#ccc; font-size:20px">
                <label class="control-label"><span style="color:red">*</span>User Id</label>
             <input id="uid" name="uid" type="text" placeholder="" class="form-control input-md">
            </div>
           
        </div>
		<center><label class="checkbox">
                <input type="checkbox" value="remember-me" name="terms"> I Accept the Terms and Conditions
                
            </label></center>
		</label></center>
			<!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
			<br><br>
			<button class="btn btn-info btn-lg btn-block" type="submit">SUBMIT</button>
    </div>

    

</fieldset>
</form>


 </body>
 </html>



















