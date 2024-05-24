<?php

// indexed array

echo "<pre/>";
$index=[1,2,3];

var_dump($index);
echo "<br>";
$index[]=[5,6,7,8,9,10];
print_r($index);
echo "$index[4]";
echo "<br>";
// Associative Arrays with keys and values
$asso=[
    "name"=>"Mie",
    "age"=>19,
    "city"=>"Pinlaung",
    "Job"=>"Dev",
    "Hobby"=>"Coding",
    "Gender"=>"Female",
    "Blood"=>"AB",
    "School"=>"UCSTGI",
    "favorite_color"=>"Green",
    "idol"=>"Wang YiBo"
];

var_dump($asso);
echo "<br>";

print_r($asso);
echo "$asso[School]";
echo "<br>";
