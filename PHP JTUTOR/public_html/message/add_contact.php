<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "u779679936_jtu0";
$password = "yGW442MtTygp";
$dbname = "u779679936_jtut";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact (id, user, contact)
VALUES ('', '".$_SESSION[User]."', '".$_GET[user]."')";

if ($conn->query($sql) === TRUE) {
    header("Location: https://www.jtutor.ml/message/?user=".$_GET['user']);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>