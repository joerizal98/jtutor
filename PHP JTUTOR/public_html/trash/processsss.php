<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
        $_SESSION["gvar"]=""; 
    } 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "user_data";

    $sendername = ""; $senderpass=""; $boolisempty=false;

    
	if(isset($_POST['user'])  && $_POST['user']!=""){$sendername = $_POST['user'];}else{$boolisempty=true; }
	if(isset($_POST['pass']) && $_POST['pass']!=""){$senderpass = $_POST['pass'];}else{$boolisempty=true; }

    if($boolisempty==true){
            $message = "Username and/or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";

            include 'login.php';//header("Location: register.php");
            //exit;
        }

	echo $sendername." ".$senderpass."<br>";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user WHERE username ='".$sendername."' AND password = '".$senderpass."' LIMIT 1";#"SELECT * FROM users Where ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        header('Location: index.html'); 
    }
} else {
    echo "0 results";
    $_SESSION["gvar"]="Sry! Email/password didn't match! Try again!";
            include 'login.php';
}

$conn->close();

/*$servername = "localhost";
$username = "root";
$password = "";
//MySQLi object oriented style NOT procedural or PDO
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



#--------------
$conn->close();*/
################
	//$mysqli = new mysqli("localhost", "root", "", "nerdherd");
    //$result = $mysqli->query("SELECT id FROM users");

?>
 


 
