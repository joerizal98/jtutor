<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JTutor - Online Tutor</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="bootstrap-4.1.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/lightbox.css">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
	<!--Start Home Section-->
	<div>
		<!--Navigation-->
		<nav class="navbar navbar-expand-md fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html"><img src="img/nest.png"  alt="Nest"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="custom-toggler-icon"><i class="fas fa-bars"></i></span></button>

				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" class="" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" class="" href="index.html#portfolio">How It Works</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" class="" href="index.html#testimonials">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" class="" href="whiteboard.html">Course</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" class="" href="login.html">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!--End Navigation--></div>

		<div class="limiter">
		<div class="container-login100" style="padding-top: 8%">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="contact.php">
					<span class="login100-form-title">
						User Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@example.com" >
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-key" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Password?
						</a>
					</div>

					<div class="text-center p-t-30">
						<a class="txt2" href="#">
							New Account
						</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						<a class="txt2" href="#">
							Become a Tutor
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<!--- Start Contact Section -->
<div id="contact" class="offset">

<div class="container-fluid footer">
<div class="row">

	<div class="col-md-5">
		<img src="img/nest.png" alt="">
		<p style="color: white">At our core is a collection of design and development solutions that represent everything your business needs to compete in the modern marketplace.</p>
		<strong>Our Location</strong>
		<p style="color: white">100 Street Name<br>Our City, AA 10000</p>
		<strong>Contact Info</strong>
		<p style="color: white">(888) 888-8888<br>email@nest.com</p>
		<a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
		<a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
		<a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
		<a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
	</div>

	<div class="col-md-7">
		<h3>Contact Us</h3>

		<form id="contact-form" method="post" action="contact.php">

			<div class="messages"></div>
			<div class="controls">

				<div class="form-group">
					<input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your name." required="required">
				</div>

				<div class="form-group">
					<input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email." required="required">
				</div>

				<div class="form-group">
					<textarea id="form_message" name="message" class="form-control" placeholder="Add your message." rows="4" required="required"></textarea>
				</div>

				<input type="submit" class="btn btn-outline-light" value="Send message">

			</div>

		</form>

	</div>

	<hr class="socket">
	&copy; JTutor.ml

</div> <!--- End Row -->
</div> <!--- End Container Footer -->

</div>
<!--- End Contact Section -->

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

		<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>

</body></html>