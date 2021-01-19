@extends('layouts.admin')
@section('content')

<h2>Services <a href="{{ route('service.create') }}" class="btn btn-primary">Add Services<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Picture</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($services as $service)
    @php
        $img = explode(",", $service->picture);
    @endphp
    <tr>

      <th scope="row">{{$service->id}}</th>
      <td>{{$service->title }}</td>
      <td>{{$service->details }}</td>
      <td>
      @foreach ($img as $item)
      <img src="{{asset('assets/images/service/'. $item)}}" height="30px" width="30px"  alt="">
      @endforeach
    </td>
      <td><a href="{{ route('service.edit',$service->id) }}" class="btn btn-success mr-2">Update<a> </td>
        <td><a href="{{ route('service.delete',$service->id) }}" class="btn btn-danger"> Delete</a></td>
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection



