<?php
$pth = $_GET['id'];
function format_folder_size($size)
{
 if ($size >= 1073741824)
 {
  $size = number_format($size / 1073741824, 2) . ' GB';
 }
    elseif ($size >= 1048576)
    {
        $size = number_format($size / 1048576, 2) . ' MB';
    }
    elseif ($size >= 1024)
    {
        $size = number_format($size / 1024, 2) . ' KB';
    }
    elseif ($size > 1)
    {
        $size = $size . ' bytes';
    }
    elseif ($size == 1)
    {
        $size = $size . ' byte';
    }
    else
    {
        $size = '0 bytes';
    }
 return $size;
}

function get_folder_size($folder_name)
{
 $total_size = 0;
 $file_data = scandir($folder_name);
 foreach($file_data as $file)
 {
  if($file === '.' or $file === '..')
  {
   continue;
  }
  else
  {
   $path = $file;
   $total_size = $total_size + filesize($path);
  }
 }
 return format_folder_size($total_size);
}

if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
  
  $folder = array_filter(glob($pth.'/*'), 'is_dir');
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th style="text-align:center"></th>
    <th style="text-align:center">Category</th>
    <th style="text-align:center">Rename</th>
    <th style="text-align:center">Delete</th>
    <th style="text-align:center">Upload File</th>
    <th style="text-align:center">File</th>
    <th style="text-align:center">Quiz</th>
    <th style="text-align:center">Forum</th>
   </tr>
   ';
  if(count($folder) > 0)
  {
   natsort($folder);
   foreach($folder as $name)
   {
    $fol_name = str_replace($pth."/","",$name);
    $output .= '
     <tr>
      <td>'.(count(scandir($name)) - 2).'</td>
      <td>'.$fol_name.'</td>
      <td><button type="button" name="update" data-name="'.$fol_name.'" class="update btn btn-warning btn-xs"> 
      <i class="fas fa-pencil-alt"></i> Rename</button></td>
      <td>
          <button type="button" name="delete" data-name="'.$name.'" class="delete btn btn-danger btn-xs">
            <i class="fas fa-trash"></i> Delete
          </button>
      </td>
      <td>
            <button type="button" name="upload" data-name="'.$name.'" class="upload btn btn-info btn-xs">
             <i class="fas fa-cloud-upload-alt"></i> Upload File
            </button>
      </td>
      <td><button type="button" name="view_files" data-name="'.$name.'" class="view_files btn btn-success btn-xs">
      <i class="far fa-file-alt"></i> Files List</button></td>
      <td align="center">
            <button type="button" name="view_quiz" data-name="'.$name.'" class="view_quiz btn btn-success btn-xs">
            <i class="far fa-file-alt"></i> Quiz List</button>
            <button type="button" name="view_files" data-name="'.$name.'" class="quiz btn btn-info btn-xs"><i class="fas fa-plus"></i> Add Quiz</button>
      </td>
      <td align="center">
            <button type="button" name="view_forum" data-name="'.$name.'" class="view_forum btn btn-success btn-xs">
            <i class="far fa-file-alt"></i> Forum List</button>
            <button type="button" name="view_files" data-name="'.$name.'" class="forum btn btn-info btn-xs"><i class="fas fa-plus"></i> Add Forum</button>
      </td>
     </tr>';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td colspan="6">No Folder Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
 
 if($_POST["action"] == "create")
 {
  if(!file_exists($_POST["folder_name"])) 
  {
   mkdir($pth."/".$_POST["folder_name"], 0777, true);
   echo 'Folder Created';
  }
  else
  {
   echo 'Folder Already Created';
  }
 }
 if($_POST["action"] == "change")
 {
  if(!file_exists($pth."/".$_POST["folder_name"]))
  {
   rename($pth."/".$_POST["old_name"], $pth."/".$_POST["folder_name"]);
   echo 'Folder Name Change';
  }
  else
  {
   echo 'Folder Already Created';
  }
 }
 
 if($_POST["action"] == "delete")
 {
  $files = scandir($_POST["folder_name"]);
  foreach($files as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    unlink($_POST["folder_name"] . '/' . $file);
   }
  }
  if(rmdir($_POST["folder_name"]))
  {
   echo 'Folder Deleted';
  }
 }
 
 if($_POST["action"] == "fetch_files")
 {
  $file_data = scandir($_POST["folder_name"]);
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th width="80%">File Name</th>
    <th style="text-align:center">Delete</th>
   </tr>
  ';
  natcasesort($file_data);
  foreach($file_data as $file)
  {
   $icon_extension = array("jpg", "png", "gif", "bmp", "pdf", "zip", "rar", "doc", "docm", "docx", "xls", "xlt", "ppt", "pot", "pptx", "pptm" );
   $extensions_exclude = array("php","html");

   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
       $ext = pathinfo($file, PATHINFO_EXTENSION);
       
       $ext2 = strtolower($ext);
       if (in_array($ext2,$icon_extension)) {
               $icon = $ext2.".png";
       }
       
       if (!in_array($ext,$extensions_exclude)) {
           
            $path = $_POST["folder_name"] . '/' . $file;
            $output .= '
            <tr>
             <td valign="center" contenteditable="true" data-folder_name="'.$_POST["folder_name"].'"  data-file_name = "'.$file.'" class="change_file_name"><img src="icon/'.$icon.'" height="20" width="20" /> '.$file.'</td>
             <td style="text-align:center"><button name="remove_file" class="remove_file btn btn-danger btn-xs" id="'.$path.'"><i class="fas fa-trash"></i> Remove</button></td>
            </tr>
            ';
       }
   }
  }
  $output .='</table>';
  echo $output;
 }
 
  if($_POST["action"] == "fetch_quiz")
 {
  $file_data = glob($_POST["folder_name"]."/*.php");
  //$file_data = scandir($_POST["folder_name"]);
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th width="80%">File Name</th>
    <th style="text-align:center">Delete</th>
   </tr>
  ';
  natcasesort($file_data);
  foreach($file_data as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    //$path = $_POST["folder_name"] . '/' . $file;
    $path = $file;
    $file_name = str_replace($_POST["folder_name"]."/","",$file);
    $without_extension = basename($file_name, '.php');
    $output .= '
    <tr>
     <td contenteditable="false" data-folder_name="'.$_POST["folder_name"].'"  data-file_name = "'.$file.'" class="change_file_name"><img src="icon/quiz.png" height="20" width="20" /> '.$without_extension.'</td>
     <td style="text-align:center"><button name="remove_file" class="remove_file btn btn-danger btn-xs" id="'.$path.'"><i class="fas fa-trash"></i> Remove</button></td>
    </tr>
    ';
   }
  }
  $output .='</table>';
  echo $output;
 }
 
   if($_POST["action"] == "fetch_forum")
 {
  $file_data = glob($_POST["folder_name"]."/*.html");
  //$file_data = scandir($_POST["folder_name"]);
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th width="80%">File Name</th>
    <th style="text-align:center">Delete</th>
   </tr>
  ';
  natcasesort($file_data);
  foreach($file_data as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    //$path = $_POST["folder_name"] . '/' . $file;
    $path = $file;
    $file_name = str_replace($_POST["folder_name"]."/","",$file);
    $without_extension = basename($file_name, '.html');
    $output .= '
    <tr>
     <td contenteditable="false" data-folder_name="'.$_POST["folder_name"].'"  data-file_name = "'.$file.'" class="change_file_name"><img src="icon/forum.png" height="20" width="20" /> '.$without_extension.'</td>
     <td style="text-align:center"><button name="remove_file" class="remove_file btn btn-danger btn-xs" id="'.$path.'"><i class="fas fa-trash"></i> Remove</button></td>
    </tr>
    ';
   }
  }
  $output .='</table>';
  echo $output;
 }
 
 if($_POST["action"] == "remove_file")
 {
  if(file_exists($_POST["path"]))
  {
   unlink($_POST["path"]);
   echo 'File Deleted';
  }
 }
 
 if($_POST["action"] == "change_file_name")
 {
  $old_name = $_POST["folder_name"] . '/' . $_POST["old_file_name"];
  $new_name = $_POST["folder_name"] . '/' . $_POST["new_file_name"];
  if(rename($old_name, $new_name))
  {
   echo 'File name change successfully';
  }
  else
  {
   echo 'There is an error';
  }
 }
}
?>