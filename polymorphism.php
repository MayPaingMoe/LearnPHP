<?php

//start polymorphism in php declare interface first
// function inside interface don't need {}

interface Dev{
    public function output();
    
}


class csharpdev implements Dev{

    public function output(){
        echo "This is C# code.";
    }
}

class phpdev implements Dev{

    public function output(){
        echo "This is PHP code.";
    }

}

class jsdev implements Dev{

    public function output(){
        echo "This is JS code.";
    }
}

$c=new csharpdev();
$c ->output();
echo "<pre/>";

$p=new phpdev();
$p ->output();
echo "<pre/>";

$j=new jsdev();
$j ->output();