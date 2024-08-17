<?php
// die(var_dump($_GET));
require_once "businessLogic.php";
$student =new bL_Student();
$id=$_GET['id'];
$stuedit=$student->edit($id);
// die(var_dump($stuedit));
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <h2>Edit Student</h2>
                <form action="" method="post" class="form form-control">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo "$stuedit->name" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo "$stuedit->email" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Gender</label>
                        <select class="form-select" name="gender" id="gender">
                            <option value="disabled selected">Choose Your Gender</option>
                            <option value="male" <?php if($stuedit->gender == "male"){echo "selected";} ?>>Male</option>
                            <option value="female"  <?php if($stuedit->gender == "female"){echo "selected";} ?>>Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">DOB</label>
                        <input type="date" class="form-control" name="dob" id="dob" value="<?php echo "$stuedit->dob" ?>">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age" value="<?php echo "$stuedit->age" ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="index.php" class="btn btn-primary">Cancle</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

