<?php

require_once "businessLogic.php";
// die(var_dump($_POST));
if($_SERVER['REQUEST_METHOD']==="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
}
    $student=new bL_Student();
    $student->create($name,$email,$gender,$dob,$age);

?>


