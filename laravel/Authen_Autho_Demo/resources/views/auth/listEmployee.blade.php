@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="btn">
                <a class="badge badge-primary" href="{{route('employee.create')}}"> New employee</a>
            </div>
            <table class="table table-hover table-bordered ">
                <thead class="bg-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Avatar</th>
                        <th>Rolename</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @forelse ($employees as $emp )
                    <tr>
                        <td>{{$emp->name}}</td>
                        <td>{{$emp->email}}</td>
                        <td>{{$emp->address}}</td>
                        <td>{{$emp->phone}}</td>
                        <td><img src="{{url('images/avatar')}}/{{ $emp->avatar}}" width="50px" alt=""></td>
                        <td>{{$emp->rolename}}</td>
                        <td>
                            <a href="{{route('employee.edit',$emp->id)}}" class="badge badge-warning">Edit</a>
                            <a href="{{route('employee.delete',$emp->id)}} " class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">No data!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
