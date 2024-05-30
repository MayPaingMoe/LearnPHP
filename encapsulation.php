<?php

//public 

class Student{

    public $name;
    public $age;
    public function __construct($name, $age)
    {
        //name behind this is declare name and =$name is arg name
        $this -> name=$name;
        $this -> age=$age;
    }
    
}

//below sentences are call instant
$stu=new Student("Ma Ma", 19);
//$stu ->name ="Ma Ma"; //assign value 

//echo is just for string

//echo $stu->name;
var_dump($stu);

// can change the value outside the class
$stu->name="Mie Mie";
$stu->age="20";
echo $stu->name;
echo $stu->age;


//if protected porperties can use inside the class or it will be fatal error
//output with var_dump();not with echo();

//private is like  protected
//the only difference is inheritance
//protected will be fatal error(uncaught)
//private will be warnning error (undefine)

//getter setter

class Mie{
    private $name="Mie";
    private $age=19;
//just for read 
    public function getName(){
        return $this ->name;
    }

    public  function setName($name){
        return $this ->name=$name;
    }
}
$mie =new Mie();
//insert value to variable
$res=$mie->getName();
echo $res;
// echo $mie->age;

$set =$mie->setName("Ko Ko");
echo $set;
