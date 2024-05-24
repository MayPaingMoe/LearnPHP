<?php

// between class and obj

class Student{

    //this is constructor

    public function __construct(){
        echo "This is constructor method";
    }
       
    

     function read(){
        echo "This is read method";
    }
}

$student=new Student();
 $student -> read();

