<?php
//! associative array : An array made of key value pairs

$userInfos = [
    "firstName" => "Akkal",
    "lastName" => "Dhami",
];

foreach ($userInfos as $key => $value) {
    // echo "$key: $value <br>";
};


$users = [
    "username" => "AkkalDhami",
    "password" => "123456"
];
$users['email'] = "AkkalDhami123@example.com";

foreach($users as $key => $value){
    echo "$key: $value <br>";
}


$userInfos["age"] = 17;
array_pop($userInfos);
// $userInfos = array_flip($userInfos);
// $userInfos = array_reverse($userInfos);

// echo count($userInfos); // length of array


$keys =  array_keys($userInfos);
foreach ($keys as $key) {
    // echo "$key<br>";
};

$values =  array_values($userInfos);
foreach ($values as $value) {
    // echo "$value/<br>";
};
