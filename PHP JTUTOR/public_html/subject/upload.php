<?php
if($_FILES["upload_file"]["name"] != '')
{
 $data = explode(".", $_FILES["upload_file"]["name"]);
 $extension = strtolower($data[1]);
 $allowed_extension = array("jpg", "png", "gif", "bmp", "pdf", "zip", "rar", "doc", "docm", "docx", "xls", "xlt", "ppt", "pot", "pptx", "pptm" );
 if(in_array($extension, $allowed_extension))
 {
  $new_file_name = rand() . '.' . $extension;
  $path = $_POST["hidden_folder_name"] . '/' . $new_file_name;
  if(move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path))
  {
   echo 'File Uploaded';
  }
  else
  {
   echo 'There is some error';
  }
 }
 else
 {
  echo 'This Files is Invalid';
 }
}
else
{
 echo 'Please Select a Files';
}
?>