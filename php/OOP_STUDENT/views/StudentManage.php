<?php
    session_start();
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
        <h3 class="text-primary">LIST STUDENT MANAGEMENT</h3>
        <table class="table  table-hover mt-5">
            <thead class="bg-secondary">
                <tr>
                    <th>MSV</th>
                    <th>Name</th>                
                    <th>Age</th>
                    <th>Math Point</th>
                    <th>Literary Point</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['info_student'] as $student) {?>
                <tr>
                    <td><?= $student['msv'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['age'] ?></td>
                    <td><?= $student['mathpoint'] ?></td>
                    <td><?= $student['literarypoint'] ?></td>
                    <td>
                        <a href="../controller/delete_student.php?msv=<?= $student['msv']  ?>" class="badge badge-danger">Delete</a>
                        <a href="edit.php?msv=<?= $student['msv']  ?>" class="badge badge-warning">Edit</a>
                        <a href="detail.php?msv=<?= $student['msv']  ?>" class="badge badge-primary">Detail</a>
                        <a class="badge-secondary badge">GPA <?php echo $GPA = ((int)$student['mathpoint']+(int)$student['literarypoint'])/2 ?></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="add.php" class="badge badge-success">Add new</a>
    </div>
</body>
</html>