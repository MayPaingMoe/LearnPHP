<?php
$role=10;

// if($role=="admin"){
//     echo "Login successful";
// }
// else{
//     echo "Login Failed";
// }

    class adminException extends Exception{};
try{

    if($role=="admin"){
            echo "Login successful";
        }
        // else if($role=="user"){
        //     throw new Exception("This is user",404);
        // }

        else{
            throw new adminException("Login Failed",404);
            // echo "Login Failed";
        } 
}catch(Exception $e){
    // echo "<pre/>";
    // var_dump($e);
    echo $e->getMessage()." ".$e->getCode();
    // echo $e->getFile()." ".$e->getLine();

    // getMessage() show message ,getCode() show code,getFile() show wich file have error,getLine() show which line have error
    // fatal error the project down,notice error ,warning error
}
