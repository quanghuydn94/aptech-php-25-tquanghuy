<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Student Management</title>
</head>
<body>
    <a href="{{route('session.create')}}">Add new student Session</a>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Batch</th>
                <th>Phone</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student )
                <tr>
                    <td>{{$student['Id']}}</td>
                    <td>{{$student['StudentName']}}</td>
                    <td>{{$student['Batch']}}</td>
                    <td>{{$student['Phone']}}</td>
                    <td><a href="{{route('session.edit',['id'=>$student['Id']])}}">Update</a></td>
                    <td><a href="{{route('session.delete',$student['Id'])}}">Delete</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"> No data!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
