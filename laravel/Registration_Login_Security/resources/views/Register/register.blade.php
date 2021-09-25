<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register/bootstrap.css">
    <link rel="stylesheet" href="../css/register/style.css">
</head>
<body>
        <form class="Form w-50 mx-auto my-5 px-3" action="{{route('member.store')}}" method="post">
            @csrf
            <div class="text-center">
                <h2 class="text-white">Register Form</h2>
                <p class="font-italic text-white-50"> Thank you for taking the time to help us improve the platform</p>
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
                    <input class="form-control" type="text" name="fullname"  id="fullname" placeholder="Enter your name">
                    @error('fullname')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username </label>
                    <input class="form-control" type="text" name="username" id="username"  placeholder="Username">
                    @error('username')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password </label>
                    <input class="form-control" type="text" name="password" id="password"  placeholder="Password">
                     @error('password')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirm Password </label>
                    <input class="form-control" type="text" name="password_confirmation" id="password_confirm"  placeholder="Confirm Password ">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email">
                     @error('email')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="birthday">BirthDay </label>
                    <input class="form-control" type="text" name="birthday" id="birthday"  placeholder="D/M/Y">
                     @error('birthday')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address </label>
                    <input class="form-control" type="text" name="address" id="address"  placeholder="Address">
                     @error('address')
                        <span class="text-danger"><strong>{{$message}}</strong></span>
                    @enderror
                </div>

                <button type="submit" class="btn w-100 btn-danger">Save</button>

            </div>
        </form>

</body>
</html>
