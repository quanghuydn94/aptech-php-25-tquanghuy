@extends('home')
@section('content')
<body class="bg-light">
    <h3 class="text-center w3-text-teal">Update Batch</h3>
    <div >
        <form action="{{route('batch.update',$batch->Id)}}" method="post" class="w3-border w3-border-teal rounded w-50 mx-auto p-3">
        @csrf
        <div class="form-group">
            <label  >Batch Id</label>
            <input value="{{$batch->Id}}" type="number" name="id" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label  >Batch Name</label>
            <input value="{{$batch->BatchName}}" type="text" name="batchname"  required class="form-control" >
        </div>
        <button type="submit" class="btn btn-outline-warning">Update</button>
        </form>
    </div>
</body>
@endsection

