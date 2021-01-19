@extends('layouts.admin')
@section('content')

<h2>Cleints <a href="{{ route('client.create') }}" class="btn btn-primary">Add Clients Comment<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Picture</th>
      <th scope="col">Comment</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($clients as $client)
    @php
        $img = explode(",", $client->picture);
    @endphp
    <tr>

      <th scope="row">{{$client->id}}</th>
      <td>{{$client->name }}</td>
      <td>{{$client->designation }}</td>
      <td>
      @foreach ($img as $item)
      <img src="{{asset('assets/images/service/'. $item)}}" height="30px" width="30px"  alt="">
      @endforeach
    </td>
    <td>{{$client->comment }}</td>
      <td><a href="{{ route('client.edit',$client->id) }}" class="btn btn-success mr-2">Update<a> </td>
        <td><a href="{{ route('client.delete',$client->id) }}" class="btn btn-danger"> Delete</a></td>
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection



