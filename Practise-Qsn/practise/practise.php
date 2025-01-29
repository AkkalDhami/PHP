<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./practise.php" method="POST">
        <label>
            Email: <br>
            <input type="email" name="email">
        </label>
        <br>
        <label>
            Password: <br>
            <input type="password" name="password">
        </label>
        <br>
        <button type="submit">Login</button>
    </form>

</body>

</html>

<?php

$email = $_POST['email'];
$passwd = $_POST['password'];

// if (empty($email) || empty($passwd)) {
//     echo "Please enter email and password";
//     return;
// }

echo "Email : " . $email . "<br>";

echo "Password: $passwd <br>";
?>