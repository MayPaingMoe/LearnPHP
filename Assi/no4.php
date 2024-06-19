<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    
<?php
  echo "<table bordered cellpadding='3px' cellspacing='0px'>";
  for($i = 1; $i <= 6; $i++){
    echo "<tr>";
    for($j = 1; $j <= 5; $j++){
      echo "<td>";
      echo $i . "*" . $j . "=" . ($i * $j);
      echo "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>

</body>
</html>