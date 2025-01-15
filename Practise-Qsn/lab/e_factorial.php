<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./e_factorial.php" method="post">
        <label>Enter a Positive Number: </label> <br>
        <input type="text" name="num"> <br>
        <button>Factorial</button>
    </form>
</body>

</html>
<?php
    $num = $_POST['num'];
    if($num < 0){
        echo "Please Enter Positive Number!";
        return;
    }
    function getFactorial($num) {
        $factorial = 1;
        for($i = 1; $i<=$num; $i++){
            $factorial = $factorial * $i;
        }
        return $factorial;
    }
    echo "Factorial of $num : ". getFactorial($num);
    echo "<br>Program Executed By Akkal Dhami";
?>