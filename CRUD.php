<?php

try{
        // connect to database
        $pdo=new PDO("mysql:host=localhost;dbname=school","root");
    
        echo "Database connect Successful";

// create data
    $statement=$pdo->query("INSERT INTO `STUDENT`(`name`,`email`,`gender`,`dob`,`age`)VALUES
('John Doe','john@gmail.com','male','1998-01-01','27');");

echo "<br>";

echo "Data insert Complete";
// var_dump($statement);

 function read(){
    $pdo=new PDO("mysql:host=localhost;dbname=school","root");
    $statement=$pdo->query("Select * from student");
    echo "<pre/>";
    $student =$statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($student as $student){
        echo $student["name"];
    }
}

    }catch(PDOException $e){
        echo "<pre/>";
        var_dump($e->getMessage());
       
    }catch(Exception $e){
        var_dump(($e->getMessage()));
    }