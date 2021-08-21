<?php
    session_start();
    
    if(isset($_GET['msv'])) {
        $msv = $_GET['msv'];
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <form class="form-group" action="../controller/edit_student.php?msv=<?=$msv?>" method="post">
            <h3 class="text-warning">Update Information Student</h3>
            <hr style="height:2px; color:black;" class="bg-primary">
            <div>
                <label class="text-primary">ID</label>
                <input class="form-control" type="text" name="msv" value="<?= $_SESSION['info_student'][$msv]['msv'] ?>" id="">
            </div>
            <div>
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" value="<?= $_SESSION['info_student'][$msv]['name'] ?>"  id="">
            </div>
            <div>
                <label for="">Address</label>
                <input class="form-control" type="text" name="address" value="<?= $_SESSION['info_student'][$msv]['address'] ?>" id="">
            </div>
            <div>
                <label for="">Phone</label>
                <input class="form-control" type="text" name="phone" value="<?= $_SESSION['info_student'][$msv]['phone'] ?>" id="">
            </div>
            <div>
                <label for="">Age</label>
                <input class="form-control" type="text" name="age" value="<?= $_SESSION['info_student'][$msv]['age'] ?>" id="">
            </div>
            <div>
                <label for="">Math Point</label>
                <input class="form-control" type="text" name="mathpoint" value="<?= $_SESSION['info_student'][$msv]['mathpoint'] ?>" id="">
            </div>
            <div>
                <label for="">Literary Point</label>
                <input class="form-control" type="text" name="literarypoint" value="<?= $_SESSION['info_student'][$msv]['literarypoint'] ?>" id="">
            </div>
            <button class="btn btn-warning mt-3" type="submit" name="save">Update</button>
        </form>
    </div>
</body>
</html>