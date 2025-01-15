<?php
    $userInfos = [
        "firstName" => "Akkal",
        "lastName" => "Dhami",
        "age" => 18
    ];

    $keys = array_keys($userInfos);
    for ($i = 0; $i < count($keys); $i++) {
        echo "{$keys[$i]}: {$userInfos[$keys[$i]]}  <br>";
    }
    //? OR,
    foreach ($userInfos as $key => $value) {
        echo "$key : $value <br>";
    }
     echo "<br>Program Executed By Akkal Dhami";
?>