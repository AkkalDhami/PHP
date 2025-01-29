<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_user";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


    $sql = "INSERT INTO user  VALUES (
        1, 'Sandip', 'Sandip123@gmail.com', 'sjhdsij',
        2, 'Shash', 'Shash65@gmail.com', 'seckdkjdfskj',
        3, 'akkal', 'akkal@gmail.com', 'mysecret789',
        4, 'Bibek', 'Bibek@gmail.com', 'passw0rd321',
        5, 'suraj', 'suraj@gmail.com', 'adminpass654'
       )
     ";

    if (mysqli_query($conn, $sql)) {
        echo "Record for 5 users inserted successfully.<br>";
        echo "Program Executed By Akkal Dhami";
     
    } else {
        echo "Error inserting record for 5 users : " . mysqli_error($conn) . "<br>";
    }

mysqli_close($conn);
?>