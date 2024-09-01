<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"clinicdb");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $doctorName=$_POST["doctorName"];
    $result=mysqli_query($con,"SELECT * from clinic  where doctorName='$doctorName';");
    $numofRow=mysqli_num_rows($result); 
}
else{
    $result=mysqli_query($con,"select * from clinic;");
$numofRow=mysqli_num_rows($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ch12ass.php" method="post">
        <h1>All Specialist Doctor</h1>
        <label for="doctorName">Enter Doctor Name:</label>
        <input type="text" name="doctorName" id="doctorName" placeholder="Enter Doctor Name">
        <button type="submit">Search</button>
    <table border="1">
        <tr>
            <th>Clinic Name</th>
            <th>Doctor Name</th>
            <th>Time</th>
            <th>Date</th>
        </tr>
        <?php for($i=0;$i<$numofRow;$i++):
            $row=mysqli_fetch_array($result);
            ?>
            <tr>
                <td><?php echo $row["clinicName"]?></td>
                <td><?php echo  $row["doctorName"]?></td>
                <td><?php echo $row["time"]?></td>
                <td><?php echo $row["date"]?></td>
            </tr>
            <?php endfor; ?>
     </table>
    </form>
</body>
</html>


