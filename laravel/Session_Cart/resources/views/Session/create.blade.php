<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Array</title>
</head>
<body>
    <h3>create student</h3>
    <form action="{{route('session.store')}}" method="post">
        @csrf
        <input type="text" name="id" placeholder="id"  required > <br>
        <input type="text" name="name" placeholder="name"  required > <br>
        <input type="text" name="batch" placeholder="batch"  required > <br>
        <input type="text" name="phone" placeholder="phone"  > <br>
        <button type="submit">create</button>
    </form>
</body>
</html>
