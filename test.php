<?php

// abstract

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