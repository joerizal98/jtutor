<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>JTutor - Online Tutor</title>
		<link rel="shortcut icon" href="../img/favicon.ico">
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
					<center><img src="images/title.png" style="width: 50%;padding-bottom: 10px"></center>
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								<?php 
									require_once('../connection.php');
									$name = $_SESSION['User'];
									$sql = "SELECT * FROM category";
									$result = mysqli_query($con, $sql);

									while ($row = mysqli_fetch_array($result)) {
										$cat = $row['category'];
										$rnum = rand();
										echo '<section class="4u" style="margin-bottom:3%;">
												<form method="get" action="subject" target="_parent">
													<input type="hidden" name="subject" value="'.$cat.'">
													<button type="submit" style="border: 0; padding: 0; margin:0; cursor: pointer; background: transparent" class="image featured">
														<img src="images/'.$cat.'.png" alt="'.$cat.'">
													</button>
												</form>
											</section>';
									}
								?>
							</div>
						</div>
					</div>
				</div>
				<? include('../cursor.html'); ?>
				
		
	</body>
	<?include "footer.html";?>
</html>
