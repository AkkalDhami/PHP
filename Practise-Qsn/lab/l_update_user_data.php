<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_user";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$userId = 113; 
$newName = "Ramesh";
$newEmail = "Ramesh123@example.com";

$sql = "UPDATE user SET name = '$newName', email = '$newEmail' WHERE id = $userId";

if (mysqli_query($conn, $sql)) {
    echo "User data updated successfully.";
    echo "<br>Program Executed By Akkal Dhami";
} else {
    echo "Error updating user data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
