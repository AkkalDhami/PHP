<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./_GET_and_POST.php" method="get">
        <label>Username</label> <br>
        <input type="text" name="username"> <br>
        <label>Password</label> <br>
        <input type="password" name="password"> <br>
        <button type="submit">Login</button>
    </form>

</body>

</html>

<?php
    // echo $_GET['username']. "<br>";
    // echo $_GET['password'];
    echo $_POST['username']. "<br>";
    echo $_POST['password'];

//! $_GET = Data is appended to the url
// NOT SECURE
// char limit
// Bookmark is possible w/ values
// GET requests can be cached
// Better for a search page

//! $_POST = Data is packaged inside the body of the HTTP request
// MORE SECURE
// No data limit
// Cannot bookmark
// GET requests are not cached
// Better for submitting credentials
?>