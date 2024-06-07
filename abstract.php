<?php
//poly interface = abstract
//can create obj cuz of abstract

abstract class student{
    public $name="Mie";
    public $age=19;
}

class StudentInfo extends student{
    public function info(){
        echo $this->name."-".$this->age;
    }
}

$info=new StudentInfo();
$info->info();

//