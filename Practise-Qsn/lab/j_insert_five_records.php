<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_user";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $id = 115;  
    $name = "akkal2";
    $email = "akkal2@gmail.com";
    $password = "akkal123"; 

    $sql = "INSERT INTO user  VALUES ($id, '$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Record for $name inserted successfully.<br>";
        echo "Program Executed By Akkal Dhami";
    } else {
        echo "Error inserting record for $name: " . mysqli_error($conn) . "<br>";
    }

mysqli_close($conn);
?>