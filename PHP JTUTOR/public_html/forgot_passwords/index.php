<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    if($_GET['alert'] == "User Not Found"){
        $msg = "User Not Found";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }else if($_GET['alert'] == "success"){
        $msg2 = "Password reset instructions has been sent to your email";
        echo "<script type='text/javascript'>alert('$msg2');</script>";
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>JTutor - Reset Password</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="shortcut icon" href="../img/favicon.ico">
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Reset Password Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--google fonts-->
<link href='css/font.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<br><br>
<!--element start here-->
<div class="elelment">
	<h2>Forgot Your Password</h2>
	<div class="element-main">
		<h1>Forgot Password</h1>
		<p> Please enter email that you use to register with us</p>
		<form method="post" action="action.php">
			<input type="text" name="email" value="Your e-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your e-mail address';}" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required="">
			<input type="submit" value="Reset My Password">
		</form>
	</div>
</div>
<div class="copy-right">
			<p>© 2016 Reset Password JTutor. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--element end here-->
<? include('../cursor.html'); ?>
</body>
</html>