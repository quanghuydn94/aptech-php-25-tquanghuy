@extends('home')
@section('content')
<html>
<body>
    <a href="{{route('batch.create')}}" class="border rounded bg-primary text-white p-1">Add new batch</a>
    <hr style="height:2px;" class="bg-dark">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Batch Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($batches as $item )
                <tr>
                    <td scope="row">{{$item->Id}}</td>
                    <td scope="row">{{$item->BatchName}}</td>
                    <td scope="row">
                        <a href="{{route('batch.edit',$item->Id)}}" class="badge badge-warning">Update</a>
                        <a href="{{route('batch.delete',$item->Id)}}" class="badge badge-danger">Delete</a>
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
