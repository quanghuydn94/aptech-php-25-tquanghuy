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
    <div class="border rounded border-primary w-50 p-3 mx-auto">
        <h3 class="text-center text-primary">Add new product</h3>
        <form class="w-50 mx-auto"   action="../index.php?function=insertProduct" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="productname">Product Name</label>
                <input class="form-control" type="text" name="productname" ><br>
            
            <label for="price">Price</label>
                <input class="form-control" type="text" name="price"><br>
            
            <label for="image">Image</label>
                <input class="form-control-file" type="file" name="image"><br>
        
            <label for="des">Description</label>
                <input class="form-control" type="text" name="des"><br>
            </div>
            <button class="btn btn-outline-warning w-100" type="submit">Add new</button>
        </form>
    </div>
</body>
</html> 