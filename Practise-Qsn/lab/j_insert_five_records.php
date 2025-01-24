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
        1,
        'rajan',
        'arajan@gmail.com',
        'rajan123'
    ),
    (
        2,
        'rajan',
        'rajan2@gmail.com',
        'rajan123sad'
    ),
    (
        3,
        'rajan4',
        'rajan4@gmail.com',
        'rajanas123'
    ),
    (
        4,
        'rajan5',
        'rajan5@gmail.com',
        'raasdjan123'
    ),
    (
        5,
        'rajan6',
        'rajan6@gmail.com',
        'rajasadn123'
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Record for 5 users inserted successfully.<br>";
        echo "Program Executed By Akkal Dhami";
     
    } else {
        echo "Error inserting record for 5 users : " . mysqli_error($conn) . "<br>";
    }

mysqli_close($conn);
?>