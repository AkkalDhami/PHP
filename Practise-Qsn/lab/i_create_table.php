<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_user";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE user (
    id INT(11)  PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255) 
)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'user' created successfully<br>";
    echo "Program Executed By Akkal Dhami";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>