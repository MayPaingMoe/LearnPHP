<?php

$x=10;
if($x==10){
    echo "True";
}

echo "<br>";

// declare function

// no arguments
function greet(){
    echo "Hi";
}

// call function
echo greet();

echo "<br>";

// with arguments
function add($x,$y){
    $ans =$x+$y;
    echo $ans;
}

echo add(1,2);
echo "<br>";
echo add(100,100);
echo "<br>";

// default value
function sub($x=30,$y=20){
    $res=$x-$y;
    echo $res;
}
echo sub();
echo "<br>";
echo "<br>";
