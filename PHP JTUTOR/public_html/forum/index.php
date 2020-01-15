<!DOCTYPE html>
<?php include 'header.php' ?>
<?
    if(empty($_GET['id']) and empty($_GET['name'])){
        header("location: https://www.jtutor.ml/forums/");
    }else{
        $scode = $_GET['id'];
        $file_name = $_GET['name'];
    }
    
    session_start();
    include_once('config.php');
    $list= ("SELECT * FROM list WHERE sub_id='".$scode."' and filename='".$file_name."'");
    $result2 = $conn->query($list);
    while ($row_list = mysqli_fetch_assoc($result2)){
        $db_chat = $row_list['chat'];
        $forum_title = $row_list['title'];
    
    
        $result= mysqli_query($conn , "SELECT * FROM $db_chat WHERE student='".$_SESSION['User']."'");
        if ($result->num_rows > 0) {
             $color = "gold";
             $alert ="none";
             $onclick = "";
        }else{
            $color = "";
            $alert = "block";
            $onclick = 'onclick="myattandance()"';
        }
    }
    
    $connect = mysqli_connect('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut')or die ('problem to connect database');
    $result_tutor= mysqli_query($connect , "SELECT * FROM tutor WHERE code='".$_GET['id']."'");
    while ($row_tutor = mysqli_fetch_assoc($result_tutor)){
        $names = ucfirst($row_tutor['name']);
        $subject = $row_tutor['subject'];
        $tutor_name = $row_tutor['username'];
    }
    $result_subname= mysqli_query($connect , "SELECT * FROM subject WHERE code='".$subject."'");
    while ($row_subject = mysqli_fetch_assoc($result_subname)){
        $name_tie = ucwords(strtolower($row_subject['subject']));
        $aca = $row_subject['academic'];
    }
    
    $result_png= mysqli_query($connect , "SELECT * FROM user WHERE username='".$tutor_name."'");
    while ($row_png = mysqli_fetch_assoc($result_png)){
        $dp = $row_png['dp'];
        $role_png = $row_png['role'];
        if($row_png['folder'] != ""){
            $folder = $row_png['folder']."/";
        }else{
            $folder = "";
        }
        
        if($dp == "user.png"){
            $path_png = $dp;
        }else{
            $path_png = $folder.$dp;
        }
        
    }
    $result_role= mysqli_query($connect , "SELECT * FROM user WHERE username='".$_SESSION['User']."'");
    while ($row_role = mysqli_fetch_assoc($result_role)){
        $role_png = $row_role['role'];
        
    }
