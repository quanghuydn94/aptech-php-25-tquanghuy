@extends('index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



            <div class="card">
                <form method="POST" action="{{ route('employee.create') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="text-center">
                        <h2 class="text-black">Register Form</h2>

                    </div>

                    <div class="Form--Color border rounded p-2">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name">
                            @error('name')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email"
                                placeholder="Enter your Email">
                            @error('email')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password </label>
                            <input class="form-control" type="text" name="password" id="password"
                                placeholder="Password">
                            @error('password')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Confirm Password </label>
                            <input class="form-control" type="text" name="password_confirmation" id="password_confirm"
                                placeholder="Confirm Password ">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone </label>
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
                            @error('phone')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
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
                            <input class="form-control" type="text" name="address" id="address" placeholder="Address">
                            @error('address')
                            <span class="text-danger"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="rolename">RoleName</label>
                            </div>
                            <select class="custom-select" name="rolename" id="rolename">
                                <option selected>...</option>
                                <option value="admin">admin</option>
                                <option value="employee">employee</option>
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
