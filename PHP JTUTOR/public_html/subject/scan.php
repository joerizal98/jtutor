<?php
session_start();
$dir = $_GET['a'];
$code = $_GET['id'];

            

// Run the recursive function 

$response = scan($dir);


// This function scans the files folder recursively, and builds a large array

function scan($dir){

	$files = array();
    $d = scandir($dir);
	// Is there actually such a folder/file?

	if(file_exists($dir)){
	    natsort($d);
		foreach($d as $f) {
		
			if(!$f || $f[0] == '.') {
				continue; // Ignore hidden files
			}

			if(is_dir($dir . '/' . $f)) {

				// The path is a folder

				$files[] = array(
					"name" => $f,
					"type" => "folder",
					"path" => $dir . '/' . $f,
					"items" => scan($dir . '/' . $f) // Recursively get the contents of the folder
				);
			}
			
			else {
            
            // It is a file
            $ext = pathinfo($f, PATHINFO_EXTENSION);
				if ($ext == "php"){
				    $nam1 = str_replace(".php","",$f);
                    $names = substr($nam1, 0, -6);
					$file_name = $names.'.quiz';
					$files_path = $dir . '/' . $f.'?id='.$_GET['id'].'&name='.$f;
				}else if($ext == "html"){
				    $nam1 = str_replace(".html","",$f);
                    $names = substr($nam1, 0, -6);
					$file_name = $names.'.forum';
					$files_path = $dir . '/' . $f.'?id='.$_GET['id'].'&name='.$f;
				}else{
					$file_name = $f;
					$files_path = $dir . '/' . $f;
				}

				$files[] = array(
					"name" => $file_name,
					"type" => "file",
					"path" => $files_path,
					"size" => filesize($dir . '/' . $f) // Gets the size of this file
				);
			}
		}
	
	}

	return $files;
}



// Output the directory listing as JSON

header('Content-type: application/json');

echo json_encode(array(
	"name" => $dir = $_GET['a'],
	"type" => "folder",
	"path" => $dir,
	"items" => $response
));
