@extends('layouts.admin')
@section('content')

<h2>Faq <a href="{{ route('faq.create') }}" class="btn btn-primary">Add Faq<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($faqs as $faq)

    <tr>
      <th scope="row">{{$faq->id}}</th>
      <td>{{$faq->title }}</td>
      <td>{{$faq->details }}</td>
      <td><a href="{{ route('faq.edit',$faq->id) }}" class="btn btn-success mr-2">Update<a> </td>
        <td><a href="{{ route('faq.delete',$faq->id) }}" class="btn btn-danger"> Delete</a></td>
    </tr>
    
@endforeach

  </tbody>
</table>

@endsection



