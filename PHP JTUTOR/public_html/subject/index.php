<?php include("header.php");?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- Include our stylesheet -->
	<link href="assets/css/styles.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
<?php
    require_once('connection.php');
    
    $id = $_GET['id'];
    
    
	$sql1 = "select * from tutor where code='".$id."'";
	$result1 = $con->query($sql1);
	
	while($row1 = $result1->fetch_assoc()) {
	    $dbcodes = $row1['code'];
	    $dbnames = $row1['name'];
	    $dbsubject = $row1['subject'];
	}
	$sql2 = "select * from subject where code='".$dbsubject."'";
    $result2 = $con->query($sql2);
    
    while($row2 = $result2->fetch_assoc()) {
        	    $subs1 = strtolower($row2['subject']);
        	    $subject1 = ucwords($subs1);
        	    $cat = $row2['academic'];
        	}
	
	if ($id == $dbcodes and !empty($_GET['id'])){
    	    
    	    $name = ucwords(strtolower($dbnames));
	        $id_code = $subject1." (".$cat.") - ".$name;
	        echo '<input type="hidden" style="" id="subject_name" value="'.$id_code.'">';
	        echo '<input type="hidden" style="" id="id_code" value="'.$id.'">';
	}else{
	        $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $redirect = str_replace("subject","Subject",$actual_link);
	        header("location: $redirect");
	        //
	}
	    
	
	    
?>

	<div class="filemanager">

		<div class="search">
			<input type="search" placeholder="Find a file.." style="display:block"/>
		</div>

		<div class="breadcrumbs">
		</div>
		<style type="text/css"></style>
		<ul class="data" style="padding-left:1%"></ul>
		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>

	</div>
	
	<style type="text/css">
		/* The Modal (background) */
	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
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
	.modal-contents {
	    background-color: #fefefe;
	    margin: auto;
	    padding: 20px;
	    border: 1px solid #888;
	    width: 80%;
	    border-radius: 10px;
	}

	/* The Close Button */
	.close {
	    color: #aaaaaa;
	    float: right;
	    font-size: 28px;
	    font-weight: bold;
	}

	.close:hover,
	.close:focus {
	    color: #000;
	    text-decoration: none;
	    cursor: pointer;
	}
	
	.title {
	    padding-top:5%;
	    color: #000;
	    text-align: center;
	    font-size: 28px;
	    font-weight: bold;
	}

	#myBtn{
	    background-color: #6610f2;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
	}
	#myBtn:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        background-color: #800080;
    }
    
	</style>

	<!-- Trigger/Open The Modal -->
	
	<?php 
        session_start();
        $id2 = $_GET['id'];
        $usr = $_SESSION['User'];
	    require_once('connection.php');
	    $query = "select * from tutor where code='".$id2."' AND username='".$usr."'";
        $resultbtn=mysqli_query($con,$query);
        if(mysqli_num_rows($resultbtn)>0){
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button id="myBtn">
                        <i class="fas fa-boxes"></i> Manage Category and File
                    </button>';
        }
        
	?>
	<br><br>

	<!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- Modal content -->
	  <div class="modal-contents">
	    <span class="close" style="float:right">&times;</span>
	    <center><span  class="title"><br>Manage Category and Files</span></center>
	    <iframe src="file_manager.php?f=<?php echo $id_code;?>&id_code=<?php echo $_GET['id'];?>" frameBorder="0" scrolling="yes" style="width: 100%; height: 400px">Browser Not Compatible</iframe><br><br
	  </div>

	</div>

	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}

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
	</script>
	
	</div>
	<!-- Include our script files -->
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script src="assets/js/script.js"></script>
	<? include('../cursor.html'); ?>
</body>
</html>
