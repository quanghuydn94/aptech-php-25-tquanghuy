@extends('home')
@section('content')
<body class="bg-light">
    <h3 class="text-center w3-text-teal">Add New Batch</h3>
    <div >
        <form action="{{route('batch.store')}}" method="post" class="w3-border w3-border-teal rounded w-50 mx-auto p-3">
        @csrf
        <div class="form-group">
            <label>Batch Name</label>
            <input type="text" name="batchname"  class="form-control" placeholder="Please type your batch name">
        </div>
        <button type="submit" class="btn btn-outline-primary">Create</button>
        </form>
    </div>
</body>
@endsection
