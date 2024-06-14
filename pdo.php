<?php

// pdo php data object
// mysql localhost =host
// database name
// user name ,pass word



// die(var_dump("Hello World"));

// normal
// try{
//     // connect to database
//     $pdo=new PDO("mysql:host=localhost;dbname=school","root");

//     echo "Database connect Successful";
// die( var_dump($pdo));
// }catch(PDOException $e){
//     echo "<pre/>";
//     var_dump($e->getMessage());
   
// }catch(Exception $e){
//     var_dump(($e->getMessage()));
// }

// the code under die doesn't work
// die("hello world");

class Database{
    public function dbConnect(){

        try{
                // connect to database
                $pdo=new PDO("mysql:host=localhost;dbname=school","root");
            
                echo "Database connect Successful";
            // die( var_dump($pdo));
            }catch(PDOException $e){
                echo "<pre/>";
                var_dump($e->getMessage());
                // getMessage is for show error message 
               
            }catch(Exception $e){
                var_dump(($e->getMessage()));
            }
    }
}

$pdo1=new Database();
$pdo1->dbConnect();
return $pdo1;


// want to fix php we can fix it php.ini
// phpinfo() all about php all 