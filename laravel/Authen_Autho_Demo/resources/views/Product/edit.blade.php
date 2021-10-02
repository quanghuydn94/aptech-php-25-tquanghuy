@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



            <div class="card">
                <form method="POST" action="{{ route('product.update',$product->id) }}"  enctype="multipart/form-data">
                    @csrf

                    <div class="text-center">
                        <h2 class="text-black">Edit Product</h2>

                    </div>

                    <div class="Form--Color border rounded p-2">
                        <div class="form-group">
                            <label for="name"> Name Category</label>
                            <input class="form-control" type="text" name="name"   value="{{$product->name}}">
                            @error('name')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <textarea class="form-control" type="text" name="description"
                                >{{$product->description}}</textarea>
                            @error('description')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Price</label>
                            <input class="form-control" type="text" name="price"
                                value="{{$product->price}}">
                            @error('price')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <label for="phone">Image </label>

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"  name="image" value="{{$product->image}}">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <img src="{{url('images/product')}}/{{$product->image}}" alt="{{url('images/product')}}/{{$product->image}}" width="50px">
                            @error('image')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">User Id </label>
                            <input class="form-control" type="text" name="userid" value="{{$product->userid}}" readonly >
                            @error('userid')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Category Id </label>
                            <input class="form-control" type="text" name="categoryid" value="{{$product->categoryid}}" readonly >
                            @error('categoryid')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <button type="submit" class="btn w-100 btn-danger">Save</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
