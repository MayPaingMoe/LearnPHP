<?php

// number

$a=5;
$b=5.5;
$c="25";

 var_dump($a);
 echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";

var_dump(is_int($a));
echo "<br>";
var_dump(is_float($b));
echo "<br>";

// Casting

$d=33.1;
$int_cast=(int)$d;
echo $int_cast;
echo "<br>";

$e="33.1";
$int_cast=(int)$e;
echo $int_cast;
echo "<br>";
$f=5;
$g=1.1;
$h="hello";
$i=true;
$j=null;

echo (float)$f;
echo "<br>";
echo (int)$g;
echo "<br>";
echo (float)$h;
echo "<br>";
echo (int)$i;
echo "<br>";
echo (int)$j;
echo "<br>";

// Math

echo(pi());
echo "<br>";
echo(min(10,20,30));
echo "<br>";
echo(max(10,20,30));
echo "<br>";
echo(abs(-100));
echo "<br>";
echo(sqrt(4));
echo "<br>";
echo(round(3.4));
echo "<br>";
echo (rand(10,100));
echo "<br>";

// Arithmetic operators
// + - * / % **
echo 10+10;
echo "<br>";
echo 100-10;
echo "<br>";
echo 10*10;
echo "<br>";
echo 10/5;
echo "<br>";
echo 10%5;
echo "<br>";
echo 5**5;
echo "<br>";

// Assignment Operators
// = += -= *= /= %= 
$x=10;
$y=10;


$x+=$y;
echo $x;
echo "<br>";

$x-=$y;
echo $x;
echo "<br>";

$x*=$y;
echo $x;
echo "<br>";

$x/=$y;
echo $x;
echo "<br>";

$x%=$y;
echo $x;
echo "<br>";

// Increment / Decrement Operators
// ++ --
$x=10;
$y=10;

echo $x++;
echo "<br>";
echo ++$x;
echo "<br>";

echo $y--;
echo "<br>";
echo --$y;
echo "<br>";

// Comparison Operators
// == === != !== > < >= <= <> <=>
// $k;$l;$m;$n;$o;$p;$q;$r;$s;$t;$u;$v;$w;$x;$y;$z;

$var1=10;
$var2="10";
//  == equal
if($var1 == $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// === equal value and equal type

if($var1 === $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// <=>	Spaceship
if($var1 <=> $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// != not equal
if($var1 != $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// <> not equal
if($var1 <> $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// !==	Not identical

if($var1 !== $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// >	Greater than
if($var1 > $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// <	Less than
if($var1 < $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// >=	Greater than or equal to
if($var1 >= $var2){
    echo "Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";

// <=	Less than or equal to
if($var1 <= $var2){
    echo "It's Equal";
}
else{
    echo "Not Equal";
}
echo "<br>";







