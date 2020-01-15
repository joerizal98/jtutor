<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include 'header.php';?>
<html>
	<head>
		<title>Full Motion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<style type="text/css">
		html{ 
			background: url(landing.png)repeat center 0px;
			background-repeat: no-repeat;
			background-size: 100% 100%;
    		background-attachment: fixed;
		}
	</style>
	<body id="top">

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
			<div id="main">
					<div class="inner">
					<div class="thumbnails">

			<?php
				require_once("connection.php");
				$sql = "SELECT * FROM user";
				$result = mysqli_query($con, $sql);

				while ($row = mysqli_fetch_array($result)) {
					echo "<div class='box'>";
					echo "<a href='#' class='image fit'><img src='images/pic01.jpg' alt='1' /></a>";
					echo "<div class='inner'>";
					echo "<h3>" .$row["name"]. "</h3>";
					echo "<a href='#' class='button style3 fit' data-poptrox='youtube,800x400' target='_parent'>Select Tutor</a>";
					echo "</div></div>";
				};
			?>
			</div>
			</div>
				</div>
			
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php include 'footer.html';?>