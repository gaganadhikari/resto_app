@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>Edit restaurants</h1>
<form method="POST" action="/edit">
    @csrf
    <div class="form-group">  
        <input type="hidden" name="id" value= "{{$data->id}}">  
        <label>Name</label>
        <input type= "text" name="name" class="form-control" value= "{{$data->name}}" placeholder="Enter Name">
      </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value= "{{$data->email}}" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" value= "{{$data->address}}" placeholder="Enter Address">
      </div>

    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</div>
@endsection