<?php
    //! associative array : An array made of key value pairs

    $userInfos = [
        "firstName" => "Akkal",
        "lastName" => "Dhami",
    ];

    $userInfos["age"] = 17;
    array_pop($userInfos);
    $userInfos = array_flip($userInfos);
    $userInfos = array_reverse($userInfos);

    // echo count($userInfos); // length of array
    foreach ($userInfos as $key => $value) {
        echo "$key: $value <br>";
    };

    $keys =  array_keys($userInfos);
    foreach($keys as $key){
        echo "$key<br>";
    };

    $values =  array_values($userInfos);
    foreach($values as $value){
        // echo "$value/<br>";
    };
?>