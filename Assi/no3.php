<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    function factorial($n){
        if($n<=1){
            return 1;
        }
        else {
            return $n*factorial($n-1);
        }
    }

$result=factorial(4);
echo "The answer of factorial 4 is = ". $result;

?>



</body>
</html>