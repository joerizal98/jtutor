<!DOCTYPE html>
<html>
 <head>
     <?php
        if (empty($_GET[f])){
        $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $redirect = str_replace("subject","Subject",$actual_link);
        header("Location: $redirect");
        }
     ?>
  <title>Manage Category and Files</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
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
    	background-color: #a6a9ad;
    }
  </style>
 </head>
 <body>
  <div class="container">
      <br>
   <div align="right">
    <button type="button" name="create_folder" id="create_folder" class="btn btn-success"><i class="fas fa-folder-plus"></i> New Category</button>
   </div>
   <br />
   <div class="table-responsive" id="folder_table">
    
   </div>
  </div>
 </body>
</html>

<div id="folderModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><span id="change_title">Create Category</span></h4>
   </div>
   <div class="modal-body">
    <p>Enter Category Name</p>
    <p><input type="text" name="folder_name" id="folder_name" class="form-control" /></p>
    <input type="hidden" name="action" id="action" />
    <input type="hidden" name="old_name" id="old_name" />
    
   </div>
   <div class="modal-footer">
    <input style="float:left" type="button" name="folder_button" id="folder_button" class="btn btn-info" value="Create" />
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<div id="uploadModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Upload File</h4>
   </div>
   <div class="modal-body">
       <style>
            label{
                border: 1px solid;
                background-color:rgb(70, 184, 218);
                padding:10px;
                border-radius: 5px;
                margin-left:30%;
                margin-right:30%;
                
            }
            .input-file{
            	width: 0.1px;
            	height: 0.1px;
            	opacity: 0;
            	overflow: hidden;
            	position: absolute;
            	z-index: -1;
            }
            .input-file + label {
                font-size: 1.25em;
                font-weight: 700;
                color: white;
                cursor: pointer;
            }
            
            .input-file + label:hover {
                background-color: #5095aa;
            }
            .file_name_result{
                display.none;
            }
            
       </style>
    <form method="post" id="upload_form" enctype='multipart/form-data'>
        <br>
        <input class="input-file" name="upload_file" id="file" type="file" onchange="myFunction()">
        <label for="file" style="display: block;text-align:center"><i class="fas fa-cloud-upload-alt"></i> Choose a file</label>
        <p id="file_name_result" style="color: rgb(70, 184, 218);text-align:center"><br></p>
        <input type="hidden" name="hidden_folder_name" id="hidden_folder_name"/>
   </div>
   <div class="modal-footer">
    <input type="submit" style="float:left" name="upload_button" class="btn btn-info" value="Upload" /></form>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
    <script>
        function myFunction() {
            var x = document.getElementById("file").value;
 	        var filename_no_fake = x.replace(/^.*\\/, "");
            document.getElementById("file_name_result").innerHTML = "<b>Selected Files:</b> " + filename_no_fake;
            document.getElementById("file_name_result").style.display = "block";
        }
    </script>
    <script>
        function validateForm() {
            var x = document.forms["quiz"]["quiz_name"].value;
            if (x == "") {
                return false;
            }
        }
    </script>
<div id="quizModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Create Quiz</h4>
   </div>
   <div class="modal-body">
    <p>Enter Quiz Name
    <form method="post" id="quiz_form" name="quiz" onsubmit="return validateForm()">
    <input type="text" name="quiz_name" id="quiz_name" class="form-control" /></p>
    <input type="hidden" name="hidden_folder_name" id="hidden_folder_names" />
   </div>
   <div class="modal-footer">
    <input type="submit" style="float:left" name="upload_button" class="btn btn-info" value="Create" /></form>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="forumModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Create Forum</h4>
   </div>
   <div class="modal-body">
    <p>Enter Forum Name
    <form method="post" id="forum_form" name="forum" onsubmit="return validateForm()">
    <input type="text" name="forum_name" id="forum_name" class="form-control" /></p>
    <input type="hidden" name="hidden_folder_name" id="hidden_folder_nameq" />
   </div>
   <div class="modal-footer">
    <input type="submit" style="float:left" name="upload_button" class="btn btn-info" value="Create" /></form>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="filelistModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">File List</h4>
   </div>
   <div class="modal-body" id="file_list">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script>
