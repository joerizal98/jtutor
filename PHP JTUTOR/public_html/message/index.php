<!DOCTYPE html>
<?php include 'header.php' ?>
<?php
    session_start();
    if (!empty($_GET['user'])){
        $to_user = $_GET['user'];
    }else{
        $to_user = "admin";
    }
    $connect = mysqli_connect('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut')or die ('problem to connect database');
    if(!empty($to_user)){
        $result_name= mysqli_query($connect , "SELECT * FROM user where username='".$to_user."'");
        while ($row_name = mysqli_fetch_assoc($result_name)){
                $full_name = ucwords(strtolower($row_name['fistname']." ".$row_name['lastname']));
                $dp = $row_name['dp'];
                if($dp != "user.png"){
                    $folder = $row_name['folder'];
                }
                $path_dp = "https://jtutor.ml/user_avatar/".$folder."/".$dp;
        }
    }
?>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <style>
      .chat .chat-message {
          padding: 19px;
      }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
  </head>
        <style>
           .fa-user-plus{
               float: right;
               padding: 17px;
               color: ;
               font-size: 20px;
            }
        </style>
  <body onload="vali()">
      <br><br><br>
  <br><br>
      <div class="container clearfix" style="padding-right:0px">
      <div class="people-list" id="people-list">
        <div class="search" style="text-align: center; margin: auto">
          <input type="text" placeholder="search" id="myInput"/>
          <i class="fa fa-search"></i>
        </div>
        <ul class="list" id="myUL">
          <div id="loginperson">
          </div>
          
        </ul>
      </div>
      <div class="chat">
        <div class="chat-header clearfix" id="current_user">
              <img src="<?echo $path_dp;?>" alt="avatar" style="width:52px;height:52px;border: 3px solid #E38968;border-radius: 200px;background-color:grey;"/>
              
              <div class="chat-about">
                <div class="chat-with"><?echo $full_name;?></div>
                <div class="chat-num-messages"></div>
              </div>
          
        </div> <!-- end chat-header -->
        
        <div class="chat-history" id="here">
          <ul>
            <div id="chatarea"></div>
            
          </ul>
          
        </div> <!-- end chat-history -->
        
        <div class="chat-message clearfix">
        <form>
          <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
        
          <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
          <i class="fa fa-file-image-o"></i>
          
          
        </form>
        <button onclick="getText()" style="outline:none">Send</button>
        </div> <!-- end chat-message -->
        
      </div> <!-- end chat -->
      
    </div> <!-- end container -->
    <br><br>
    <script id="message-template" type="text/x-handlebars-template">
      <li class="clearfix">
        <div class="message-data align-right">
          <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
          <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
        </div>
        <div class="message other-message float-right">
          {{messageOutput}}
        </div>
      </li>
    </script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>
    <script  src="js/index.js"></script>
    <script type="text/javascript">

      function getText() {
        var $a =  document.getElementById('message-to-send').value;
        xhr = new XMLHttpRequest();
        xhr.open('POST' , 'chatdb.php?user=<?echo $to_user;?>',true);
        xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhr.send('chat='+$a);
        xhr.onreadystatechange=function(){
          if (xhr.responseText){
            //document.getElementById('chatarea').innerHTML=xhr.responseText;
          }
        }
        document.getElementById("message-to-send").value = "";
      }
      
      function getContact() {
        var $a =  <?echo $to_user;?>;
        xhrq = new XMLHttpRequest();
        xhrq.open('POST' , 'add_contact.php?user=<?echo $to_user;?>',true);
        xhrq.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhrq.send('user=='+$a);
        xhrq.onreadystatechange=function(){
          if (xhr.responseText){
            //document.getElementById("message-to-send")
          }
        }
      }
      
      function setText(){
        xhr = new XMLHttpRequest();
        xhr.open('POST' , 'chatFetch.php?user=<?echo $to_user;?>', true);
        xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhr.send();
        xhr.onreadystatechange = function(){
        //  alert(xhr.responseText);
          document.getElementById('chatarea').innerHTML = xhr.responseText;
          var objDiv = document.getElementById("here"); 
        }
      }
      
      function setCurrentuser(){
        xhrc = new XMLHttpRequest();
        xhrc.open('POST' , 'current.php?user=<?echo $to_user;?>', true);
        xhrc.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhrc.send();
        xhrc.onreadystatechange = function(){
        //  alert(xhr.responseText);
          document.getElementById('current_user').innerHTML = xhrc.responseText;
          //var objDiv = document.getElementById("here"); 
        }
      }
      setInterval("setText()",3000);
      setInterval("setCurrentuser()",2000);
      setInterval("users()",2000);

      function users(){
        xhr1 = new XMLHttpRequest();
        xhr1.open('POST' , 'userFetch.php' , true);
        xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhr1.send();
        xhr1.onreadystatechange = function(){
        //  alert(xhr.responseText);
        
          document.getElementById('loginperson').innerHTML = xhr1.responseText;

	      
	        var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
      }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <? include('../cursor.html'); ?>

  </body>

</html>
