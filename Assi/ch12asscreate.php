<?php
    $con=mysqli_connect("localhost","root","");
    if($con){
        echo "connected<br>";
    }
    $db=mysqli_select_db($con,"Clinicdb");
    if($db){
        echo "you have been selected Clinicdb db<br>";
    }

    $tb=mysqli_query($con,"CREATE table clinic(clinicName varchar(55), doctorName varchar(50), time varchar(50), date varchar(50));");
    if($tb){
        echo "table has been created.";
    }
    $insert=mysqli_query($con,"INSERT into clinic values
    ('OSC','Dr.Standar Saw','9:00 AM','Sunday'),
    ('Grand Han Tha','Dr.Su Su Mar','6:00 PM','Tuesday'),
    ('Ar Yu','dr.Htoo Han','9:00 AM','Monday'),
    ('Kyaw Hospital','Dr.Khin Zaw Oo','9:00 AM',''),
    ('Taw Win Hospital','Dr.Ko Ko','9:00 AM','Sunday'),
    ('Ar Yu','Dr.Khin Zaw Oo','6:00 PM','Sunday');");

    if($insert){
        echo "row successfully inserted.<br>";
    }

    mysqli_close($con);
?>