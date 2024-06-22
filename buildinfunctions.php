<?php

// trim,ltrim & rtrim
    $mytrim=" What a lot of space! ";
    echo "<br>";
    echo "|".trim($mytrim)."|";
    echo "<br>";
    echo "|".ltrim($mytrim)."|";
    echo "<br>";
    echo "|".rtrim($mytrim)."|";

    // str_repeat & str_replace

    $a=str_repeat("x",5);
    echo "$a";
    echo "<br>";

    $b="abc abc";
    $c=str_replace("b","i",$b);
    echo "$c";
    echo "<br>";

    
