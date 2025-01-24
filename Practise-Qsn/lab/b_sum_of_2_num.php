<!-- //! With using form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./b_sum_of_2_num.php" method="post">
    <label>First Number: </label> <br>
    <input type="text" name="num1"> <br>
    <label>Second Number: </label> <br>
    <input type="text" name="num2"> <br>
    <input type="submit" value="Add"> <br>
    </form>
    <?php
     // without function:
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        echo "The sum is " . ($number1 + $number2);
        
    // with function:
    function add($num1, $num2){
        return $num1 + $num2;
    }
    $add = add($number1, $number2);
    echo "<br>The sum is {$add}";
    echo "<br> Program Executed By Akkal Dhami";
    ?>
</body>

</html>

<!-- //! without using form: -->
<?php
    // without function:
    $num1 = 12;
    $num2 = 13;
    echo "<br><br>num1: {$num1} <br> num2: {$num2} <br>";
    echo "The sum is " . ($num1 + $num2);

    // with function:
    function sum($num1, $num2){
        return $num1 + $num2;
    }
    $sum = sum($num1, $num2);
    echo "<br>The sum is {$sum}";
    echo "<br> Program Executed By Akkal Dhami";
?>