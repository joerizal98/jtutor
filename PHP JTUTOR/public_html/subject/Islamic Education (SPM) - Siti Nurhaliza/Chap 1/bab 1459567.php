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
		    overflow: hidden;
    	}
    	.ball {
			  pointer-events: none;
			  position: absolute;
			  width: 10px;
			  height: 10px;
			  border-radius: 50%;
			  background: gray;
			  animation: implode 1s ease-in-out;
			  animation-fill-mode: both;
			  opacity: .5;
			}
			@keyframes implode {
			  100% {
			    transform: scale(0);
			  }
		}
    </style>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript">
			$(document).ready(function(){
			  
			  var mousePos = {};

			 function getRandomInt(min, max) {
			   return Math.round(Math.random() * (max - min + 1)) + min;
			 }
			  
			  $(window).mousemove(function(e) {
			    mousePos.x = e.pageX;
			    mousePos.y = e.pageY;
			  });
			  
			  $(window).mouseleave(function(e) {
			    mousePos.x = -1;
			    mousePos.y = -1;
			  });
			  
			  var draw = setInterval(function(){
			    if(mousePos.x > 0 && mousePos.y > 0){
			      
			      var range = 15;
			      
			      var color = "background: rgb("+getRandomInt(0,255)+","+getRandomInt(0,255)+","+getRandomInt(0,255)+");";
			      
			      var sizeInt = getRandomInt(10, 30);
			      size = "height: " + sizeInt + "px; width: " + sizeInt + "px;";
			      
			      var left = "left: " + getRandomInt(mousePos.x-range-sizeInt, mousePos.x+range) + "px;";
			      
			      var top = "top: " + getRandomInt(mousePos.y-range-sizeInt, mousePos.y+range) + "px;"; 

			      var style = left+top+color+size;
			      $("<div class='ball' style='" + style + ";z-index:1000000;'></div>").appendTo('html').one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){$(this).remove();}); 
			    }
			  }, 1);
			});
		</script>

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