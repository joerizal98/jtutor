<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include 'header.php';?>
<html>
	<head>
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
				$code = $_GET["code"];
				require_once("connection.php");
				$sql = "SELECT * FROM tutor WHERE subject = '".$code."'";
				$result = mysqli_query($con, $sql);
				

				while ($row = mysqli_fetch_array($result)) {
				    $sqln = "SELECT * FROM user WHERE username = '".$row['username']."'";
				    $resultn = mysqli_query($con, $sqln);
				    while ($rown = mysqli_fetch_array($resultn)) {
				        $full_name = $rown["fistname"]." ".$rown["lastname"];
				        $folder = $rown["folder"];
				        $dp = $rown["dp"];
				        
				        $sql23="SELECT * FROM user_course WHERE name='".$_SESSION['User']."' and subject_id= '".$row["code"]."'";
        				$result23=mysqli_query($con,$sql23);
        				$rowcount23=mysqli_num_rows($result23);
        				
        				$sql24="SELECT * FROM user WHERE username='".$_SESSION['User']."' and role='teacher'";
        				$result24=mysqli_query($con,$sql24);
        				$rowcount24=mysqli_num_rows($result24);
        				
        				if($rowcount23 > 0 or $rowcount24 > 0){
        				    $nodb = 1;
        				}else{
        				    $nodb = 2;
        				}
				    }
				    if($dp == "user.png"){
				        $img = 'images/pic01.jpg';
				    }else{
				        $img = 'https://jtutor.ml/user_avatar/'.$folder.'/'.$dp;
				    }
					echo "<div class='box'>";
					echo "<a class='' style='height:300px; width:267px;'><img src='".$img."' alt='1' style='height:350px; width:100%; '/></a>";
					echo "<div class='inner'>";
					echo "<h3>" .$full_name. "</h3>";
					$username = $row['username'];
					echo "<a  class='button style3 fit' data-poptrox='youtube,800x400' target='_parent' onclick='myFunction("?><?echo '"https://jtutor.ml/user_bio/?id='.$username.'&dt=0&csr='.$nodb.'&id_code='.$row["code"].'&subject='.$code.'"'?><? echo ")'>View More</a>";
					echo "</div></div>";
					

				};
				
			?>
			</div>
			</div>
				</div>
	<style>
        .modals {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 5; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        /* Modal Content */
        .modals-content {
            background-color: #fefefe;
            margin-top:0px;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
        }
        
        /* The Close Button */
        .close {
            color: #000;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: red;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
				
	<div id="myModal" class="modals">
    
      <!-- Modal content -->
      <div class="modals-content">
        <span class="close">&times;</span>
        <p><iframe id="profile" style="width:100%; height:470px" frameBorder="0" scrolling="yes"></iframe></p>
      </div>
    
    </div>

    <script>
        function myFunction(name) {
            var modal = document.getElementById('myModal');
        
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
        
            // When the user clicks the button, open the modal 
        
                document.getElementById('profile').src = name;
                modal.style.display = "block";
        
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
        
            }
        
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        
        }
    </script>
			
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
        <? include('../../../cursor.html'); ?>
	</body>
</html>
<?php include 'footer.html';?>