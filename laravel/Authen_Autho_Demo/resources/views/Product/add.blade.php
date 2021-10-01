@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



            <div class="card">
                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" >
                    @csrf

                    <div class="text-center">
                        <h2 class="text-black">Add new Product</h2>

                    </div>

                    <div class="Form--Color border rounded p-2">
                        <div class="form-group">
                            <label for="name"> Name Category</label>
                            <input class="form-control" type="text" name="name"   placeholder="Enter your name">
                            @error('name')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <textarea class="form-control" type="text" name="description"
                                placeholder="Enter Description "></textarea>
                            @error('description')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Price</label>
                            <input class="form-control" type="text" name="price"
                                placeholder="Enter price ">
                            @error('price')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">Image</label>
                            <input class="form-control" type="file" name="image">
                            @error('image')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="userid">User Id </label>
                            <select class="form-control" type="text" name="userid" >
                                @forelse ($users as $user )
                                <option value="{{$user->id}}">{{$user->rolename}}</option>
                                @empty
                                    <option value="0">No data!</option>
                                @endforelse
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="categoryid">Category Id </label>
                            <select class="form-control" type="text" name="categoryid" >
                                @forelse ($categories as $cate )
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @empty
                                    <option value="0">No data!</option>
                                @endforelse
                            </select>

                        </div>


                        <button type="submit" class="btn w-100 btn-danger">Save</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
