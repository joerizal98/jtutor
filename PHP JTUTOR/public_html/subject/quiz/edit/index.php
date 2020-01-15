<!DOCTYPE html>
<?php include '../database.php'; ?>
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

?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable = no">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <style>
            body::-webkit-scrollbar-track
            {
            	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            	border-radius: 10px;
            	background-color: #F5F5F5;
            }
            
            body::-webkit-scrollbar
            {
            	width: 12px;
            	background-color: #F5F5F5;
            }
            
            body::-webkit-scrollbar-thumb
            {
            	border-radius: 10px;
            	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            	background-color: #555;
            }
        </style>

    </head>
    
    <body>

        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class=" text-center" style="padding-left:5%">
                    <?
                    $query = "SELECT * FROM ".$tb_name." ORDER BY question_number";
                    //Get results
                    $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
                    if ($results->num_rows > 0) {
                        // output data of each row
                        while($row_question = $results->fetch_assoc()) {
                            $question = $row_question['question_number'];
                            echo '
                            <div class="menu-item blue" style="margin-right: 5%; width: 20%">
                                <a href="edit.php?id='.$sub_id.'&name='.$name.'&qno='.$question.'" data-toggle="modal">
                                    <i class="fa fa-magic"></i>
                                    <p>Question '.$question.'</p>
                                </a>
                            </div>';
                        }
                    }
                    ?>
                   
                        
                    </div>
        </div>
        <!-- End Main Body Section -->
        
        <!-- End Testimonial Section -->
                <?php
    				if(!empty($_GET['msg'])){
    					echo "<script type='text/javascript'>alert('".$_GET["msg"]."');</script>";
    				}
			    ?>
			    <? include('../../../cursor.html'); ?>
    </body>
    
</html>