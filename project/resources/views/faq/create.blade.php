@extends('layouts.admin')

@section('content')

{{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

<div class="container">
   <main class="py-4">
      <h1>Create Faq</h1>
      <form method="POST" action="{{route('faq.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="title">Title</label> <input placeholder="Title" name="title" type="text" value="" id="title" class="form-control"></div>
         @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group"><label for="details">Details</label> <textarea placeholder="details" name="details" cols="50" rows="10" id="details" class="form-control"></textarea></div>
         @error('details')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror

         <input type="submit" value="Submit" class="btn btn-primary"> 
      </form>

   </main>
</div>
<div class="imgtag">
<img src="" alt="" style="display: none" height="200px" width="300px">
</div>




@endsection

