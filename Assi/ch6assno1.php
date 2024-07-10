<?php
$color=array("white","green","red","blue","black"); 
 
 echo "\"The memory of that scene for me is like a frame of film forever 
     frozen at that memont: the $color[2] carpet,the $color[1] lawn,
     the $color[0] house, the leaden sky.The new president and his first lady. -Richard M.Nixon\"";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$color=array("white","green","red");
echo "Output: <br>".implode(",",$color);
    ?>
    <ul>
        <li><?php echo $color[1] ?></li>
        <li><?php echo $color[2]?></li>
        <li><?php  echo $color[0] ?></li >
    </ul>
</body>
</html>

<?php 

 $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
 "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
  "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
   "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
    "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

asort($ceu);
    foreach($ceu as $country=>$cap){
        echo "The capital of $country is $cap <br>";
    }


    $x=array(1,2,3,4,5);
    var_dump($x);
    echo "<br>";
    unset($x[2]);
    echo "After deleting an element from array <br>";
    var_dump($x);

echo "<br>";
$y=array(1,2,3,4,5);
    echo implode(" ",$y);
    echo "<br>";
    $z="$";
    array_splice($y,2,0,$z);
    echo implode(" ",$y);

    $s=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    asort($s);
    echo "Ascending order sort by value <br>";
    foreach($s as $k=>$v){
        echo "$k => $v <br>";
    }
    ksort($s);
    echo "Ascending order sort by key <br>";
    foreach($s as $k=>$v){
        echo "$k => $v <br>";
    }
    arsort($s);
    echo "Descending order sort by value <br>";
    foreach($s as $k=>$v){
        echo "$k => $v <br>";
    }
    krsort($s);
    echo "Descending order sort by key <br>";
    foreach($s as $k=>$v){
        echo "$k => $v <br>";
    }


$temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$avg=array_sum($temp)/count($temp);
echo "Average Temperature is :". round($avg,1) ."<br>";
sort($temp);
echo "List of lowest temperature = $temp[0],$temp[1],$temp[2],$temp[3],$temp[4] <br>";
echo "List of highest temperature = $temp[25],$temp[26],$temp[27],$temp[28],$temp[29]";


$no8=range(200,250);
$ans=[];
foreach($no8 as $num){
    if ($num %4===0){
        $ans[]=$num;
    }
}
echo "Expected Output :<br>".implode(",",$ans);

