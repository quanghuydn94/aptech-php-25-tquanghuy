@extends('home')
@section('content')
<body class="bg-light">
    <h3 class="text-center w3-text-teal">Add new Student</h3>
    <div >
        <form action="{{route('student.create')}}" method="post" class="w3-border w3-border-teal rounded w-50 mx-auto p-3">
        @csrf
        <div class="form-group">
            <label  >Student Name</label>
            <input type="text" name="studentname" class="form-control" placeholder="Please type your fullname">
        </div>
        <div class="form-group">
            <label  >Your Num.</label>
            <input type="text" name="phone" class="form-control" placeholder="Please type your phone">
        </div>
        <div class="form-group">
            <label  >Address</label>
            <input type="text" name="address" class="form-control" placeholder="Please type your address">
        </div>
        <button type="submit" class="btn btn-outline-primary">Create</button>
        </form>
    </div>
</body>
@endsection
