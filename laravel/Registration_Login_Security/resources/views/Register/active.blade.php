@extends('Register.master')
@section('content')
<div class="card card-body w-50 mx-auto">
    <h3 class="text-primary">Enter your key</h3>
    <form action="" class="form-group " method="post">
        <input type="text" class="form-control" name="vkey">
        <button type="submit" class="btn btn-primary mt-3">Active</button>
    </form>
</div>
@endsection
