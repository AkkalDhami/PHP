<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "db_user3";
$sql = "create table user (id int(11) primary key, name varchar(100), email varchar(100) unique, password varchar(255))";
// $sql = "USE db_user3";
$conn = mysqli_connect($host, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
    echo "<br>";

    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
   
}
mysqli_close($conn);

?>