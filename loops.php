
<?php
 
// if if else elseif else nested if

 $a=5;
 $b=10;

 if($a>$b){
    echo "a is greater than b";
 }
 else{
    echo "b is greater than a";
 }

 if($a<$b)$c="Hello";
 echo $c;

 $d=$a<10?"a is less than 10":"a is greater than 10";
 echo $d;

 $e=100;

 if($e>100){
    echo "Greater than 100";

    if($e>200){
        echo "Greater than 200";}
        else{
            echo "Less than 200";
        }
    }
 
    // switch

    $fav="green";
    switch($fav){
        case "blue":echo "Your favorite color is blue";break;
        case "green":echo "Your favorite color is green";break;
        default:echo "Non of these.";
    }

    // loops
    // do while while for foreach

    $i=1;
    while($i<11){
        if($i==3)continue;
        if($i==5)break;
        echo $i;
        $i++;
    }

    while($i<3):
        echo $i;
        $i++;
    endwhile;

    do{
        echo $i;
        $i++;
    }while($i<3);

    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "$x";
      }

      $color=array("red","green","blue");
      foreach($color as $col);
      echo $col;

      $member=array("John"=>"100","Jane"=>"200","Joe"=>"300");
      foreach($menber as $x => $y);
      echo "$x:$y";



