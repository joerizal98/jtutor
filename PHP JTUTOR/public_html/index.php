<?php
session_start();

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JTutor - Online Tutor</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="bootstrap-4.1.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/lightbox.css">

	<style>
		#btn{
			color: white;
		}

		.dropdown {
			cursor:default;
		    position: relative;
		    display: inline-block;
		}

		.dropdown-content {
			float: right;
		    display: none;
		    position: absolute;
		    background-color: #f1f1f1;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    right: 0;
		    top: 2;
		    background: rgba(9,20,24, .9)!important;
		}

		.dropdown-content a {
		    color: white;
		    padding: 13px 16px;
		    text-decoration: none;
		    display: block;
		}

		.dropdown-content a:hover {
		    color: #431478;
		}

		.dropdown:hover .dropdown-content{
		    display: block;
		    float: right;
		}

		.dropdown:hover #btn {
		    color: #431478;
		}
	</style>

</head>
<body data-spy="scroll" data-target="#navbarResponsive">
	<!--Start Home Section-->
	<div id="home">
		<!--Navigation-->
		<nav class="navbar navbar-expand-md fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href=""><img src="img/nest.png"  alt="JTutor"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="custom-toggler-icon"><i class="fas fa-bars"></i></span></button>

				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" class="" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" class="" href="#howitwork">How It Works</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" class="" href="#aboutus">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" class="" href="course/">Course</a>
						</li>
						<?php

						    if(isset($_SESSION['User']))
						    {
						    	echo 
						        '<div class="dropdown">
						        <li class="nav-item">
									<a class="nav-link" class="" href="dashboard/">Dashboard</a>
								</li></div>';

						        echo 
						        '<div class="dropdown">
						        <li class="nav-item">
									<a class="nav-link" id="btn">'  
									  .$_SESSION['name'].'</a>
									<div class="dropdown-content">
									    <a href="my_profile/">My Account</a>
									    <a href="logout/?logout">Logout</a>
  									</div>
								</li></div>';
						        
						    }
						    else
						    {
						        echo 
						        '<li class="nav-item" >
									<a class="nav-link" class="" href="login/">Login</a>
								</li>';
						    }

						?>



						
						
					</ul>
				</div>
			</div>
		</nav>
		<!--End Navigation-->
		<!--Start Landing Page Images-->
		<div class="landing">
			<div class="home-wrap">
				<div class="home-inner">
				</div>
			</div>
		</div>
		<!--End Landing Page Images-->

		<!--Start Landing Page Caption-->
		<div class="caption center-block text-center">
			<img src="img/nest.png" class="rps" width="200" height="200">
			<center><h3 class="rps" style="font-size:3vw;">New Way Of Learning</h3></center>
			<a class="btn btn-outline-light" href="#about" style="font-size:1.5vw;">Get Started</a>
		</div>
		<!--End Landing Page Caption-->
	</div>
	<!--End Home Section-->

	<!--Start About Section-->
	<div id="about" class="offset">
		<!--- Start Jumbotron -->
		<div class="jumbotron">

			<!--<h3 class="heading">How We Work</h3>
			<div class="heading-underline"></div>-->

			<div class="row narrow">

				<div class="col-md-4">
					<div class="about text-center">
						<i class="fas fa-user fa-3x"></i>
						<h3>Student First</h3>
						<p>We believe all students should get the help they need and not have to go in debt. So we offer online tutors at affordable prices.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="about text-center">
						<i class="fas fa-graduation-cap fa-3x"></i>
						<h3>Tutor Quality</h3>
						<p>Online tutors are available in a wide array of subjects and topics to help you wherever you need.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="about text-center">
						<i class="fas fa-clock fa-3x"></i>
						<h3>Available 24/7</h3>
						<p>Online tutors are available to help 24/7, anytime to fit your schedule. Satisfaction guaranteed, or your money back.</p>
					</div>
				</div>

			</div><!--- End Row -->
		</div><!--- End Jumbotron -->
	</div><!--End About Section-->

	<!--- Start howitwork Section -->
	<div id="howitwork" class="offset">

	<div class="container-fluid padding">

		<h3 id="a" class="heading">How Jtutor Works</h3>
		<div class="heading-underline"></div>

		<!--- Start howitwork Grid -->
		<div class="row no-padding">

			<div class="col-md-6">
				<div class="howitwork-item">
					<a href="img/Step/1.png" data-lightbox="example-set" data-title="# Register Your Self">
						<img class="example-image" src="img/Step/1.png" alt="Step 1">
					</a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="howitwork-item">
					<a href="img/Step/2.png" data-lightbox="example-set" data-title="# Find Home Tutor Malaysia">
						<img class="example-image" src="img/Step/2.png" alt="Step 2">
					</a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="howitwork-item">
					<a href="img/Step/3.png" data-lightbox="example-set" data-title="# Affordable Rates">
						<img class="example-image" src="img/Step/3.png" alt="Step 3">
					</a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="howitwork-item">
					<a href="img/Step/4.png" data-lightbox="example-set" data-title="# We Search for You">
						<img class="example-image" src="img/Step/4.png" alt="Step 4">
					</a>
				</div>
			</div>

		</div> <!--- End Row -->
		<!--- End howitwork Grid -->
	</div> <!--- End Container -->

	<div class="narrow text-center padding">
		<p class="lead">Get in contact with us to see more of our great course or give a feedback and ideas about our tutoring system so we can provide a great service for you!</p>
		<div class="center-block">
			<a class="btn btn-secondary" href="#contact">Get in Touch</a>
		</div>
	</div>

	</div>
