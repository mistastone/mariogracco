<?php 

$title = "Front Page";
$page_name = "frontpage"; 
include('includes/header.php');

?>

<body>

<div class="line firstline"></div>

	<div class="hero">
      <img src="images/involvedbanner.jpg" class = "img-responsive" alt="">
    </div>

<div class="line"></div> 
	
<section class="container-fluid involvedform mainsection">


  <div class="meettext">
      <h2>Get Involved</h2>
      <div class="col-lg-4 col-lg-offset-3">
				<p>Fill out the form below to get involved today</p>
			</div>
		</div>
	
	<form class = "signup_form" action="signup.php">
		<div class="inputs">
			<input type="text" name = "first" placeholder="First name">
		</div>
		<div class="inputs">
			<input type="text" name = "last" placeholder="Last name">
		</div>
		<div class="inputs">
			<input type="text" name = "email" placeholder="Email Address">
		</div>
		
		<input type="checkbox" name="membership" value="Sell Memberships">Sell Memberships<br>
		<input type="checkbox" name="donate" value="Donate">Donate<br>
		<input type="checkbox" name="raisefunds" value="Raise Funds">Raise Funds<br>
		<input type="checkbox" name="organize" value="Organize a Get Together">Organize a Get Together<br>
		<input type="checkbox" name="prepare" value="Prepare Policy Papers">Prepare Policy Papers
 
		<div class="button sign" id = "signup">
			<p>Sign up</p>
		</div>
		<!-- <input type="submit" value="submit"> -->
	</form>
						
	<div class = "success-message">
		<p> A confirmation email has been sent to you</p>
	</div>
	

</section>


</body>

<?php include('includes/footer.php') ?>