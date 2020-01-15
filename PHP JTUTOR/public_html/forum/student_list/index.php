<!DOCTYPE html>
<?include('header.php');?>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Student Name</th>
								<th class="column100 column2" data-column="column2">Date</th>
								<th class="column100 column3" data-column="column3">Time</th>
							</tr>
						</thead>

						<tbody>
						<?php
                            session_start();
                            include_once('../config.php');
                            date_default_timezone_set("Asia/Kuala_Lumpur");
                            $nowt = date('H:i:s');
                            $nowd = date('Y-m-d');
                            $scode = $_GET['id'];
                            $file_name = $_GET['name'];
                        
                            $scode = $_GET['id'];
                            $file_name = $_GET['name'];
                            $list= mysqli_query($conn , "SELECT * FROM list WHERE sub_id='".$scode."' and filename='".$file_name."'");
                            while ($row_list = mysqli_fetch_assoc($list)){
                                $db_chat = $row_list['chat'];
                            }
                            $list_student= mysqli_query($conn , "SELECT * FROM ".$db_chat);
                            while ($row_list_student = mysqli_fetch_assoc($list_student)){
                                echo '
                                <tr class="row100">
								<td class="column100 column1" data-column="column1">'.$row_list_student['student'].'</td>
								<td class="column100 column2" data-column="column2">'.$row_list_student['time'].'</td>
								<td class="column100 column3" data-column="column3">'.$row_list_student['date'].'</td>
							    </tr>
                                ';
                            }
                        ?>
						</tbody>
					</table>
				</div>

				
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>