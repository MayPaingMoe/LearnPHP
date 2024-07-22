<?php

class DataBase{
    public function Connect(){
        try{
   
            $pdo=new PDO("mysql:host=localhost;dbname=school","root");
            return $pdo;
            // die(var_dump($pdo));
            echo "Database connect Successful";
    
    
    }catch(PDOException $e){
 
        var_dump($e->getMessage());
       
    }catch(Exception $e){
    
        var_dump(($e->getMessage()));
    }
    }

    public function create($name,$email,$gender,$dob,$age){
        $pdo= $this -> connect();
     
        $newStuC=$pdo->query("INSERT INTO `STUDENT`(`name`,`email`,`gender`,`dob`,`age`)
        VALUES('$name','$email','$gender','$dob','$age');");
        if($newStuC){
            echo "New Student Create Successful!";
        }
     }

     public function read(){
        $pdo=$this->connect();

        $read=$pdo->query("Select * from `student`");

        $stuR=$read->fetchAll(PDO::FETCH_OBJ);
        // return $stuR;
        foreach($stuR as $student){
            echo "<pre/>";
            // catch with obj
            echo $student ->name. "-". $student ->email."-".$student ->gender. "-". $student ->dob."<br>";
           }
     }

     public function edit($id){
        $pdo=$this->connect();
        $edit=$pdo->query("SELECT * FROM `STUDENT` WHERE `id`=$id;");
    
        $student=$edit->fetch(PDO::FETCH_OBJ);
        //  return $student;
         echo $student ->id.".".$student ->name. "-". $student ->email."-".$student ->gender. "-". $student ->dob."<br>";
        
     }

     public function update($id,$name,$email){
        $pdo=$this->connect();
        $update=$pdo->query("UPDATE `STUDENT` SET `name`='$name',`email`='$email' WHERE `id`=$id");
        // $students=$update->fetch(PDO::FETCH_OBJ);
        if($update){
            // var_dump($update);
            echo "Update Successful";
         }
         else{
            echo "Failed";
         }
        }

    public function delete($id){
        $pdo=$this->connect();
        $delete= $pdo->query("DELETE FROM `STUDENT` WHERE `id`=$id;");
    
     if($delete){
        // var_dump($delete);
        echo "Delete Successful";
     }
     else{
        echo "Delete Faild!";
     }
    }
     

}
