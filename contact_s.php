<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/students_side.php');

?>


<body>
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-head">
				<h2 >Contact Us</h2>
				<p> Feel free to reach us...</p>			
			</div>
			<div class="contact-grids">
				<div class="col-md-8 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2473478.1088362797!2d-107.97470132744915!3d52.74110675936634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5304f6bf47ed992b%3A0x05049e3295772690!2sSaskatoon%2C+SK%2C+Canada!5e0!3m2!1sen!2sin!4v1460541578241"  allowfullscreen></iframe>
				</div>
				<div class="col-md-4 con-grid">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<div class="con-ic">
							<p>12K Street, 45 Carter Road <span>Mumbai.</span></p>
						</div>
							<div class="clearfix"> </div>
					</div>
					<div class="contact-grid contact-grid1">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<div class="con-ic">
							<p>+91- 9856432178<span>022- 2748 73056</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<div class="con-ic">
							<p><a href="mailto:info@example.com">info@gmail.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>			
			<form action="#" method="post">
				<div class="contact-grids1">
					<div class="contact-me ">
						<h4>Message</h4>
						<textarea  name="Message"  placeholder="" required=""> </textarea>
					</div>
					<div class="col-md-5 contact-form1">
						<h4>Name</h4>
						<input type="text" name="Name" placeholder="" required="">
					</div>
					<div class="col-md-5 contact-form1">
						<h4>Email</h4>
						<input type="email" name="Email" placeholder="" required="">
					</div>
					<div class="col-md-2 contact-form">
						<input type="submit" value="Submit" >
					</div>
					<div class="clearfix"> </div>
				
				</div>
				</form>
		</div>
	</div>	
<!-- //contact -->
</body>
<?php include_once('common/footer.php');
?>