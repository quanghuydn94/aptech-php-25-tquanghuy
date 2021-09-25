@extends('Register.master')
@section('content')
       <body class="bg-light">
        <form   action="{{route('member.update',$member->Id)}}" method="post" class="Form w-50 mx-auto my-5 px-3">
            @csrf
            <div class="text-center">
                <h2 class="text-dark">Register Form</h2>
            </div>
            @if (session()->get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span>{{session()->get('success')}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="Form--Color border rounded p-2">
                <div class="form-group">
                    <label for="name">Full  Name</label>
                    <input class="form-control" type="text" name="fullname"  value="{{$member->FullName}}">
                    @error('fullname')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" value="" placeholder=" Password ">
                     @error('password')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirm Password </label>
                    <input class="form-control" type="password" name="password_confirmation"  placeholder="Confirm Password ">
                </div>
                <div class="form-group">
                    <label for="birthday">BirthDay </label>
                    <input class="form-control" type="text" name="birthday" value="{{$member->Birthday}}">
                     @error('birthday')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address </label>
                    <input class="form-control" type="text" name="address" value="{{$member->Address}}">
                     @error('address')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>

                <button type="submit" class="btn w-100 btn-danger">Save</button>

            </div>
        </form>
       </body>

 @endsection
