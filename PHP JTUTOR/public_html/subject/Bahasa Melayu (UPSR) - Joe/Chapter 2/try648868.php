<!DOCTYPE html>
<html>
<head>
	<title>JTutor - Quiz</title>
    <link rel="shortcut icon" href="https://www.jtutor.ml/img/favicon.ico">

    <style type="text/css">
    	html{
    		background-color: #5e4674;
    		background-image: url('https://www.jtutor.ml/img/loading.gif');
    		background-repeat: no-repeat;
		    background-attachment: fixed;
		    background-position: center; 
    	}
    </style>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <? include('../cursor.html'); ?>

</body>
</html>

<?php
    if(!empty($_GET['id']) and !empty($_GET['name'])){
        $url =  "https://www.jtutor.ml/subject/quiz/?id=".$_GET[id]."&name=".$_GET['name'];
        header('Refresh: 5; URL='.$url);
    }else{
        header('Refresh: 5; URL=https://www.jtutor.ml/subject/Quiz/'); 
    }
?>