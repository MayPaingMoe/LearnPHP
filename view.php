<?php

require_once "controller.php";

$connect=new DataBase();
// $connect -> Connect();
// $connect ->create("Ma","ma@gmail.com","Female","2005-9-22",18);
// $connect->read();
// $connect ->edit(3);
$connect->update(5,"admin","admin@gmail.com");
// $connect -> delete(4);