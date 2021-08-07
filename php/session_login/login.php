<?php
 session_start();
    include("connectDB.php");

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sqlLogin ="select * from userprivate where email='$email' and password='$password'";
        $result = mysqli_query($connect,$sqlLogin);
        $row = mysqli_fetch_row($result);
        if (count($row)>0) {
            $_SESSION['login'] = $row;
            header("location:home.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"> 
    <title>Login</title>
</head>
<body>
    <form action="" method="post" class="w-25 mx-auto mt-5 text-center">
        <h2 class="text-warning">LOGIN</h2>
        <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
    </form>
     
</body>
</html>