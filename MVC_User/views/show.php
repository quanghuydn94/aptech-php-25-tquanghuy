<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <title>LIST USER</title>
</head>

<body>
    <a href="./insert.php">Add user</a>
    <h1 class="text-warning">Danh sach members</h1>
    <table border="1"  class="table table-hover table-bordered text-center w-75 mx-auto">
        <thead>
            <tr class="bg-primary table-hover">
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Action</th>
                 
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($list_user as $key) {
                    $del = '<a href="index.php?url=views/show&action=del&id='.$key['id'].'">Delete</a>';
                    $edit = '<a href="index.php?url=views/showshow&action=edit&it='.$key['id'].'">Edit</a>';
                    echo '<tr>
                    <td>'.$key['id'].'</td>
                    <td>'.$key['firstname'].'</td>
                    <td>'.$key['lastname'].'</td>
                    <td>'.$key['email'].'</td>
                    <td>'.$del.'</td>
                    <td>'.$edit.'</td>
                    </tr>';

                }
            ?>
             
        </tbody>
    </table>

</body>

</html>