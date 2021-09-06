<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
</head>
<body>
    <a href="create">Add new Student</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($students as $item)
                <tr>
                    <td>{{$item['Id']}}</td>
                    <td>{{$item['Name']}}</td>
                    <td>{{$item['Phone']}}</td>
                    <td><a href="edit/{{$item['Id']}}">Edit</a></td>
                    <td><a href="delete/{{$item['Id']}}">Delete</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <b>No Student!</b>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>