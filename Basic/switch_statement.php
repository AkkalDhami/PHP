<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./switch_statement.php" method="post">
        <label>Enter Your Choice(1-Sunday..):</label><br>
        <input type="text" name="day"> <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
<?php
    $day = $_POST['day'];

    switch ($day) {
        case 1:
            echo "Sunday";
            break;
        case 2:
            echo "Monday";
            break;
        case 3:
            echo "Tuesday";
            break;
        case 4:
            echo "Wednesday";
            break;
        case 5:
            echo "Thursday";
            break;
        case 6:
            echo "Friday";
            break;
        case 7:
            echo "Saturday";
            break;
        default:
            echo "Invalid Choice";  
            break;
    }

?>