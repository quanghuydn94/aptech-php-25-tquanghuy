 <?php
    require('../models/productDB.php');
    $products = getAllProduct();
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
    <a href="add_product.php"> Add new product</a>
    <table   class="  border border-primary">
        <thead class="bg-primary">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $item) { ?>
                <tr>
                    <td><?php echo $item['Id']; ?></td>
                    <td><?php echo $item['ProductName']; ?></td>
                    <td><?php echo $item['Price']; ?></td>
                    <td> 
                        <img src="../<?php echo $item['ImagePath']; ?>" width="80px;" height="50px;" alt="">
                    </td>
                    <td><?php echo $item['Description']; ?></td>
                    <td>
                        <a href="updateProduct.php?id=<?php echo $item['Id']; ?>">Edit</a>
                        <a href="../index.php?function=deleteProduct&id=<?php echo $item['Id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
     
</body>
</html>