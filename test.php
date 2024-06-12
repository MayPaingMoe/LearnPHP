<?php

// abstract

use Student as GlobalStudent;

abstract class student{
    public $name="Mie";
    public $age=19;

}

class StudentInfo extends student{
    public function Info(){
        echo "The Student name is ".$this->name." and ".$this->age." years old.";
    }
}

$info =new StudentInfo();
$info->Info();


// abstraction 

class Restaurant{
    public function FriedNoddle(){
        echo "This is FriedNoddle.";
    }
}

class Menu{
    public function MenuCard(){
        echo "The menu card contain all the menu that can get in this restaurant.";
    }
}

$rest=new Restaurant();
$menu=new Menu();

 $rest->FriedNoddle();
 $menu->MenuCard();

//  array
// index array

$name=array("Mie","Hla","Moe");

echo "<pre/>";

var_dump ($name);

$name[2]="May";
var_dump($name);

$hello=[10,20,30];
echo $hello[0];
var_dump ($hello);

$hello[]=40;
var_dump($hello);

// associative array

$data=["name"=>"Mg Mg","age"=>19,"job"=>"Developer"];
var_dump($data);
echo "<br>";
echo $data["name"];
echo $data["age"];
echo $data["job"];

// update array

$data["name"]="Mie Mie";
$data["age"]=18;
$data["job"]="Project Manager";

var_dump($data);

// Multidimensional array

$data1=[
    "Name"=>"Mie Mie",
    "Age"=>"19",
    "Job"=>"Developer",
    "Language"=>["Java","PHP","SQL","Boostrap"]
];

var_dump($data1);

echo $data1["Name"];
echo $data1["Age"];
var_dump( $data1["Language"][1]);

// class & obj with oop

class Mie{
    public function greet(){
        echo "Hello Mie";
    }
}

class John{
    public function greet(){
        echo "Hello John";
    }
}

$mie=new Mie();
$john=new John();

$mie->greet();
$john->greet();

class Student1{
    public $name="Mie Mie";
    public $age="19";
    public $major="CS";
    public $year="3rd year";

public function Info(){
    echo "Hello".$this->name;
}

}

$stud=new Student1();
$stud->Info();
echo $stud->name;

// constant
// define(constant,value)

define("name","mie");
echo name;

// Condition

$money=10000;

if($x>=10000){
    echo "Go to Mall";
}
else{
    echo "Sleep";
}

