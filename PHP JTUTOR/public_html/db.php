<?php
$servername = "localhost";
$username = "u779679936_u7796";
$password = "XFic8EwzfHFl";
$dbname = "u779679936_quiz";
$name_code = rand(111111,999999);
$choice = "choice".$name_code;
$question = "question".$name_code;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed jahanam: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE $choice (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
question_number INT(11) NOT NULL,
is_correct TINYINT(1) NOT NULL,
text TEXT NOT NULL
)";

$sql1 = "CREATE TABLE $question (
question_number INT(11) NOT NULL,
text TEXT NOT NULL
)";

if (mysqli_query($conn, $sql) and mysqli_query($conn, $sql1)) {
    
    if(!empty($_POST["quiz_name"])){
        $new_files = $_POST["hidden_folder_name"]."/".$_POST["quiz_name"].".php";
        
        $sub_id = "7540";
        $name = $_POST["quiz_name"];
        $dbquestion = $question;
        $dbchoice = $choice;
        $filename = $_POST["quiz_name"].".php";
        
        if (!file_exists($new_files)){
            copy("quiz.php", $new_files);
            $sql3 = "INSERT INTO list (sub_id, name, question, answer, filename)
            VALUES ('$sub_id', '$name', '$dbquestion', '$dbchoice', '$filename')";
            
            if (mysqli_query($conn, $sql3)) {
                echo "Quiz Created Successfully";
            } else {
                echo "Cannot Create Quiz!\nPlease Try Again!";
            }
            
        }else{
            echo "Quiz Name Not Available";
        }
    }else{
        echo 'Please Enter Quiz Name';
    }
} else {
    echo "Cannot Create Quiz!\nPlease Try Again!";
}

mysqli_close($conn);
?>
