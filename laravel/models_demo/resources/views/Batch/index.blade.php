@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Batch Management</title>
</head>
<body>
    <div class="py-2">
        <a href="http://127.0.0.1:8000/student/create" class="badge badge-success">Add New Batch</a>  
    </div>
    <table class="table table-hover border rounded">
        <thead class="bg-primary">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($batches as $item)
                <tr>
                    <td>{{$item->Id}}</td>
                    <td>{{$item->BatchName}}</td>
                    <td>
                        <a href="batch/edit/{{$item->Id}}" class="badge badge-warning">Edit</a> 
                        <a href="batch/delete/{{$item->Id}}" class="badge badge-danger">Delete</a>
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