@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <form method="POST" action="{{ route('employee.update',$employee->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="text-center">
                        <h2 class="text-black">Update Employee Form</h2>

                    </div>

                    <div class="Form--Color border rounded p-2">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{$employee->name}}">
                            @error('name')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email"
                                value="{{$employee->email}}">
                            @error('email')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone </label>
                            <input class="form-control" type="text" name="phone" id="phone"
                                value="{{$employee->phone}}">
                            @error('phone')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <label for="phone">Avatar </label>

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"  name="avatar">
                                    <label class="custom-file-label" for="avatar">Choose file</label>
                                </div>
                            </div>
                            @error('avatar')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address </label>
                            <input class="form-control" type="text" name="address" id="address"
                                value="{{$employee->address}}">
                            @error('address')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">Role Name </label>
                            <input class="form-control" type="text" name="rolename" id="address"
                                value="{{$employee->rolename}}">
                            @error('rolename')
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
