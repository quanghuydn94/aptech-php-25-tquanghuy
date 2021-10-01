@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



            <div class="card">
                <form method="POST" action="{{ route('category.create') }}" >
                    @csrf

                    <div class="text-center">
                        <h2 class="text-black">Add new Category</h2>

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
                            <label for="userid">User Id </label>
                            <select class="form-control" type="text" name="userid" >
                                @forelse ($users as $user )
                                <option value="{{$user->id}}">{{$user->rolename}}</option>
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
