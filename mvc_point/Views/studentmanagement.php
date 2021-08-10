<?php 
include '../Models/studentDB.php';
$students = getAllStudent();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="insertStudent.php">Add new student</a>
    <table border="1" class="table  table-hover">
    <thead class="bg-primary" >
        <tr  >
            <th>Id</th>
            <th>StudentName</th>
            <th>Address</th>
            <th>Phone</th>
            <th>MathPoint</th>
            <th>LiteraryPoint</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student['StudentId']; ?></td>
                <td><?php echo $student['StudentName']; ?></td>
                <td><?php echo $student['Address']; ?></td>
                <td><?php echo $student['Phone']; ?></td>
                <td><?php echo $student['MathPoint']; ?></td>
                <td><?php echo $student['LiteraryPoint']; ?></td>
                <td><a class="btn btn-warning" href="updateStudent.php?id=<?php echo $student['StudentId']; ?>">Edit</a>
                <a class="btn btn-danger" href="../index.php?function=deleteStudent&id=<?php echo $student['StudentId'];?>">Delete</a></td>
            </tr>
            <?php }?>
    </tbody>
    </table>
</body>
</html>