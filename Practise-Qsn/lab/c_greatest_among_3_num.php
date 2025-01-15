<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>
<?php

    $num1 = 12;
    $num2 = 13;
    $num3 = 14;
    echo "num1: {$num1} <br> num2: {$num2} <br> num3: {$num3}  <br>";

    if($num1 > $num2 && $num1 > $num3){
        echo "{$num1} is the largest number";
    } 
    elseif($num2 > $num1 && $num2 > $num3){
        echo "{$num2} is the largest number";
    }
    else{
        echo "{$num3} is the largest number";
    }
    echo "<br> Program Executed By Akkal Dhami";
?>