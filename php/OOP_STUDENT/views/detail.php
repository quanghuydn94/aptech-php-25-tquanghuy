<?php
    session_start();
    // include '../controller/detail_student.php';
    if (isset($_GET['msv'])) {
        $msv = $_GET['msv'];
    }
    if (isset($_SESSION['info_student'])) {
        $student_arr = $_SESSION['info_student'][$msv];
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
        <div class="row">
            <div class=" col-6 mx-auto  " style="width: 18rem;">
                <div class="my-2">
                    <h3 class="text-primary">INFORMATION STUDENTS</h3>
                    <hr style="height:2px;" class="bg-primary">
                </div  >
                <ul class="card list-group list-group-flush text-success">
                    <li class="list-group-item">
                        <span>ID:</span>
                        <?php echo $student_arr['msv']; ?>
                    </li>
                    <li class="list-group-item">
                        <span>Name:</span>
                        <?php echo $student_arr['name']; ?>
                    </li>
                    <li class="list-group-item">
                        <span>Address:</span>
                        <?php echo $student_arr['address']; ?>
                    </li>
                    <li class="list-group-item">
                        <span>Phone:</span>
                        <?php echo $student_arr['phone']; ?>
                    </li>
                    <li class="list-group-item">
                        <span>Age:</span>
                        <?php echo $student_arr['age']; ?>
                    </li>
                    <li class="list-group-item">
                        <span>Math Point:</span>
                        <?php echo $student_arr['mathpoint']; ?>
                    </li>
                    <li class="list-group-item">
                        <span>Literary Point:</span>
                        <?php echo $student_arr['literarypoint']; ?>
                    </li>
                </ul>
                <a href="StudentManage.php" class="badge badge-primary">Go back!</a>
            </div>
        </div>
    </div>
</body>
</html>