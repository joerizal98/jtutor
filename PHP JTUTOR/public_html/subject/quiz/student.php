<!DOCTYPE html>
<?php include('header.php');?>
<?php include 'database.php'; ?>
<?php
/*
* Get total questions
*/
session_start();
$sub_id = $_GET['id'];
$name = $_GET['name'];
if(empty($sub_id) and empty($name)){
        header("Location: https://www.jtutor.ml/subject/Quiz/?id=".$id."&name=".$name);
}
$sql = "SELECT * FROM list WHERE sub_id='".$sub_id."' and filename='".$name."'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tb_name = $row['question'];
        $tb_mark = $row['mark'];
        
    }
}

$sql_check = "SELECT * FROM ".$tb_mark." WHERE student='".$_SESSION['User']."'";
$result_check = $mysqli->query($sql_check);
if ($result_check->num_rows > 0) {
    // output data of each row
    $url_quiz = "https://www.jtutor.ml/subject/quiz/final.php?id=".$_GET['id']."&name=".$_GET['name'];
}else{
    $url_quiz = "https://www.jtutor.ml/subject/quiz/question.php?id=".$_GET['id']."&name=".$_GET['name']."&n=1";
}


$query = "SELECT * FROM ".$tb_name;
//Get results
$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);	
$total = $results->num_rows;

if($total == 0 or empty($total)){
    //header("Location: https://www.jtutor.ml/subject/Quiz/?id=".$id."&name=".$name);
}

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
<!--===============================================================================================-->
    <meta name="viewport" content="user-scalable = no">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/css/util.css">
	<link rel="stylesheet" type="text/css" href="home/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<style type="text/css">
	    body{
	        background-image: url('home/images/background.jpg');
	        background-size: cover;
	    }

		th{
			font-family: Dimbo-Regular;
			text-align: center;
			font-size: 30px;
			padding-top: 30px;
		}
		.button{
			margin-top: 20px;
			width: 150px;
			height: 60px;
			background-image: url('home/images/start.png');
			background-repeat: no-repeat;
			background-size: 150px 60px;
		}
		span{
			color: #e888a1;
			text-shadow:
			      3px 3px 0 #7b0a41,
			     -2px -2px 0 #7b0a41,  
			      2px -2px 0 #7b0a41,
			      -2px 2px 0 #7b0a41,
			       2px 2px 0 #7b0a41;

			-webkit-animation:colorchange 1s infinite alternate;
		}

		@-webkit-keyframes colorchange {
	      0% {
	        
	        color: #e888a1;
	      }
	      100% {
	        
	        color: #ea5f83;
	      }
	      
	    }
	    .bg-contact2{
	        
	        background: rgba(219,21,99,0.8);
            background: -webkit-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
            background: -o-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
            background: -moz-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
            background: linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
    	    text-align:center;
	    }
	</style>

	<div class="bg-contact2" style="">

		<div class="container-contact2" style="padding-top: 100px">
			<div class="wrap-contact2" style="justify-content: center">
				<table style="color: white; width: 67%; height:80%;margin:auto; align-self: center;">
					<th valign="center" align="center">
						<br>
						<span>
							This is a Mutiple Choice Quiz <br>
							Number of Questions: <?php echo $total;  ?> <br>
							Type: Mutiple choice <br>
						</span>
						<button class="button" onmouseover="startbtnhover(this)" onmouseout="startbtn(this)" onclick="window.location.href='<?echo $url_quiz;?>';"></button>
					</th>
				</table>
			</div>
			

		</div>

	</div>





<!--===============================================================================================-->
	<script src="home/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/bootstrap/js/popper.js"></script>
	<script src="home/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="home/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script>
	    function startbtnhover(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/home/images/start_hover.png')";
        }
        
        function startbtn(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/home/images/start.png')";
        }
	</script>

</body>
</html>
