<?php include 'database.php'; ?> 
<?php
	session_start();
    if(!isset($_SESSION['User']))
    {
        header("location: https:www.jtutor.ml/login");
    }else if(empty($_GET['id']) and empty($_GET['no']) and !isset($_SESSION['User'])){
		header("Location: https://www.jtutor.ml/subject/Quiz/final.php");
	}else{
	    
	    $sub_id = $_GET['id'];
        $name = $_GET['name'];
        
        /*
        * Get Table Name
        */
        $sql = "SELECT * FROM list WHERE sub_id='".$sub_id."' and filename='".$name."'";
        $result = $mysqli->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $tb_name = $row['question'];
                $tb_choice = $row['answer'];
                $tb_student_answer = $row['student_answer'];
                $tb_mark = $row['mark'];
            }
        }
            
    	$student_answer="select * from ".$tb_student_answer." where student='".$_SESSION['User']."' and is_true=1";
        $result_answers = $mysqli->query($student_answer);
        $totalmark = $result_answers->num_rows;
		
		
		$query = "SELECT * FROM `$tb_name`";
    	//get result
    	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    	$total = $results->num_rows;
    	
    	$marker = ($totalmark/$total)*100;
    	$mark = round($marker,0);

		if($mark >= 80){
			$grade = "A";
			$image = "excellent.png";
			$color = "#1ec42e";
		}elseif($mark >= 60 and $mark < 80){
			$grade = "B";
			$image = "brilliant.png";
			$color = "#31a1bd";
		}elseif($mark >= 40 and $mark < 60){
			$grade = "C";
			$image = "pass.png";
			$color = "#31a1bd";
		}elseif($mark >= 30 and $mark < 40 ){
			$grade = "D";
			$image = "failed.png";
			$color = "#ae4321";
		}elseif($mark < 30 ){
			$grade = "E";
			$image = "failed.png";
			$color = "#ae4321";
		}
	}
	
	    $sql_check = "SELECT * FROM ".$tb_mark." WHERE student='".$_SESSION['User']."'";
        $result_check = $mysqli->query($sql_check);
        
        if ($result_check->num_rows > 0) {
            //echo "<script>alert('No need Insert mark');</script>";
        }
        else{
            // output data of each row
            $sql_marks = "INSERT INTO ".$tb_mark." (student, id, mark)
            VALUES ('".$_SESSION['User']."', '".$totalmark."', '".$mark."')";
            
            if ($mysqli->query($sql_marks) === TRUE) {
            //    echo "<script>alert('New record created successfully');</script>";
            } else {
            //    echo "<script>alert('Error: " . $sql_marks . "<br>" . $mysqli->error."');</script";
            }
        }
	
	
	

?>
<?include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="user-scalable = no">
	<link href="https://fonts.googleapis.com/css?family=Notable|Roboto+Condensed" rel="stylesheet">
	<style type="text/css">
	html{
		background-image: url('img/background.jpg');
		  
		/* Full height */
		height: 100%; 
		  
		/* Center and scale the image nicely */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		z-index: -1;
		overflow: hidden;
	}
	body{
	    background-color: transparent;
	    text-align:center;
	}
	.logo{
		position: absolute;
		background: url('img/<?echo $image;?>');
		background-repeat: no-repeat;
		background-size: 500px;
		width: 500px;
		height:420px;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
		text-align: center;
	}

	.menu1{
		background-repeat: no-repeat;
		background-size: 440px 328px;
		z-index: 3;
		position: absolute;
		width: 420px;
		height: 328px;
		left: 0;
		bottom: -8;

	}

	.menu2{
		padding-top: 28px;
		background: url('img/menu 2.png');
		background-repeat: no-repeat;
		background-size: 440px 300px;
		z-index: 3;
		position: absolute;
		width: 440px;
		height: 300px;
		margin-left: 400px;
		right: 0;
		bottom: 0;
		cursor: pointer;
	}

	.btn_menu{
		width: 100%;
		margin-top: 182px;
	}

	.btn_menu:hover{
		cursor: pointer;
	}
	.menu2:hover{
		background: url('img/menu 2 hover.png');
		background-repeat: no-repeat;
		background-size: 440px 300px;
		cursor: pointer;
	}

	.title{
		padding-top: 65%;
		font-family: 'Notable', sans-serif;
		font-size: 25px;
		color: #ffce42;
		text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
	}
	.color{
		
		-webkit-animation:colorchange 1s infinite alternate;
		text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
	}
	.score{
		font-family: 'Roboto Condensed', sans-serif;
		font-weight: bold;
		font-size: 20px;
		color: white;
		text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
		
	}
	.grade{
		color: <?echo $color;?>;
	}

	@-webkit-keyframes colorchange {
      0% {
        
        color: #ffce42;
      }
      100% {
        
        color: #cba63e;
      }
      
    }
	</style>
	
</head>
<body>
	<div class="logo">
		<div style="padding-top: 45%;">
		<a class="title color">Your Score</a></div>
		<a class="score color"> > ></a> 
			<a class="score" style="color:white"> Score: <span class="grade"><?php echo $totalmark.'/'.$total; ?></span></a>
		<a class="score color"> < < </a>

		<br>

		<a class="score color"> > ></a> 
			<a class="score" style="color:white">Mark: <span class="grade"><?echo $mark;?>%</span></a> 
		<a class="score color"> < < </a>

		<br>

		<a class="score color" style="padding-top:0px"> > ></a> 
			<a class="score" style="color:white">Grade: <span class="grade" style="padding-top:0px"><?echo $grade;?></span></a> 
		<a class="score color" > < < </a>
	</div>

	<div class="menu1">
		<img src="img/menu 1.png" id="menu1" class="btn_menu" onclick="location.href = 'https://www.jtutor.ml/subject/?id=<?echo $_GET['id'];?>';">
	</div>
	<div class="menu2" onclick="location.href = 'https://www.jtutor.ml/subject/quiz/?id=<?echo $_GET['id'];?>&name=<?echo $_GET['name'];?>';">
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('#menu1').hover(
		    function(){
		      $(this).attr('src','img/menu 1 hover.png')
		    },
		    function(){
		      $(this).attr('src','img/menu 1.png')
		    }
		)	
	</script>
<? include('../../cursor.html'); ?>
</body>
</html>