<!DOCTYPE html>
<?php
    include('database.php');
    session_start();
    $sub_id = $_GET['id'];
    $name = $_GET['name'];
    
    $sql = "SELECT * FROM list WHERE sub_id='".$sub_id."' and filename='".$name."'";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $tb_name = $row['question'];
            $tb_mark = $row['mark'];
            
        }
    }
    
    
?>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="mark/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mark/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mark/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mark/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mark/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mark/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mark/css/util.css">
	<link rel="stylesheet" type="text/css" href="mark/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
	    
		<div class="container-table100">
			<div class="wrap-table100">
			    
					<div class="table">
						<div class="row header">
							<div class="cell">
								Student
							</div>
							<div class="cell">
								Mark
							</div>
						</div>
                        <?
                        
                        $sql_check = "SELECT * FROM ".$tb_mark;
                        $result_check = $mysqli->query($sql_check);
                        while($row_mark = $result_check->fetch_assoc()) {
                                $student_name = $row_mark['student'];
                                $id = $row_mark['id'];
                                $mark_score = $row_mark['mark'];
                                if($student_name != $_SESSION['User']){
                                    echo'   <div class="row">
                    						    <div class="cell" data-title="Full Name">
                    								'.$student_name.'
                    							</div>
                    							<div class="cell" data-title="Location" style="width: 20%">
                    								'.$mark_score.'%
                    							</div>	
                    						</div>';
                                }
                                
                                
                                
                        }
                        
                        ?>
						

					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="mark/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="mark/vendor/bootstrap/js/popper.js"></script>
	<script src="mark/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="mark/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="mark/js/main.js"></script>
<? include('../../cursor.html'); ?>
</body>
</html>