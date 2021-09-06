<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Add new Student</h3>
    <form action="create" method="post">
        @csrf
        <input type="text" name="id" id="" placeholder="Please type your ID">
        <br>
        <input type="text" name="name" id="" placeholder="Please type your Name">
        <br>
        <input type="text" name="phone" id="" placeholder="Please type your Phone">
        <br>
        <button type="submit">Add new</button>
    </form>
</body>
</html>