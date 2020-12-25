@extends('layout')

@section('content')
    <h1>List of Resturants</h1>
    @if (Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{Session::get('status')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if (Session::get('delete'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{Session::get('delete')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">-</th>
          </tr>
        </thead>
        <tbody> 
        @foreach ($restaurants as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td>
              <a href={{"delete/".$item['id']}}>delete</a>
              <a href={{"edit/".$item['id']}}>edit</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

    
@endsection