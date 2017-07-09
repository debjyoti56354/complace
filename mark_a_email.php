<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/company_side.php');

	//$chan= $_SESSION['user_id'];
$sql="SELECT  *  FROM  students  WHERE id=".$_GET['uid'];
$query_result=  mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query_result);
if($_SERVER["REQUEST_METHOD"] == "POST")
{

			
                $to = "".$row['email']."";
				$subject ="".$_REQUEST['subject']."";
				$txt = 
				"".$_REQUEST['comment'].""
				
				;
			$headers = "From: dasjayatid@gmail.com" . "\r\n" .
						"CC: somebodyelse@example.com";
			
				$mail= mail($to,$subject,$txt,$headers);
				if($mail){
					$message = "You have successfully mailed the user!";
				
			header('Location:search.php');
			//echo "<script>location='http://jayatitest.forexwebsolutions.com/index_supplier.php'</script>";
				}
				else{
					echo "Mail Sending Failed";
				}
		}

?>
<body>
<section>
<section class="wrapper">
<div class="container">
    <div class="row profile">
	<div class="box-body" style="margin:100px">
	<div class="form-group">
     <label for="exampleInputEmail1">To : </label>
      <input type="text" name="title" class="form-control" id="Title" value="<?php echo $row['email'];?>">
    </div>
	<div class="form-group">
    <label for="exampleInputFile">Subject</label>
    <input type="text" name="subject" class="form-control" id="exampleInputFile">
    </div>
	<div class="form-group">
                                    <label for="exampleInputPassword1">Message</label>
                                    <textarea class="form-control" id="description" name="comment"
                                              placeholder="Enter only 1000 character"
                                              rows="5">
								    </textarea>
     </div>
	 <center><div class="box-footer">
                                
                                   <!-- <input type="submit" name="cancel_submit" class="btn btn-danger" value="Cancel"/>-->
                                
                                    <input type="submit" class="btn btn-primary" value="Send Mail"/>
                                
                            </div></center>
	</div>
	</div>
	</div>
</section>
</section>
	</body>
	<?php include_once('common/footer.php')?>