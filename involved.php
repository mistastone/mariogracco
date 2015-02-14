<?php 

$title = "Front Page";
$page_name = "frontpage"; 
include('includes/header.php');

?>

<body>

<div class="line firstline"></div>

	<div class="hero">
      <img src="images/involvedbanner.jpg" class = "img-responsive" alt="">
      <p style= "text-align: center; padding-top: 5px; font-size: 20px;">Location: New Westminster Drive & Promenade Circle – Vaughan</p>
    </div> 

<div class="line"></div> 
	
<section class="container-fluid involvedform mainsection">


	<div class="meettext">
      <h2>Get Involved</h2>
		<div class="col-lg-4 col-lg-offset-4">
				<p style = "text-align: center; padding-bottom: 20px;">Please enter your information below</p>
		</div>
	
	</div>
	
	<div class="signupsection">
		<div class="col-md-4 col-md-offset-4">
			<form class = "signup_form" action="signup.php">

				<div class="inputs form-group">
					<input class = "form-control" type="text" name = "first" placeholder="First name">
				</div>

				<div class="inputs form-group">
					<input class = "form-control" type="text" name = "last" placeholder="Last name">
				</div>
				<div class="inputs form-group">
					<input class = "form-control" type="text" name = "email" placeholder="Email Address">
				</div>
			
				<p style = "text-align: center; padding-bottom: 20px;">Please select what you would like to help with</p>

				<input type="checkbox" name="membership" value="Sell Memberships">Sell Memberships<br>
				<input type="checkbox" name="donate" value="Donate">Donate<br>
				<input type="checkbox" name="raisefunds" value="Raise Funds">Raise Funds<br>
				<input type="checkbox" name="organize" value="Organize a Get Together">Organize a Get Together<br>
				<input type="checkbox" name="prepare" value="Prepare Policy Papers">Prepare Policy Papers
	  
 
			</form>
			
			<div class="col-lg-4 col-lg-offset-4">

			<div class="button sign" id = "signup"> 
				<p>Sign up</p> 
			</div>

			</div>
			
		
		</div>
	</div> 
	
</section>

<div class = "success-message">
	<p>Thank you for signing up.</p>
</div>


<?php include('includes/footer.php') ?>

</body>