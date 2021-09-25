<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/register/bootstrap.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>

<div class="login">
  <h1>Login</h1>
  @if (session()->get('msg'))
      <span class="text-danger"><strong>{{session()->get('msg')}}</strong></span>
  @endif
    <form action="{{route('member.login')}}" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username"  />
        <input type="password" name="password" placeholder="Password"  />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        <span class="text-primary"><a href="{{route('member.create')}}">Register here!</a></span>
    </form>
</div>
</body>
</html>


