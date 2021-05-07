<?php 
     
     
    require_once ("checkUser.php");
     
    if (isset($_POST['submit'])) {
        if (!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['Email'])) { 
            $em = $_POST['Email'];           
            echo checkUser($em);       
            }
            else {
                echo "fill up the field";
            }       
    }
   

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./bootstrap.css">
</head>

<body>
    <h1 class="text-center text-primary">REGISTER USER</h1>
    <form class="  w-50 mx-auto" method="post">
        <div class="form-group">
            <label for="fName">First Name</label>
            <input class="form-control" type="text" name="fName">
        </div> 
        <div class="form-group">
            <label for="lName">LastName</label>
            <input class="form-control" type="text" name="lName">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input class="form-control" type="email" name="Email">
        </div>
        <button class="btn btn-primary" type="submit" name="submit">submit</button>
    </form>
</body>

</html>