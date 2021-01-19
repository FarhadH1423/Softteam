@extends('layouts.admin')
@section('content')

<h2>Latest News <a href="{{ route('latest.create') }}" class="btn btn-primary">Add Latest News<a></h2>
<br>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
      <th scope="col">Picture</th>
      <th scope="col">Button Name</th>
      <th scope="col">Button URL</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach($latests as $latest)
    <tr>
      <th scope="row">{{$latest->id}}</th>
      <td>{{$latest->title }}</td>
      <td>{{$latest->details }}</td>
      <td>
     
      <img src="{{asset('assets/images/service/'. $latest->picture)}}" height="30px" width="30px"  alt="">
     
    </td>
    <td>{{$latest->btnname }}</td>
    <td>{{$latest->btnurl }}</td>
    <td>
      <form action="{{route('latest.check')}}" method="GET">  
        <input type="hidden" value="{{$latest->id}}" name="check">  
        <button class="btn {{$latest->checks == 1 ? 'btn-success' : 'btn-primary'}}"  id="bttn" value="{{$latest->checks}}"> 
          @if($latest->checks == 1)   
            Checked
          @else
          Check
          @endif
        </button>
      </form>
     
    
    </td>
      <td><a href="{{ route('latest.edit',$latest->id) }}" class="btn btn-success mr-2">Update<a>
          <a href="{{ route('latest.delete',$latest->id) }}" class="btn btn-success mr-2">Delete<a> </td>
      </tr>
@endforeach

  </tbody>
</table>

@endsection




