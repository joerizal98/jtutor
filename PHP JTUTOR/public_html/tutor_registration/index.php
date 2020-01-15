
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
  session_start();

  $mysqli = new mysqli('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut');
  
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
    require_once('connection.php');
    $query9="select * from user where username='".$_POST['username']."' or email='".$_POST['email']."'";
    $result9=mysqli_query($con,$query9);
        
    
    
if(mysqli_fetch_assoc($result9)) {
    echo '<script type="text/javascript">alert("Username or Email Already Taken");';
    echo 'window.location.href="../tutor_registration";</script>';
}else{
    $ranum = rand();
    $folder = $_POST['username'].$ranum;
    $avatar_path = $mysqli->real_escape_string('../user_avatar/'.$folder.'/'.$_FILES['avatar']['name']);
    $edufiles_path = $mysqli->real_escape_string('../edu_files/'.$folder.'/'.$_FILES['edufiles']['name']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $fname = $mysqli->real_escape_string($_POST['fname']);
    $lname = $mysqli->real_escape_string($_POST['lname']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $date = $mysqli->real_escape_string($_POST['date']);
    $gender = $mysqli->real_escape_string($_POST['gender']);
    $no = $mysqli->real_escape_string($_POST['pno']);
    $edu = $mysqli->real_escape_string($_POST['edu']);
    $sub1 = $mysqli->real_escape_string($_POST['sub1']);
    $sub2 = $mysqli->real_escape_string($_POST['sub2']);
    $address =  $mysqli->real_escape_string($_POST['address'].', '.$_POST['city'].', '.$_POST['zipcode']);
    $hash = md5( rand(0,1000) );
    
    //make sure Education Files type is image
    if (preg_match("!image!", $_FILES['edufiles']['type'])){

      //if avatar is set
      if (preg_match("!image!", $_FILES['avatar']['type'])){
        //set avatar base on user image
        if (!file_exists('../user_avatar/'.$folder)) {
            mkdir('../user_avatar/'.$folder, 0777, true);   
        }
        if (!file_exists('../edu_files/'.$folder)) {
            mkdir('../edu_files/'.$folder, 0777, true);   
        }
        if((copy($_FILES['avatar']['tmp_name'], $avatar_path)) and copy($_FILES['edufiles']['tmp_name'], $edufiles_path)){
            $avatar = $mysqli->real_escape_string($_FILES['avatar']['name']);
            $edufiles = $mysqli->real_escape_string($_FILES['edufiles']['name']);
            $sql = "INSERT INTO confim_tutor (dp, username, role, fname, lname, email, birthday, gender, no, address, subject1, subject2, edu, eduimg, folder, hash)" . "VALUES ('$avatar', '$username', 'teacher', '$fname', '$lname', '$email', '$date', '$gender', '$no', '$address', '$sub1', '$sub2', '$edu', '$edufiles', '$folder', '$hash')";
            if ($mysqli->query($sql) == true){
              echo '<script type="text/javascript">alert("You just signed up successfully! Kindly allow 1-3 days for our team to approve your application");';
                echo 'window.location.href="../login";</script>';
            }else{
              echo mysqli_error($con);
              echo "<script type='text/javascript'>alert('Database Error!');</script>";
            }

        }
        else{
          echo "<script type='text/javascript'>alert('Image For Avatar Is Not Image!, Please Upload an Image Type');</script>";  
        }
        
      }else{
        if (!file_exists('../user_avatar/'.$folder)) {
            mkdir('../user_avatar/'.$folder, 0777, true);
        }
        if (!file_exists('../edu_files/'.$folder)) {
            mkdir('../edu_files/'.$folder, 0777, true);   
        }
        //set avatar to default
        if(copy($_FILES['edufiles']['tmp_name'], $edufiles_path)){
          $avatar = $mysqli->real_escape_string('user.png');
          $edufiles = $mysqli->real_escape_string($_FILES['edufiles']['name']);
          $sql = "INSERT INTO confim_tutor (dp, username, role, fname, lname, email, birthday, gender, no, address, subject1, subject2, edu, eduimg, folder, hash)" . "VALUES ('$avatar', '$username', 'teacher', '$fname', '$lname', '$email', '$date', '$gender', '$no', '$address', '$sub1', '$sub2', '$edu', '$edufiles', '$folder', '$hash')";

          if ($mysqli->query($sql) == true){
              echo '<script type="text/javascript">alert("You just signed up successfully! Kindly allow 1-3 days for our team to approve your application");';
              echo 'window.location.href="../login";</script>';
          }else{
              echo "<script type='text/javascript'>alert('Database Error!');</script>";
          }

        }else{
            echo "<script type='text/javascript'>alert('File You Upload in Education Field is not Image Type, Please Upload It In Image Type');</script>";
        } 
      }
    }else{
      echo "<script type='text/javascript'>alert('File You Upload in Education Field is not Image Type, Please Upload It In Image Type');</script>";
    }
}
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>JTutor - Registration</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

	<link href="../fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.min.css">
	<link rel="stylesheet" href="css/avatar.css">
</head>

<body>
	<?php include 'header.html';?>
	<!-- main -->
	<div class="" style="margin-top: 10%; margin-bottom: 5%">
		<h1 style="color: #ffffff">JTutor Registration for Tutor</h1>
		<div class="register-form">
			<form onsubmit="return validateForm()" method="post" action="index.php" target="_parent" enctype="multipart/form-data">
				<!-- Start User Avatar Field -->
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
				<!-- End User Avatar Field -->
				<style type="text/css">
					input[type="date"]:before {
					  content: attr(placeholder) ": " !important;
					}
					input[type="date"]:focus:before {
					  content: '' !important;
					}
				</style>
				<!-- Start User Information Field -->
				<div class="fields-grid">
					<div class="styled-input-2">
						<label class="header">User Information</label>
						<div class="styled-input">
							<!-- Username Input Field -->
							<input type="text" placeholder="Username" name="username" required="">
						</div>
						<div class="styled-input">
							<!-- Username Input Field -->
							<input type="email" placeholder="Email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" name="email" required="">
						</div>
						<div class="styled-input">
							<!-- First Name Input Field -->
							<input type="text" placeholder="First Name" name="fname" required="">
						</div>
						<div class="styled-input">
							<!-- Last Name Input Field -->
							<input type="text" placeholder="Last Name" name="lname" required="">
						</div>
						<div class="styled-input">
							<input placeholder="Birth Date " name="date" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" value="" required="" id="mypick" onchange="mydate()">
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
				<!-- End User Information Field -->
				<!-- Start User Address Field -->
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
				<!-- End User Address Field -->
				<!-- Start User Qualifation Field -->
				<div class="fields-grid">
					<div class="styled-input-2">
						<label class="header">Qualification</label>
						<div class="styled-input">
							<select class="category2" name="edu" required="">
								<option value="">Education Level?</option>
								<option value="Bachelor">Bachelor's</option>
								<option value="Master">Master</option>
								<option value="Diploma">Diploma</option>
							</select>
						</div>
						<div class="styled-input">
							<input type="file" name="edufiles" accept="image/*" required="">
						</div>
						<span style="color: white">* Please upload your certificate in image type based on what you select.</span>
					</div>
					<div class="clear"> </div>
				</div>
				<!-- End User Qualification Field -->
				<!-- Start Subject Selection Field -->
				<div class="fields-grid">
					<div class="styled-input-2">
						<label class="header">Choose Subject</label>
						<div class="styled-input">
							<select class="category2" id="cat1" name="sub1" required="">
								<option value="">Select Subject</option>
								<option value="bm110">SPM - Bahasa Melayu</option>
								<option value="eng110">SPM - English</option>
								<option value="sej110">SPM - Sejarah</option>
								<option value="sci110">SPM - Science</option>
								<option value="math110">SPM - Mathematics</option>
								<option value="pi110">SPM - Islamic Education</option>
								<option value="pm110">SPM - Moral Education</option>
								<option value="bm120">PT3 - Bahasa Melayu</option>
								<option value="eng120">PT3 - English</option>
								<option value="sej120">PT3 - Sejarah</option>
								<option value="sci120">PT3 - Science</option>
								<option value="math120">PT3 - Mathematics</option>
								<option value="pi120">PT3 - Islamic Education</option>
								<option value="kh120">PT3 - Kemahiran Hidup</option>
								<option value="geo120">PT3 - Geografi</option>
								<option value="bm130">UPSR - Bahasa Melayu</option>
								<option value="eng130">UPSR - English</option>
								<option value="sci130">UPSR - Science</option>
								<option value="math130">UPSR - Mathematics</option>
							</select>
						</div>
						<div class="styled-input">
							<select class="category2" id="cat2" name="sub2" required="">
								<option value="">Select Subject</option>
								<option value="bm110">SPM - Bahasa Melayu</option>
								<option value="eng110">SPM - English</option>
								<option value="sej110">SPM - Sejarah</option>
								<option value="sci110">SPM - Science</option>
								<option value="math110">SPM - Mathematics</option>
								<option value="pi110">SPM - Islamic Education</option>
								<option value="pm110">SPM - Moral Education</option>
								<option value="bm120">PT3 - Bahasa Melayu</option>
								<option value="eng120">PT3 - English</option>
								<option value="sej120">PT3 - Sejarah</option>
								<option value="sci120">PT3 - Science</option>
								<option value="math120">PT3 - Mathematics</option>
								<option value="pi120">PT3 - Islamic Education</option>
								<option value="kh120">PT3 - Kemahiran Hidup</option>
								<option value="geo120">PT3 - Geografi</option>
								<option value="bm130">UPSR - Bahasa Melayu</option>
								<option value="eng130">UPSR - English</option>
								<option value="sci130">UPSR - Science</option>
								<option value="math130">UPSR - Mathematics</option>
							</select>
						</div>
						<span style="color: white">* You can only teach 2 subject. Choose Wisely.</span>
					</div>
					<div class="clear"> </div>
				</div>
				<!-- End Subject Selection Field -->

				<!-- Submit User Information and Cancel Button -->
				<input type="submit" value="Submit">
				<input type="button" value="Back" onclick="location.href='../login/';">
			</form>
		</div>
	</div>
	<!-- //main -->

	<!-- Webpage Footer -->
	<?php include 'footer.html';?>
	<script>
        function mydate() {
            //var x = document.getElementById("mypick").value;
            var x = new Date(document.getElementById("mypick").value).getFullYear();
            var y = new Date().getFullYear();
            if (y - x >= 20){
                document.getElementById('message2').innerHTML = '';
                document.getElementById("s").style.display = "none"
                
            }else{
                document.getElementById('message2').style.color = 'red';
                document.getElementById('message2').innerHTML = 'Birth Date is Invalid';
                document.getElementById("s").style.display = "block"
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
    
    <script>
        function validateForm() {
            var x = new Date(document.getElementById("mypick").value).getFullYear();
            var y = new Date().getFullYear();
            
            var cat1 = document.getElementById("cat1").value;
            var cat2 = document.getElementById("cat2").value;
            if ( 20 > y - x){
                alert("Invalid Birth Date");
                return false;
            }else if (cat1 == cat2){
                alert("Cannot choose same subject");
                return false;
            }
            
            
        }
    </script>

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>

	<!-- Calendar Script -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<!-- //Calendar Script -->

	<!-- Avatar Script -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script  src="js/avatar.js"></script>
	<script src="../js/validator.js"></script>
    <script src="../js/contact.js"></script>
	<!-- //Avatar Script -->
	<?include("../cursor.html");?>

</body>

</html>