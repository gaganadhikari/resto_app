@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>Add restaurants</h1>

<form method="POST" action="">
    @csrf
    <div class="form-group">    
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name">
      </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Address">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection