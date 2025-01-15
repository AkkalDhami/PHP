<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./area_volume_circumference_of_cirlce.php" method="post">
        <label>Radius:</label> <br>
        <input type="number" name="radius"> <br>
        <button type="submit">Calculate</button>
    </form>
    
</body>
</html>
<?php

    $radius = $_POST['radius']; 
    $area = pi() * $radius * $radius;
    $area = round($area, 2);

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $volume = 4/3 * pi() * $radius * $radius * $radius;
    $volume = round($volume, 2);

    echo "Area of circle is: $area sq cm";

    echo "<br> Circumference of circle is:$circumference cm";

    echo "<br> Volume of circle is: $volume cc";

?>