?>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Chat Widget</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
      .alert {
          padding: 20px;
          background-color: #f44336;
          color: white;
          border-radius:0px;
          display:<?echo $alert;?>;
      }

      .closebtn {
          margin-left: 15px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
      }

      .closebtn:hover {
          color: black;
      }
      
      .chat .chat-message {
          padding: 19px;
      }
      .fa-pencil-alt:hover{
          color:red;
      }
      #attendance{
          color:<?echo $color;?>;
      }
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
    .modal-content {
        background-color: #fefefe;
        top:30%;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
    }
    
    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        text-align: right;
        font-size: 28px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .btn_submit{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .btn_submit:hover {
        background-color: #3b773e;
    }
    
    .txt{
        font-size:30px;
        text-align: center;
        font-weight:bold;
    }
    #input_title{
        outline: none;
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid grey;
    }
    </style>
    
  </head>

  <body onload="vali()">
      <br><br><br>
      
    <?
    if($role_png != "teacher"){
    $n = "'none'";
    echo '
    <div class="alert" id="alert" style"margin-top:21px">
      <span class="closebtn"  onclick="this.parentElement.style.display='.$n.';">&times;</span> 
      <strong>Attention!</strong> Please click this <i class="fa fa-star" style="cursor:pointer;"></i> icon for your attendance in this forum.
      ';}?>
    </div>
  <br><br>
      <div class="container clearfix" style="padding-right:0px">
      <div class="people-list" id="people-list">
        <div class="search" style="text-align: center; margin: auto">
          <input type="text" placeholder="search" onkeydown="mysearch()" id="myInput"/>
          <i class="fa fa-search"></i>
        </div>
        <ul class="list" id="myUL">
          <div id="loginperson">
          </div>
          
        </ul>
      </div>
      <div class="chat">
        <div class="chat-header clearfix">
          <img src="https://www.jtutor.ml/user_avatar/<?echo $path_png;?>" alt="avatar" style="width:52px;height:52px;border: 3px solid #86BB71;border-radius: 200px;background-color:grey;"/>
          
          <div class="chat-about">
            <div class="chat-with"><?echo "[".$aca."] ".$name_tie." By ".$names;?></div>
            <div class="chat-num-messages">Title: <a id="title_here"></a> 
                <? if($tutor_name == $_SESSION['User']){
                        echo '<i id="myBtn" class="fas fa-pencil-alt"></i>';
                    
                    }
                ?>
            </div>
            <style>
               .fa-users{
                   float: right;
                   padding: 17px;
                   color: gold;
                   font-size: 20px;
                }
            </style>
          </div>
          <a  <?echo $onclick;?>>
              <?if($role_png == "teacher"){
                        echo '<a href="https://www.jtutor.ml/forum/student_list/?id='.$scode.'&name='.$file_name.'"><i id="myBtn" class="fas fa-users" title="Student attendance list"></i></a>';
              }else{
                    
                        echo '<i class="fa fa-star" title="Click here for your attendance" id="attendance" style="cursor:pointer; color:"></i></a>';
                    
                }?>
          
          <!-- The Modal -->
        <div id="myModal" class="modal">
        
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <p class="txt">Forum Discussion Title</p>
            <form>
                <input id="input_title" type="text" required>
            </form>
            <button onclick="getTitle()" class="btn_submit">Submit</button>
          </div>
        
        </div>
    
          <script type="text/javascript">
            

              function vali() {
                var y = document.getElementById("attendance");
                var x = document.getElementById("alert");
                if (y.style.color == "gold"){
                  x.style.display = "none";
                }
              }
              
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
        </div> <!-- end chat-header -->
        
        <div class="chat-history" id="here">
          <ul>
            <div id="chatarea"></div>
            
          </ul>
          
        </div> <!-- end chat-history -->
        
        <div class="chat-message clearfix">
        <form>
          <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
        
          <i class="far fa-file"></i> &nbsp;&nbsp;&nbsp;
          <i class="fa fa-file-image-o"></i>
          
          
        </form>
        <style>
            button:focus{
                outline:none !important;
            }
        </style>
        <button onclick="getText()">Send</button>
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
        xhr.open('POST' , 'chatdb.php<? echo '?id='.$scode.'&name='.$file_name; ?>',true);
        xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhr.send('chat='+$a);
        xhr.onreadystatechange=function(){
          if (xhr.responseText){
            //document.getElementById('chatarea').innerHTML=xhr.responseText;
          }
        }
        document.getElementById("message-to-send").value = "";
      }
      function getTitle() {
        var $a =  document.getElementById('input_title').value;
            xhr = new XMLHttpRequest();
            xhr.open('POST' , 'title.php<? echo '?id='.$scode.'&name='.$file_name; ?>',true);
            xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
            xhr.send('title='+$a);
            xhr.onreadystatechange=function(){
              if (xhr.responseText){
                //document.getElementById('chatarea').innerHTML=xhr.responseText;
                var modal = document.getElementById('myModal');
                modal.style.display = "none";
                
              }
        }
        document.getElementById('input_title').value = "";
        
      }
      
      function myattandance() {
              var y = document.getElementById("attendance");
              var x = document.getElementById("alert");
                if (x.style.display === "block") {
                } else {
                    x.style.display = "none";
                    y.style.color = "gold";
                    xhr = new XMLHttpRequest();
                    xhr.open('POST' , 'attendance.php<? echo '?id='.$scode.'&name='.$file_name; ?>',true);
                    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
                    xhr.send('hello=testing');
                    xhr.onreadystatechange=function(){
                      if (xhr.responseText){
                        //document.getElementById('chatarea').innerHTML=xhr.responseText;
                      }
                    }
        
                }
      }
      
      function setText(){
        xhr = new XMLHttpRequest();
        xhr.open('POST' , 'chatFetch.php<? echo '?id='.$scode.'&name='.$file_name; ?>' , true);
        xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhr.send();
        xhr.onreadystatechange = function(){
        //  alert(xhr.responseText);
          document.getElementById('chatarea').innerHTML = xhr.responseText;
          var objDiv = document.getElementById("here"); 
        }
      }
      
      function setTitle(){
        xhrs = new XMLHttpRequest();
        xhrs.open('POST' , 'titleFetch.php<? echo '?id='.$scode.'&name='.$file_name; ?>' , true);
        xhrs.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xhrs.send();
        xhrs.onreadystatechange = function(){
        //  alert(xhr.responseText);
          document.getElementById('title_here').innerHTML = xhrs.responseText;
        }
      }
      setInterval("setText()",3000);
      
      setInterval("users()",2000);
      setInterval("setTitle()",3000);

      function users(){
        xhr1 = new XMLHttpRequest();
        xhr1.open('POST' , 'userFetch.php<? echo '?id='.$scode.'&name='.$file_name; ?>' , true);
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
	        if (a.innerHTML.toUpperCase().indexOf(filter) == "") {
	          	li[i].style.display = "";
	        }else {
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
