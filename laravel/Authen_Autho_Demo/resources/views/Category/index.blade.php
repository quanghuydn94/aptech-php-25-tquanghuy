@extends('index')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-8">
            @if (Auth::user()->rolename == 'admin')
                <div class="btn">
                    <a class="badge badge-primary" href="{{route('category.create')}}"> New category</a>
                </div>
            @endif
            <table class="table table-hover table-bordered ">
                <thead class="bg-light">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>UserId</th>
                        @if (Auth::user()->rolename == 'admin')
                        <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody class="">
                    @forelse ($categories as $cate )
                    <tr>
                        <td>{{$cate->name}}</td>
                        <td>{{$cate->description}}</td>
                        <td>{{$cate->userid}}</td>
                        @if (Auth::user()->rolename == 'admin')
                        <td>
                                <a href="{{route('category.edit',$cate->id)}}" class="badge badge-warning">Edit</a>
                                <a href="{{route('category.delete',$cate->id)}} " class="badge badge-danger">Delete</a>
                            </td>
                            @endif
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
