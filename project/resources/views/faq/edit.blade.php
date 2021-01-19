@extends('layouts.admin')

@section('content')


<div class="container">
   <main class="py-4">
      <h1>Update Faq</h1>
 
      <form method="POST" action="{{route('faq.update',$faqs->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="title">Title</label> <input placeholder="Title" name="title" type="text" value="{{ $faqs->title}}" id="title" class="form-control"></div>
         @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         <div class="form-group"><label for="details">Details</label> <textarea placeholder="details" name="details" cols="50" rows="10" id="details" class="form-control">{{ $faqs->details}}</textarea></div>
        @error('details')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        
         <input type="submit" value="Submit" class="btn btn-primary">
      </form>
   </main>
</div>

@endsection


 
