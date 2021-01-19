@extends('layouts.admin')

@section('content')


<h1>About <a href="{{ route('about.create') }}" class="btn btn-primary">Add New About<a></h1>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Picture</th>
      <th scope="col">Button Text</th>
      <th scope="col">Button URL</th>
      <th scope="col">Picture</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($aboutus as $about)
    <tr>
      <th scope="row">{{$about->id}}</th>
      <td>{{$about->title }}</td>
      <td>{{$about->details }}</td>
      <td>{{$about->picture }}</td>
      <td>{{$about->btntext }}</td>
      <td>{{$about->btnurl }}</td>
      <td><a href="{{ route('about.edit',$about->id) }}" class="btn btn-success mr-2">Update<a> </td>
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection






