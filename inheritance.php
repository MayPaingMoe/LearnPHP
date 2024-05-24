<?php

class Student{

    public function read(){
        echo "Read";
    }
    public function play(){
        echo "Play";
    }
    public function rest(){
        echo "Rest";
    }
}
$student=new Student();
$student ->read();
$student ->play();
$student ->rest();

//inher to student cuz want to use classes in that class
class unistu extends Student{
    
    public function game(){
        echo "Playing";
    }
}

$unistu=new unistu();
$unistu ->read();
$unistu ->play();
$unistu ->rest();
$unistu ->game();