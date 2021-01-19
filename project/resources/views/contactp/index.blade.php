@extends('layouts.admin')

@section('content')

<h2>Cleints <a href="{{ route('contactp.create') }}" class="btn btn-primary">Add Contact Person<a></h2>
    <br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Picture</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  {{-- <tbody>
  @foreach($advs as $adv)
    <tr>
      <th scope="row">{{$adv->id}}</th>
      <td>{{$adv->title }}</td>
      <td>{{$adv->details }}</td>
      <td>{{$adv->picture }}</td>
      <td><a href="{{ route('advertise.edit',$adv->id) }}" class="btn btn-success mr-2">Update<a> </td>
    </tr>
    
@endforeach

  </tbody> --}}
</table>

@endsection



