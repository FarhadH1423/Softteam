@extends('layouts.admin')
@section('content')

<h2>Services <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add Services<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Picture</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
  <tbody>
  @foreach($gallerys as $gallery)
  
    <tr>
      <td>{{$gallery->id}}</td>
      <td>
        <img src="{{asset('asstes/images/gallery/'. $gallery->picture)}}" height="30px" width="30px"  alt="">
    </td>
    <td>{{$gallery->created_at}}</td>
      <td><a href="{{ route('gallery.edit',$gallery->id) }}" class="btn btn-success mr-2">Update<a> </td>
        <td><a href="{{ route('gallery.delete',$gallery->id) }}" class="btn btn-danger"> Delete</a></td>
    </tr>
    
@endforeach
  </tbody>
</table>

@endsection



