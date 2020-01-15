<?php
$servername = "localhost";
$username = "u779679936_jtutf";
$password = "nAZoFlWGx8S^";
$dbname = "u779679936_forum";
$name_code = rand(111111,999999);
$choice = "chat".$name_code;
$question = "attendance".$name_code;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE $choice (
chat_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
chat_person_name VARCHAR(100) NOT NULL,
chat_value VARCHAR(100) NOT NULL,
chat_color TEXT NOT NULL,
chat_time TIME,
chat_date DATE
)";

$sql1 = "CREATE TABLE $question (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
student TEXT NOT NULL,
time TIME,
date DATE
)";

if (mysqli_query($conn, $sql) and mysqli_query($conn, $sql1)) {
    
    if(!empty($_POST["forum_name"])){
        $new_files = $_POST["hidden_folder_name"]."/".$_POST["forum_name"].$name_code.".html";
        
        $sub_id = $_GET[id];
        $name = $_POST["forum_name"];
        $dbquestion = $question;
        $dbchoice = $choice;
        $filename = $_POST["forum_name"].$name_code.".html";
        
        if (!file_exists($new_files)){
            copy("forum_page.html", $new_files);
            $sql3 = "INSERT INTO list (sub_id, name, chat, attendance, filename)
            VALUES ('$sub_id', '$name', '$dbquestion', '$dbchoice', '$filename')";
            
            if (mysqli_query($conn, $sql3)) {
                echo "Forum Created Successfully";
            } else {
                echo "Cannot Create Forum!\nPlease Try Again!";
            }
            
        }else{
            echo "Forum Name Not Available";
        }
    }else{
        echo 'Please Enter Forum Name';
    }
} else {
    echo "Cannot Create Forums!\nPlease Try Again!";
}

?>
