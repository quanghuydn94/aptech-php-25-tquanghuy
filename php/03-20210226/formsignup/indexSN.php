<!DOCTYPE html>
<html>
    <head>
        <title>Form sign up</title>
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./bootstrap.css">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <form class="form-group bg-white w-50 mx-auto p-2 Form " action="info.php" method="POST">
            <h3 class="text-primary mx-auto w-50 text-center">SIGN UP</h3>
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Name...">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Email...">
            <label for="pword">Password</label>
            <input class="form-control" type="password" name="pword" id="pword" placeholder="Password...">
            <label for="cpword">Confirm Password</label>
            <input class="form-control" type="password" name="cpword" id="cpword" placeholder="Confirm Password...">
            <label for="dateOfBirth">Date</label>
            <input class="form-control" type="date" name="dateOfBirth" id="dateOfBirth">
            <button class="btn btn-outline-primary w-100 mt-3" type="submit">Sign Up</button>
        </form>
    </body>
</html>