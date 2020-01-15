<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>JTutor - Registration</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web font -->
</head>

<body>
	<?php include 'header.html';?>
	<!-- main -->
	<div class="" style="margin-top: 10%; margin-bottom: 5%">
		<h1 style="color: #ffffff">JTutor Registration for Student
		</h1>
		<div class="register-form">
			<form action="#" method="post" action="register.php">
				<div class="fields-grid">
					<div class="styled-input-2">
						<label class="header">Login Info</label>
						<div class="styled-input">
							<input type="text" placeholder="Email" name="email" required="">
						</div>
						<div class="styled-input">
							<input type="text" placeholder="UserName" name="username" required="">
						</div>
						<div class="styled-input">
							<input type="text" placeholder="Password" name="password" required="">
						</div>
						<div class="styled-input">
							<input type="text" placeholder="Confirm Password" name="confirm_password" required="">
						</div>
					</div>
				</div>
				<div class="fields-grid">
					<div class="styled-input-2">
						<label class="header">User Information</label>
						<div class="styled-input">
							<input type="text" placeholder="First Name" name="fname" required="">
						</div>
						<div class="styled-input">
							<input type="text" placeholder="Last Name" name="lname" required="">
						</div>
						<div class="styled-input">
							<input id="datepicker" placeholder="Birth Date" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<select class="category2" name="gender" required="">
								<option value="">Gender</option>
								<option value="">Female</option>
								<option value="">Male</option>
							</select>
						</div>
						<div class="styled-input">
							<input type="text" placeholder="Phone Number" name="pno" required="">
						</div>
					</div>
				</div>
				<div class="fields-grid">
					<div class="styled-input-2">
						<label class="header">User Address</label>
						<div class="styled-input">
							<input type="text" name="address" placeholder="Address" title="Please enter your Address" required="">
						</div>
						<div class="styled-input">
							<input type="text" name="city" placeholder="City" title="Please enter your City" required="">
						</div>
						<div class="styled-input">
							<input type="text" name="zip code" placeholder="Zip Code" title="Please enter your Zip code" required="">
						</div>
					</div>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="Submit">
				<input type="button" value="Back" onclick="location.href='../login/';">
			</form>
		</div>
	</div>
	<!-- //main -->
	<?php include 'footer.html';?>
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>

	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

</body>

</html>