$(document).ready(function(){
 
 load_folder_list();
 
 function load_folder_list()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php?id=<?php echo $_GET[f];?>",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#folder_table').html(data);
   }
  });
 }
 
 $(document).on('click', '#create_folder', function(){
  $('#action').val("create");
  $('#folder_name').val('');
  $('#folder_button').val('Create');
  $('#folderModal').modal('show');
  $('#old_name').val('');
  $('#change_title').text("Create Folder");
 });
 
 $(document).on('click', '#folder_button', function(){
  var folder_name = $('#folder_name').val();
  var old_name = $('#old_name').val();
  var action = $('#action').val();
  if(folder_name != '')
  {
   $.ajax({
    url:"action.php?id=<?php echo $_GET[f];?>",
    method:"POST",
    data:{folder_name:folder_name, old_name:old_name, action:action},
    success:function(data)
    {
     $('#folderModal').modal('hide');
     load_folder_list();
     alert(data);
    }
   });
  }
  else
  {
   alert("Enter Folder Name");
  }
 });
 
 $(document).on("click", ".update", function(){
  var folder_name = $(this).data("name");
  $('#old_name').val(folder_name);
  $('#folder_name').val(folder_name);
  $('#action').val("change");
  $('#folderModal').modal("show");
  $('#folder_button').val('Update');
  $('#change_title').text("Change Category Name");
 });
 
 $(document).on("click", ".delete", function(){
  var folder_name = $(this).data("name");
  var action = "delete";
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"action.php?id=<?php echo $_GET[f];?>",
    method:"POST",
    data:{folder_name:folder_name, action:action},
    success:function(data)
    {
     load_folder_list();
     alert(data);
    }
   });
  }
 });
 
 $(document).on('click', '.upload', function(){
  var folder_name = $(this).data("name");
  $('#hidden_folder_name').val(folder_name);
  $('#uploadModal').modal('show');
 });
 

 
 $('#upload_form').on('submit', function(){
  $.ajax({
   url:"upload.php",
   method:"POST",
   data: new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   success: function(data)
   { 
    load_folder_list();
    alert(data);
   }
  });
 });
 
 $(document).on('click', '.quiz', function(){
  var folder_name = $(this).data("name");
  $('#hidden_folder_names').val(folder_name);
  $('#quizModal').modal('show');
 });
 
  $('#quiz_form').on('submit', function(){
  $.ajax({
   url:"quiz.php?id=<?php echo $_GET['id_code'];?>",
   method:"POST",
   data: new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   success: function(data)
   { 
    load_folder_list();
    alert(data);
   }
  });
 });
 
 $(document).on('click', '.forum', function(){
  var folder_name = $(this).data("name");
  $('#hidden_folder_nameq').val(folder_name);
  $('#forumModal').modal('show');
 });
 
  $('#forum_form').on('submit', function(){
  $.ajax({
   url:"forum.php?id=<?php echo $_GET['id_code'];?>",
   method:"POST",
   data: new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   success: function(data)
   { 
    load_folder_list();
    alert(data);
   }
  });
 });
 
 $(document).on('click', '.view_files', function(){
  var folder_name = $(this).data("name");
  var action = "fetch_files";
  $.ajax({
   url:"action.php?id=<?php echo $_GET[f];?>",
   method:"POST",
   data:{action:action, folder_name:folder_name},
   success:function(data)
   {
    $('#file_list').html(data);
    $('#filelistModal').modal('show');
   }
  });
 });
 
 $(document).on('click', '.view_quiz', function(){
  var folder_name = $(this).data("name");
  var action = "fetch_quiz";
  $.ajax({
   url:"action.php?id=<?php echo $_GET[f];?>",
   method:"POST",
   data:{action:action, folder_name:folder_name},
   success:function(data)
   {
    $('#file_list').html(data);
    $('#filelistModal').modal('show');
   }
  });
 });
 
  $(document).on('click', '.view_forum', function(){
  var folder_name = $(this).data("name");
  var action = "fetch_forum";
  $.ajax({
   url:"action.php?id=<?php echo $_GET[f];?>",
   method:"POST",
   data:{action:action, folder_name:folder_name},
   success:function(data)
   {
    $('#file_list').html(data);
    $('#filelistModal').modal('show');
   }
  });
 });
 
 $(document).on('click', '.remove_file', function(){
  var path = $(this).attr("id");
  var action = "remove_file";
  if(confirm("Are you sure you want to remove this file?"))
  {
   $.ajax({
    url:"action.php?id=<?php echo $_GET[f];?>",
    method:"POST",
    data:{path:path, action:action},
    success:function(data)
    {
     alert(data);
     $('#filelistModal').modal('hide');
     load_folder_list();
    }
   });
  }
 });

$(document).on('blur', '.change_file_name', function(){
  var folder_name = $(this).data("folder_name");
  var old_file_name = $(this).data("file_name");
  var new_file_name = $(this).text();
  var action = "change_file_name";
  $.ajax({
   url:"action.php?id=<?php echo $_GET[f];?>",
   method:"POST",
   data:{folder_name:folder_name, old_file_name:old_file_name, new_file_name:new_file_name, action:action},
   success:function(data)
   {
    alert(data);
   }
  });
 });
 
});
</script>
<? include('../cursor.html'); ?>