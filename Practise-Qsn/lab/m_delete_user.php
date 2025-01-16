<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_user";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$userId = 115; 

$sql = "Delete FROM user  WHERE id = $userId";

if (mysqli_query($conn, $sql)) {
    echo "User Deleted successfully.";
    echo "<br>Program Executed By Akkal Dhami";
} else {
    echo "Error updating user data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
