<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Add new student</title>
  </head>
  <body>
  <div class="container mt-5">
        <form class="form-group" action="../controller/add_student.php" method="post">
            <h3 class="text-primary">Them thong tin</h3>
            <hr style="height:2px; color:black;" class="bg-primary">
            <div>
                <label for="">MSV</label>
                <input class="form-control" type="text" name="msv" id="">
            </div>
            <div>
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" id="">
            </div>
            <div>
                <label for="">Age</label>
                <input class="form-control" type="text" name="age" id="">
            </div>
            <div>
                <label for="">Address</label>
                <input class="form-control" type="text" name="address" id="">
            </div>
            <div>
                <label for="">Phone</label>
                <input class="form-control" type="text" name="phone" id="">
            </div>
            <div>
                <label for="">Math Point</label>
                <input class="form-control" type="text" name="mathpoint" id="">
            </div>
            <div>
                <label for="">Literary Point</label>
                <input class="form-control" type="text" name="literarypoint" id="">
            </div>
            <div class="mt-2">
                <button class="btn btn-primary" type="submit" name="save">Save</button>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
 