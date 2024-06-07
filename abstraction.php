<?php

//abstract mean not need to know the function just the output
class Restaurant{
    public function friedNoddle(){
        echo "This is friedNoddle";
    }
}

$res=new Restaurant();

class Student{
    public $name="Mie Mie";
    public $age=19;
    public $major="CS";
}

class StudentInfo extends Student{
    public function info(){
        echo $this->name ."-".$this->age;
    }
}
$stuinfo=new StudentInfo();
echo $stuinfo->name;
echo $stuinfo->info();