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
        
    }
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
	    
	    .bg-contact2{
	        
	        background: rgba(219,21,99,0.8);
            background: -webkit-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
            background: -o-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
            background: -moz-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
            background: linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
    	    text-align:center;
	    }

		th{
			font-family: Dimbo-Regular;
			text-align: center;
			font-size: 30px;
			padding-top: 30px;
		}
		.button{
			width: 150px;
			height: 60px;
			background-repeat: no-repeat;
			background-size: 150px 60px;
		}

		.start{
			background-image: url('home/images/start.png');
		}

		.edit{
			background-image: url('home/images/edit.png');
		}

		.add{
			background-image: url('home/images/add.png');
		}

		.mrk{
			background-image: url('home/images/mark.png');
		}

		.spans{
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

	    .wrap-contact2 {
		  width: 500px;
		  height: 470px;
		  background: url("home/images/menu.png");
		  background-size:     500px 470px;                      /* <------ */
		  background-repeat:   no-repeat;
		  border-radius: 10px;
		  overflow: hidden;
		  padding-left: 1%;
		  padding-top: 5%;
		}
	</style>

	<div class="bg-contact2">

		<div class="container-contact2" style="padding-top: 100px">
			<div class="wrap-contact2" style="justify-content: center">
				<table style="color: white; width: 67%; height:80%;margin:auto; align-self: center;">
					<th valign="center" align="center">
						<br>
						<span class="spans">
							This is a Mutiple Choice Quiz <br>
							Number of Questions: <?php echo $total;  ?> <br>
							Type: Mutiple choice <br>
						</span>
						<button class="button start" onmouseover="startbtnhover(this)" onmouseout="startbtn(this)" style="margin-top: 20px" onclick="window.location.href='question.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>&n=1';"></button>
						<button class="button add" onmouseover="addbtnhover(this)" onmouseout="addbtn(this)" onclick='myFunction()'></button><br>
						<button class="button edit" onmouseover="editbtnhover(this)" onmouseout="editbtn(this)" onclick='function_Edit()'></button>
						<button class="button mrk" onmouseover="markbtnhover(this)" onmouseout="markbtn(this)" onclick='function_Mark()'></button>
					</th>
				</table>
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
            border-radius: 20px;
            background-color: #fefefe;
            margin-top:0px;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
        }
        
        /* The Close Button */
        .close_btn {
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
        <span class="close_btn close">&times;</span>
        <p><iframe id="profile" src="https://www.jtutor.ml/subject/quiz/add.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>" style="width:100%; height:990px" frameBorder="0" scrolling="no"></iframe></p>
      </div>
    <br><br>
    </div>
    
    <div id="mark" class="modals">
    
      <!-- Modal content -->
      <div class="modals-content" style="background-color: #c4d3f6;">
        <span class="close close_mark">&times;</span>
        <p><iframe id="profile" src="https://www.jtutor.ml/subject/quiz/mark.php?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>" style="width:100%; height:400px" frameBorder="0" scrolling="yes"></iframe></p>
      </div>
    </div>
    
    <div id="edit" class="modals">
    
      <!-- Modal content -->
      <div class="modals-content" style="background-color: #c4d3f6;">
        <span class="close close_edit">&times;</span>
        <p><iframe id="profile" src="https://www.jtutor.ml/subject/quiz/edit?id=<?echo $_GET['id']?>&name=<?echo $_GET['name']?>" style="width:100%; height:400px" frameBorder="0" scrolling="yes"></iframe></p>
      </div>
    </div>
    
    <script>
        function myFunction() {
            var modal = document.getElementById('myModal');
        
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
        
            // When the user clicks the button, open the modal 
        
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
        
        function function_Mark() {
            var modal = document.getElementById('mark');
        
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close_mark")[0];
        
            // When the user clicks the button, open the modal 
        
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
        
        function function_Edit() {
            var modal = document.getElementById('edit');
        
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close_edit")[0];
        
            // When the user clicks the button, open the modal 
        
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
        
        function addbtnhover(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/home/images/add_hover.png')";
        }
        
        function addbtn(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/home/images/add.png')";
        }
        
        function editbtnhover(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/home/images/edit_hover.png')";
        }
        
        function editbtn(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/home/images/edit.png')";
        }
        
        function markbtnhover(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/home/images/mark_hover.png')";
        }
        
        function markbtn(x) {
            x.style.backgroundImage = "url('https://www.jtutor.ml/subject/quiz/home/images/mark.png')";
        }
	</script>
</body>
</html>
