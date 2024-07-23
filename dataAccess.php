<?php

//Connection with Database like controller 

class DB{
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
}