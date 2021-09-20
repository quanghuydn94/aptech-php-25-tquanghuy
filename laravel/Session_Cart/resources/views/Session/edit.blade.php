<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>
</head>
<body>
   <h3>Update student</h3>
   <form action="{{route('session.update',$student['Id'])}}" method="post">
        @csrf
        <input type="text" name="id" value="{{$student['Id']}}"><br>
        <input type="text" name="studentname" value="{{$student['StudentName']}}"><br>
        <input type="text" name="batchname" value="{{$student['Batch']}}"><br>
        <input type="text" name="phone" value="{{$student['Phone']}}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
