<?php
 echo "<pre/>";

//create();
// read ();
// edit();
// update();
delete();

function create(){
    try{
        // connect to database
        $pdo=new PDO("mysql:host=localhost;dbname=school","root");
    
        echo "Database connect Successful";

// create data
// use query in pdo cuz connect database
    $statement=$pdo->query("INSERT INTO `STUDENT`(`name`,`email`,`gender`,`dob`,`age`)
    VALUES('John Doe','john@gmail.com','male','1998-01-01','27');");

echo "<br>";

echo "Data insert Complete";
// var_dump($statement);
}catch(PDOException $e){

   

    var_dump($e->getMessage());
   
}catch(Exception $e){

    var_dump(($e->getMessage()));
}
}

 function read(){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=school","root");

        $statement=$pdo->query("Select * from `student`");
    
       
    // select all

    // fetch just one data,fetchall  all data
    // fetch-assoc mean use associative array

        // $students =$statement->fetchAll(PDO::FETCH_ASSOC);
    
        // // foreach satement vari and as new vari 
        // foreach($students as $student){
        //     echo "<pre/>";
        //catch with array
        //      echo $student["name"]."-". $student["email"];
    
        // }

        // fetch-obj return as obj

        $students=$statement->fetchAll(PDO::FETCH_OBJ);

       
       foreach($students as $student){
        echo "<pre/>";
        // catch with obj
        echo $student ->name. "-". $student ->email;
       }

}catch(PDOException $e){
    echo "<pre/>";
    var_dump($e->getMessage());
   
}catch(Exception $e){

    var_dump(($e->getMessage()));
}
}

   //edit
   function edit(){

    try{
        $pdo=new PDO("mysql:host=localhost;dbname=school","root");

        $statement=$pdo->query("SELECT * FROM `STUDENT` WHERE `id`=2;");
    
       
   
        $students=$statement->fetch(PDO::FETCH_OBJ);
     

     if($students){
        var_dump($students);
        echo "Edit Successful";
     }
     else{
        echo "Failed";
     }

}catch(PDOException $e){
    echo "<pre/>";
    var_dump($e->getMessage());
   
}catch(Exception $e){

    var_dump(($e->getMessage()));
}
   }

   //update
  function update(){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=school","root");

        $statement=$pdo->query("UPDATE `STUDENT` SET `name`='Harry' WHERE `id`=2;");
    
       
   
        $students=$statement->fetch(PDO::FETCH_OBJ);
     

     if($students){
        var_dump($students);
        echo "Update Successful";
     }
     else{
        echo "Failed";
     }

}catch(PDOException $e){
    echo "<pre/>";
    var_dump($e->getMessage());
   
}catch(Exception $e){

    var_dump(($e->getMessage()));
}

   }

   //delete

   function delete(){
     try{
        $pdo=new PDO("mysql:host=localhost;dbname=school","root");

        $statement=$pdo->query("DELETE FROM `STUDENT` WHERE `id`=3;");
    
       
   
        $students=$statement->fetch(PDO::FETCH_OBJ);
     

     if($students){
        var_dump($students);
        echo "Delete Successful";
     }
     else{
        echo "Failed";
     }

}catch(PDOException $e){
    echo "<pre/>";
    var_dump($e->getMessage());
   
}catch(Exception $e){

    var_dump(($e->getMessage()));
}
   }