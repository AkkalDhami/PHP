<?php
$host = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE db_user";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
    echo "Program Executed By Akkal Dhami";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
