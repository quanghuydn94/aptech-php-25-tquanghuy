@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Student Management</title>
</head>
<body>
    <div class="py-2">
        <a href="http://127.0.0.1:8000/student/create" class="badge badge-success">Add new student</a>  
    </div>
    <table class="table table-hover border rounded">
        <thead class="bg-primary">
            <tr>
                <th>Id</th>
                <th>StudentName</th>
                <th>Phone</th>
                <th>Address</th>
                <th>BatchId</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $item)
                <tr>
                    <td>{{$item->Id}}</td>
                    <td>{{$item->StudentName}}</td>
                    <td>{{$item->Phone}}</td>
                    <td>{{$item->Address}}</td>
                    <td>{{$item->BatchId}}</td>
                    <td>
                        <a class="badge badge-warning" href="student/edit/{{$item->Id}}">Edit</a>
                        <a class="badge badge-danger" href="student/delete/{{$item->Id}}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4"><b>No data!</b></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
@endsection