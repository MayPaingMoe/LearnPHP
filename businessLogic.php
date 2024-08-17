<?php

//write CRUD connect with Database code like dao
require_once "dataAccess.php";

class bL_Student extends DB{
    public function read(){
        $pdo=$this->connect();

        $read=$pdo->query("Select * from `student`");

        $stuR=$read->fetchAll(PDO::FETCH_OBJ);
        return $stuR;
      //   foreach($stuR as $student){
      //       echo "<pre/>";
            // catch with obj
   //          echo $student ->name. "-". $student ->email."-".$student ->gender. "-". $student ->dob."<br>";
   //         }
     }

     public function edit($id){
        $pdo=$this->connect();
        $edit=$pdo->prepare("SELECT * FROM `STUDENT` WHERE `id`=:id;");
    
        $edit->bindParam(":id",$id);
        if($edit->execute()){
         $student=$edit->fetch(PDO::FETCH_OBJ);
         return $student;
        }
       
         // echo $student ->id.".".$student ->name. "-". $student ->email."-".$student ->gender. "-". $student ->dob."<br>";
        
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

    public function create($name,$email,$gender,$dob,$age){
        $pdo= $this -> connect();
     
        $newStuC=$pdo->prepare("INSERT INTO `STUDENT`(`name`,`email`,`gender`,`dob`,`age`)
        VALUES(:name,:email,:gender,:dob,:age);");

         $newStuC->bindParam(":name",$name);
         $newStuC->bindParam(":email",$email);
         $newStuC->bindParam(":gender",$gender);
         $newStuC->bindParam(":dob",$dob);
         $newStuC->bindParam(":age",$age);

        if( $newStuC->execute()){
            echo "New Student Create Successful!";
        }
        else {
         echo "New Student Create Failed";
        }
     }

}