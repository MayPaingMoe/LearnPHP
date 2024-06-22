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
    echo "str_repeat = $a";
    echo "<br>";

    $b="abc abc";
    $c=str_replace("b","i",$b);
    echo "str_replace = $c";
    echo "<br>";

    //strchr & strrchr
    $d="aBc abc";
    $e=strchr("$d","b");
    echo "strchr = $e";
    echo "<br>";

    //strrpos & strpos
    $f=strrpos($b,"bc");
    echo "strrpos = $f";
    echo "<br>";

    $g=strpos($b,"a");
    echo "strpos = $g";
    echo "<br>";

    //stristr & strrev

    $h=stristr($d,"b");
    echo "stristr = $h";
    echo "<br>";

    $i=strrev("abcde");
    echo "strrev = $i";
    echo "<br>";

    //strlen & strtolower
    $j=strlen("abcdefghijklmnopqrstuvwxyz");
    echo "strlen = $j";
    echo "<br>";

    echo "strtolower = ".strtolower($d);
    echo "<br>";

    //strtoupper & strtr
    echo "strtoupper = ".strtoupper("abcdefghijklmnopqrstuvwxyz");
    echo "<br>";

    $k="aa bb cc";
    $l=strtr($k,"bb","cc");
    echo "strtr = $l";
    echo "<br>";

    //substr & substr_count
    $m="Hi Mie Mie";
    $n=substr($m,2,4);
    echo "substr = $n";
    echo "<br>";

    $o="Mie";
    $p=substr_count("$m","$o");
    echo "substr_count = $p";
    echo "<br>";

    //substr_replace & strpbrk
    $q=substr_replace($m,"1",3);
    echo "substr_replace = $q";
    echo "<br>";

    echo "strpbrk = ".strpbrk($m,"Mie");
    echo "<br>";

    //ucfirst & ucwords
    $r="a B c";
    $s=ucfirst($r);
    echo "ucfirst = $s";
    echo "<br>";

    $t="mie mie";
    $u=ucwords($t);
    echo "ucwords = $u";
    echo "<br>";

    
