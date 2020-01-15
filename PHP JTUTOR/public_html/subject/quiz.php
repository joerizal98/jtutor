<?php
$servername = "localhost";
$username = "u779679936_u7796";
$password = "XFic8EwzfHFl";
$dbname = "u779679936_quiz";
$name_code = rand(111111,999999);
$choice = "choice".$name_code;
$question = "question".$name_code;
$student_answer = "student".$name_code;
$mark = "mark".$name_code;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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

$sql_std = "CREATE TABLE $student_answer (
student TEXT NOT NULL,
id TEXT NOT NULL,
answer INT(11) NOT NULL,
is_true TEXT NOT NULL
)";

$sql_mark = "CREATE TABLE $mark(
student TEXT NOT NULL,
id TEXT NOT NULL,
mark TEXT NOT NULL
)";

if (mysqli_query($conn, $sql) and mysqli_query($conn, $sql1) and mysqli_query($conn, $sql_std) and mysqli_query($conn, $sql_mark)) {
    
    if(!empty($_POST["quiz_name"])){
        $new_files = $_POST["hidden_folder_name"]."/".$_POST["quiz_name"].$name_code.".php";
        
        $sub_id = $_GET[id];
        $name = $_POST["quiz_name"];
        $dbquestion = $question;
        $dbchoice = $choice;
        $filename = $_POST["quiz_name"].$name_code.".php";
        
        if (!file_exists($new_files)){
            copy("quizpage.php", $new_files);
            $sql3 = "INSERT INTO list (sub_id, name, question, answer, filename, student_answer, mark)
            VALUES ('$sub_id', '$name', '$dbquestion', '$dbchoice', '$filename', '$student_answer', '$mark')";
            
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

?>
