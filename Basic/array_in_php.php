<?php
    $colors = array("red", "green", "blue");
    echo "The color at index 0 is {$colors[0]} <br>";
    echo "The color at index 1 is {$colors[1]} <br>";
    echo "The color at index 2 is {$colors[2]} <br>";

    $colors[3] = "yellow";

    //! Array methods:
    array_push($colors, "black"); //Adds an element to the end of the array

    array_pop($colors); // Removes the last element from the array

    array_shift($colors); // Removes the first element from the array

    array_unshift($colors, "white"); // Adds an element to the beginning of the array

    foreach($colors as $color){
        echo "$color <br>";
    }
?>