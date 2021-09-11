@extends('home')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Batch Management</title>
</head>
<body>
    <h3 class="w3-text-teal">Add New Batch</h3>
    <form action="http://127.0.0.1:8000/batch/create" method="post">
        @csrf 
        <div class="form-group">
            <label class="w3-text-teal w3-xlarge" for=" ">Batch Name</label>
            <input class="form-control" type="text" name="batchname" placeholder="Type Student Name, please!">
        </div>
        <button class="btn w3-teal" type="submit">Add</button>
    </form>
</body>
 
@endsection