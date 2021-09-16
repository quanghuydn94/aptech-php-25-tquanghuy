@extends('home')
@section('content')
<body>
    <a href="{{route('student.create')}}" class="border rounded bg-primary text-white p-1">Add new Student</a>
    <hr style="height:2px;" class="bg-dark">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Student Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @forelse ($students as $stu )
                    <tr>
                        <td scope="row">{{$stu->Id}}</td>
                        <td scope="row">{{$stu->StudentName}}</td>
                        <td scope="row">{{$stu->Phone}}</td>
                        <td scope="row">{{$stu->Address}}</td>
                        <td scope="row">
                            <a href="{{route('student.edit',$stu->Id)}}" class="badge badge-warning">Update</a>
                            <a href="{{route('student.delete',$stu->Id)}}" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No data!</td>
                    </tr>
                @endforelse
            </tr>
        </tbody>
    </table>
</body>
@endsection
