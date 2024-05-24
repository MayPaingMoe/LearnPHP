<!-- arrays -->
<?php
// for indexed array no keys

$name=array(" Mie"," Hla"," Ma");

// read aray

// for formating

echo "<pre/>";
var_dump ($name);
echo "<br>";

// another way to declare array
$hello=[10,20,30];
var_dump($hello);

echo "<br>";
echo $name[0];

echo "<br>";

// array update
$name[2]="Wa";
var_dump($name);

// array delete
// unset($name);
// var_dump($name);

// add new data
$hello[3]=100;
var_dump($hello);

$hello[]=200;
var_dump($hello);



// Associative Arrays with keys and values

// create

$data=["name"=>"Mg Mg","age"=>20,"job"=>"Programmer"];

var_dump($data);
echo "<br>";
echo $data["name"];
var_dump($data["age"]);

// update array

$data["name"]="Mie";

$data["age"]="19";
$data["job"]="Developer";
var_dump($data);

// Multidimensional Arrays

$data2=[
    "name"=>"Kyaw Kyaw",
    "job"=>"dev",
    "Language"=>["php","java","c++","javascript"],
];

var_dump($data2);

var_dump($data2["Language"][1]);

$new =["Hello","Mie"];