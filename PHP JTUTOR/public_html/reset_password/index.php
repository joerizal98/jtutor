<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

    $uri = str_replace("reset_password","Reset_password",$_SERVER[REQUEST_URI]);
    
    if(!empty($_GET['hash'])){
        require_once('connection.php');
        $query="select * from reset_password where hash='".$_GET['hash']."'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result) == 0){
            header("location: https://www.jtutor.ml".$uri);
        }else{
            while($row = mysqli_fetch_assoc($result))
            {
              $email = $row['email'];
            }
        }
    }else{
        header("location: https://www.jtutor.ml".$uri);
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>JTutor - Reset Password</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<link rel="shortcut icon" href="../img/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Reset Password Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--google fonts-->
<link href='css/font.css' rel='stylesheet' type='text/css'>
</head>
<body>
<!--element start here-->
<div class="elelment">
	<h2>Reset Your Password</h2>
	<div class="element-main">
		<h1>Reset Password</h1>
		<p> Please enter new password you want</p>
		<form onsubmit="return validateForm()" name="myForm" method="post" action="action.php?email=<?echo $email;?>">
			<input type="password" name="new_pass" placeholder="New Password" required="">
			<input type="password" name="confirm_pass" placeholder="Confirm Password" required="">
			<a id="error" style="color:red"></a>
			<a id="errors" style="color:red"></a>
			<input type="submit" value="Reset Password">
			
		</form>
	</div>
</div>
<div class="copy-right">
			<p>© 2016 Reset Password JTutor. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>

<!--element end here-->
<script type="text/javascript">
	function validateForm() {
            var n = document.forms["myForm"]["new_pass"].value;
            var c = document.forms["myForm"]["confirm_pass"].value;
            var np = n.length;
            var nc = c.length;
            
            if (n != c) {
                document.getElementById("error").innerHTML = "Password Not Matching";
                return false;
            }else if((np < 5 || cp <5 ) && (n == c)){
                document.getElementById("error").innerHTML = "Password Must More Than 5 Character";
                return false;
            }
            
        }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<? include('../cursor.html'); ?>
</body>
</html>