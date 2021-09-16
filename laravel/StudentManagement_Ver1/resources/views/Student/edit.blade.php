@extends('home')
@section('content')
<body class="bg-light">
    <h3 class="text-center w3-text-teal">Update Info Student</h3>
    <div >
        <form action="{{route('student.update',$student->Id)}}" method="post" class="w3-border w3-border-teal rounded w-50 mx-auto p-3">
        @csrf
        <div class="form-group">
            <label  >Student Name</label>
            <input value="{{$student->Id}}" type="number" name="id" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label  >Student Name</label>
            <input value="{{$student->StudentName}}" type="text" name="studentname" class="form-control"  placeholder="Please type your fullname">
        </div>
        <div class="form-group">
            <label  >Your Num.</label>
            <input value="{{$student->Phone}}" type="text" name="phone" class="form-control" placeholder="Please type your phone">
        </div>
        <div class="form-group">
            <label  >Address</label>
            <input value="{{$student->Address}}" type="text" name="address" class="form-control" placeholder="Please type your address">
        </div>
        <button type="submit" class="btn btn-outline-warning">Update</button>
        </form>
    </div>
</body>
@endsection
