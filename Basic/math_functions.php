<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./math_functions.php" method="post">
        <label>X:</label>
        <input type="number" name="x"> <br>
        <button type="submit">Total</button>
    </form>
    
</body>
</html>
<?php

    $x = $_POST['x'];
    $total = null;

    $total = abs($x);
    $total = ceil($x);
    $total = floor($x);
    $total = round($x);
    $total = pow($x, 2);
    $total = sqrt($x);
    $total = log($x);
    $total = min($x, 12);
    $total = max($x, 12);
    $total = pi();
    $total = rand(10, 100);

    echo $total;
?>