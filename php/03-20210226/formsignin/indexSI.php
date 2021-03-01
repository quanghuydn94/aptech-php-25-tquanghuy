<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Sign in</title>
        <link rel="stylesheet" href="./bootstrap.css">
        <link rel="stylesheet" href="./style.css">  
    </head>
    <body>
        <form class="Form bg-white p-3 form-group w-50 mx-auto" action="info.php" method="POST">
            <h3 class="text-warning w-50 text-center mx-auto">SIGN IN</h3>
            <label for="eMail">Email</label>
            <input class="form-control" type="email" name="eMail" placeholder="Email...">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password...">
            <button class="btn btn-warning w-100 mt-5">Sign in</button>
        </form>
    </body>
</html>