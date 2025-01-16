<?php
$host = "localhost";  // Server name or IP
$username = "root";   // Database username
$password = "";       // Database password
$database = "test"; // Database name

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";
?>