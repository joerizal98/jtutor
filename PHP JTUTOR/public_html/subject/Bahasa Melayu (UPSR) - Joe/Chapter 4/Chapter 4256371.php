<!DOCTYPE html>
<html>
<head>
	<title>JTutor - Quiz</title>
    <link rel="shortcut icon" href="https://www.jtutor.ml/img/favicon.ico">

    <style type="text/css">
    	html{
    		background-color: #5e4674;
    		background-image: url('loading.gif');
    		background-repeat: no-repeat;
		    background-attachment: fixed;
		    background-position: center; 
    	}
    </style>
</head>
<body>

</body>
</html>

<?php
    if(!empty($_GET['id']) and !empty($_GET['name'])){
        $url =  "https://www.jtutor.ml/subject/quiz/?id=".$_GET[id]."&name=".$_GET['name'];
        header('Refresh: 10: URL='.$url);
    }else{
        header('Refresh: 10: URL=https://www.jtutor.ml/subject/Quiz/'); 
    }
?>