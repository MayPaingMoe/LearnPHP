<?php

require_once "businessLogic.php";

$blogic=new bL_Student();

$read=$blogic->read();
// $blogic ->edit(5);
// $blogic->update(1,"Hello","hello@gmail.com");
// $blogic->create("Life","life@gmail.com","gay","2005-09-20",18);
// $blogic->delete(6);

// foreach($read as $r){
//     echo $r->name." | ".$r->email." | ".$r->gender." | ".$r->dob." | ".$r->age."<br>";
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row" justify-content-center>
            <div class="col-10 mt-5" >
                <h3>Student List</h3>
                <a href="createPage.php" class="btn btn-primary mb-2">Create New Students</a>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($read as $s):?>
            <tr>
                <td><?php echo "$s->id" ?></td>
                <td><?php echo "$s->name" ?></td>
                <td><?php echo "$s->email"?></td>
                <td><?php echo "$s->gender" ?></td>
                <td><?php echo "$s->dob" ?></td>
                <td><?php echo "$s->age" ?></td>
                <td>
                    <a href="editPage.php?id=<?php echo "$s->id"?>" class="btn btn-warning" >Edit?</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>