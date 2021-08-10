<?php
require('../Models/studentDB.php');
$student = getStudentById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
     crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="  w-25 mx-auto" action="../index.php?function=updateStudent&id=<?php echo $student['StudentId'] ?>" 
    method="post">
        <h1 class="text-primary">Modify Info</h1>
        <div class="form-group">
            <label for="studentname">Student Name</label>
            <input class="form-control" value="<?php echo $student['StudentName'] ?>" type="text" name="studentname"> <br>
        </div>
        <div class="form-group">
            <label for="studentname">Address</label>
            <input class="form-control" value="<?php echo $student['Address'] ?>" type="text" name="address"> <br>
        </div>
        <div class="form-group">
            <label for="studentname">Phone</label>
            <input class="form-control" value="<?php echo $student['Phone'] ?>" type="text" name="phone"> <br>
        </div>
        <div class="form-group">
            <label for="studentname">MathPoint</label>
            <input class="form-control" value="<?php echo $student['MathPoint'] ?>" type="text" name="mathpoint"> <br>
        </div>
        <div class="form-group">
            <label for="studentname">LiteraryPoint</label>
            <input class="form-control" value="<?php echo $student['LiteraryPoint'] ?>" type="text" name="literarypoint"> <br>
        </div>

        <button class="btn-lg btn-warning w-100" type="submit">Accept</button>
    </form>
</body>
</html>