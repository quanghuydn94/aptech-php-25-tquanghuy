@extends('home')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h3 class="w3-text-teal">Update Student Management</h3>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label class="w3-text-teal w3-xlarge" for=" ">Student Name</label>
            <input class="form-control" type="text" name="studentname" value="{{$students['StudentName']}}"><br>
        </div>
        <div class="form-group">
            <label class="w3-text-teal w3-xlarge" for=" ">Phone</label>
            <input class="form-control" type="text" name="phone" value="{{$students['Phone']}}"><br>
        </div>
        <div class="form-group">
            <label class="w3-text-teal w3-xlarge" for=" ">Address</label>
            <input class="form-control" type="text" name="address" value="{{$students['Address']}}"><br>
        </div>
         
        <button class="btn w3-teal " type="submit">Save</button>
    </form>
</body>
@endsection