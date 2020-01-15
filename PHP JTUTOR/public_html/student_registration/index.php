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
	<link href="../fonts/acme/acme.css" rel="stylesheet">
	<link href="../fonts/cyrillic/cyrillic.css" rel="stylesheet">
	<!-- //web font -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="css/avatar.css">
</head>

<body>
	<?php include 'header.html';?>
	<!-- main -->
	<div class="" style="margin-top: 10%; margin-bottom: 5%">
		<h1 style="color: #ffffff">JTutor Registration for Student</h1>
		<div class="register-form">
			<form onsubmit="return validateForm()" method="post" action="register.php" target="_parent" name="myForm" enctype="multipart/form-data">
				<div class="fields-grid">
					<div class="styled-input-2">
						<div class="header">
							<div class="container">
							    <div class="avatar-upload">
							        <div class="avatar-edit">
							            <input type="file" id="imageUpload" name="avatar" accept="image/*"/>
							            <label for="imageUpload"></label>
							        </div>
							        <div class="avatar-preview">
							            <div id="imagePreview" style="background-image: url(../user_avatar/user.png);">
							            </div>
							        </div>
							    </div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="fields-grid">
					<div class="styled-input-2">
						<label class="header">Login Info</label>
						<div class="styled-input">
							<input type="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" placeholder="Email" name="email" required="">
						</div>
						<div class="styled-input">
							<input type="text" placeholder="UserName" name="username" required="">
						</div>
						<div class="styled-input">
							<input type="password" id="password" placeholder="Password" name="password" required="" onkeyup='check();'>
						</div>
						<div class="styled-input">
							<input type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password" required="" onkeyup='check();'>
						</div>
						    <span id='message'></span>
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
						    
							<input placeholder="Birth Date" name="date" type="text" value="" required="" onfocus="(this.type='date')" onfocusout="(this.type='date')" id="mypick" onchange="mydate()">
						</div>
						    <span id='message2'></span>
						    <p id="s" style="display:none"><p>
						<div class="styled-input agile-styled-input-top">
							<select class="category2" name="gender" required="">
								<option value="">Gender</option>
								<option value="Female">Female</option>
								<option value="Male">Male</option>
							</select>
						</div>
						<div class="styled-input">
							<input type="text" placeholder="Phone Number" name="pno" required="" onkeypress='validate(event)'>
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
							<input type="text" name="zipcode" placeholder="Zip Code" title="Please enter your Zip code" required="" onkeypress='validate(event)'>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="Submit" name="Submit">
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
	<!-- //Calendar -->

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  

    <script  src="js/avatar.js"></script>
    <script>
        var check = function() {
            if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
                document.getElementById('message').innerHTML = '';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password not Matching';
            }
        }
        
        function mydate() {
            var x = document.getElementById("mypick").value;
            var y = "2011-01-01";
            if (x > y){
                document.getElementById('message2').style.color = 'red';
                document.getElementById('message2').innerHTML = 'Birth Date is Invalid';
                document.getElementById("s").style.display = "block"
            }else{
                document.getElementById('message2').innerHTML = '';
                document.getElementById("s").style.display = "none"
            }
        }
        
        function validate(evt) {
          var theEvent = evt || window.event;
        
          // Handle paste
          if (theEvent.type === 'paste') {
              key = event.clipboardData.getData('text/plain');
          } else {
          // Handle key press
              var key = theEvent.keyCode || theEvent.which;
              key = String.fromCharCode(key);
          }
          var regex = /[0-9]|\-/;
          if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
          }
        }
    </script>
    
    <!--Password Check Before Submit-->
    <script>
        function validateForm() {
            var n = document.forms["myForm"]["password"].value;
            var c = document.forms["myForm"]["confirm_password"].value;
            
            var pick_date = document.getElementById("mypick").value;
            var date = "2011-01-01";
            if (n != c) {
                alert("Password Not Matching");
                return false;
            }else if (pick_date > date){
                alert("Invalid Birth Date");
                return false;
            }
        }
    </script>
    <script src="../js/validator.js"></script>
    <script src="../js/contact.js"></script>
    <? include('../cursor.html'); ?>
</body>

</html>