<!--- End howitwork Section -->
	

	<!--Start aboutus Section-->
		<dir class="jumbotron" id="aboutus" id="b" class="offset">
			<h3 class="heading">Meet Our Developers</h3>
			<div class="heading-underline"></div>
				
			<div class="row narrow">
				<div class="col-md-6">
					<div class="card text-center">
						<img class="card-img-top" src="img/Dev/1.png" alt="joe">
						<div class="card-body">
							<h4>Joerizal Pilip</h4>
							<h5>Project Manager</h5>
							<p>I created this system to help students out there to get an extra knowledge for their UPSR, PT3 and SPM examinations.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card text-center">
						<img class="card-img-top" src="img/Dev/2.png" alt="jay">
						<div class="card-body">
							<h4>Jay Win Juin</h4>
							<h5>Designer</h5>
							<p>I have over 3 years of experiences in multimedia and I believe can make this system more interesting.</p>
						</div>
					</div>
				</div>
				<center>
					<div class="col-md-6">
						<div class="card text-center">
							<img class="card-img-top" src="img/Dev/3.png" alt="jumawan">
							<div class="card-body">
								<h4>Jumawan Hakim</h4>
								<h5>Programmer</h5>
								<p>Im the one who responsible in background process of this system and will make sure it will operate as desired.</p>
							</div>
						</div>
					</div>
				</center>
			</div>
			
		</dir><!--End Jumbotron-->
	</div>
	<!--End aboutus Section-->

	<!--- Start Contact Section -->
<div id="contact" class="offset">

<div class="container-fluid footer">
<div class="row">

	<div class="col-md-5">
		<img src="img/nest.png" alt="">
		<p>We believe JTutor will have an effective impact on students to improve their grade by using this system</p>
		<strong>Our Location</strong>
		<p>No 3094, Jalan Petra Jaya<br>93050 Kuching, Sarawak</p>
		<strong>Contact Info</strong>
		<p>(082) 835-0181<br><a href="mailto:andriana.jtutor@gmail.com">andriana.jtutor@gmail.com</a></p>
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
<?
if(isset($_SESSION['User']) and strtolower($_SESSION['User']) != "admin") {
	include("intercom.php");
}
?>

	<!--Script Source File-->
	<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>
<script src="js/all.js"></script>
<script src="js/custom.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/validator.js"></script>
<script src="js/contact.js"></script>
        <?include('cursor.html');?>
	<!--End Script Source File-->
</body>
</html>