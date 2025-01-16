<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_user";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$users = [
    [1, 'John Doe', 'john@example.com', 'password123'],
    [2, 'Jane Smith', 'jane@example.com', 'securepass456'],
    [3, 'Alice Johnson', 'alice@example.com', 'mysecret789'],
    [4, 'Bob Brown', 'bob@example.com', 'passw0rd321'],
    [5, 'Charlie Davis', 'charlie@example.com', 'adminpass654']
];

foreach ($users as $user) {
    $id = $user[0];
    $name = $user[1];
    $email = $user[2];
    $password = password_hash($user[3], PASSWORD_DEFAULT); 
    // OR,
    // $password = $user[3];

    $sql = "INSERT INTO user  VALUES ($id, '$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Record for 5 users inserted successfully.<br>";
    } else {
        echo "Error inserting record for $name: " . mysqli_error($conn) . "<br>";
    }
}

mysqli_close($conn);
?>
