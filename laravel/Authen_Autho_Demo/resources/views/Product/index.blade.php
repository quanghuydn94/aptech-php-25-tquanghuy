@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            @if (session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{session()->get('success')}}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session()->get('updated'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{session()->get('updated')}}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (Auth::user()->rolename == 'admin')
            <div class="btn">
                <a class="badge badge-primary" href="{{route('product.create')}}"> New product</a>
            </div>
            @endif
            <table class="table table-hover table-bordered ">
                <thead class="bg-light">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>UserId</th>
                        <th>CategoryId</th>
                        @if (Auth::user()->rolename == 'admin' || Auth::user()->rolename == 'employee')
                        <th>Action</th>
                        @endif
                        @if (Auth::user()->rolename == 'admin')
                        <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody class="">
                    @forelse ($products as $pro )
                    <tr>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->description}}</td>
                        <td>{{$pro->price}}</td>
                        <td><img src="{{url('images/product')}}/{{ $pro->image }}" width="50px" alt=""></td>
                        <td>{{$pro->userid}}</td>
                        <td>{{$pro->categoryid}}</td>
                        @if (Auth::user()->rolename == 'admin' || Auth::user()->rolename == 'employee')
                        <td>
                            <a href="{{route('product.edit',$pro->id)}}" class="badge badge-warning">Edit</a>
                        </td>
                        @endif
                        @if (Auth::user()->rolename == 'admin')
                        <td>
                            <a href="{{route('product.delete',$pro->id)}} " class="badge badge-danger">Delete</a>
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
