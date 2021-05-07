<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./bootstrap.css">
</head>

<body>
    <h1 class="text-secondary text-center mb-5">INFORMATION USERS</h1>
    <table class="table table-hover table-bordered text-center w-75 mx-auto">
        <tr class="bg-primary table-hover">
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <tbody>
            <?php 
            require_once ("connData.php");

            $query = "SELECT * FROM userprivate";
            $result = $connect->query($query);
            
            $data = array();
            
            while($row = mysqli_fetch_array($result,1)) {
                $data[] = $row;
            }
            $connect->close();
            
            for($i=0; $i<count($data);$i++) {
                echo '<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$data[$i]['firstname'].'</td>
                        <td>'.$data[$i]['lastname'].'</td>
                        <td>'.$data[$i]['email'].'</td>
                        <td><button class="bg-danger btn">Delete</button>
                            <button class="bg-warning btn">Edit</button>
                            <button class="bg-primary btn">Show</button>
                        </td>                        
                    </tr>';            
            }
             
            ?>
        </tbody>
    </table>
</body>

</html>

 