<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <!-- login form -->

  <form action="./n_home.php" method="post">
    <label for="name">Name:</label><br />
    <input type="text" name="name" id="name" />
    <br />
    <label for="email">Email:</label><br />
    <input type="email" name="email" id="email" />
    <br />
    <label for="password">Password:</label><br />
    <input type="password" name="password" id="password" />
    <br>

    <input type="submit" value="Login" />
  </form>
</body>

</html>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_user";

$conn = mysqli_connect($host, $username, $password, $database);


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user WHERE name = '$name' AND email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  header("Location: ./n_home.php");
  exit();
} else {
  echo "Invalid username or password.";
}

mysqli_close($conn);
?>