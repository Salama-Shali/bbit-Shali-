<?php

$servername = "localhost";
$username   = "root";
$password   = "2006";   
$dbname     = "bbit_users";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name  = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
   echo "🎉 Registration successful, welcome {$name}!";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
