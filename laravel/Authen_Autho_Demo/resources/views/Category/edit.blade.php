@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



            <div class="card">
                <form method="POST" action="{{ route('category.update',$category->id) }}" >
                    @csrf

                    <div class="text-center">
                        <h2 class="text-black">Edit Category</h2>

                    </div>

                    <div class="Form--Color border rounded p-2">
                        <div class="form-group">
                            <label for="name"> Name Category</label>
                            <input class="form-control" type="text" name="name"   value="{{$category->name}}">
                            @error('name')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <textarea class="form-control" type="text" name="description"
                                >{{$category->description}}</textarea>
                            @error('description')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">User Id </label>
                            <input class="form-control" type="text" name="userid" value="{{$category->userid}}" readonly >
                            @error('password')
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
