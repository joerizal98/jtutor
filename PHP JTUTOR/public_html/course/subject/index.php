<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
	if(empty($_GET['subject'])) {
		header("Location: ../../course");
	}
?>


<html>
	<head>
		<title>JTutor - Online Tutor</title>
		<link rel="shortcut icon" href="images/favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
		<?php include 'header.php';?>
		<!-- Wrapper -->
			<div class="wrapper style1">
				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
						<?php
							require_once("connection.php");
							$cat = $_GET["subject"];
							$sql = "SELECT * FROM subject where academic = '".$cat."'";
							$result = mysqli_query($con, $sql);
						?>
						<?php
								while ($row = mysqli_fetch_array($result)) {
								$code = $row['code'];
								$csr = $row['subject'];
								$desc = $row['description'];
								$rnum = rand();
								if (empty($desc)){
									$info = '<br><br>';
								}else{
									$info = $row['description'];
								}
								echo '
								
								<section class="4u" style="margin-bottom: 3%">
								<form method="get" action="tutor" target="_parent"><input type="hidden" name="code" value="'.$code.'">
								<button type="submit" style="border: 0; padding: 0; margin:0; cursor: pointer; background: transparent" class="image featured"><img src="images/'.$code.'.png" alt="'.$csr.'"></button>
									<div class="box">
										<p>'.$info.'.</p>
										<input type="submit" value="View More" class="button"></form></div>
								</section>';}
						?>
						
							</div>

						</div>
					</div>
				</div> 
				
		<? include('../../cursor.html'); ?>
	</body>
	<?php include 'footer.html';?>
	</script>
</html>
