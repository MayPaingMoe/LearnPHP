<?php

// without using oop(fatal error)
// function greet(){
//     echo "Hello Mie";
// }
// greet();
// function greet(){
//     echo "Hello John";
// }
// greet();

// class and object

//class
class Mie{
  public  $name="Mie";
   public  function greet(){
        echo "Hello Mie";
    }
}
$mie=new Mie();//change class to obj
$mie->greet();//call the function

class John{
    public function greet(){
        echo "Hello John";
    }
}
$john=new John();
$john->greet();

//obj

class Student{
    public $name="Mg Mg";
    public $age=20;
    public $major="CS";
    public function greet(){
        echo "Hello Student";
    }
    public function info(){
        //calling something in the function declare in the class by using this 
        echo $this->greet();
        echo $this->name ."-".$this->age;

    }
}
$studentinfo=new Student();//instantiation

echo $studentinfo->info();

echo $studentinfo->name;//no need $

//calling something that already declare in the class ,we don't need to add $;

//function == method
//properties==vari,array,