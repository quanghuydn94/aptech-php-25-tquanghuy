<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Update Student</h3>
    <form action="" method="post">
        @csrf
        <input type="text" name="id" value="{{$students['Id']}}" placeholder="Please type your ID">
        <br>
        <input type="text" name="name" value="{{$students['Name']}}" placeholder="Please type your Name">
        <br>
        <input type="text" name="phone" value="{{$students['Phone']}}" placeholder="Please type your Phone">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>