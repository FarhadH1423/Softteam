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
      <h1>Create Advertise</h1>
      <form method="POST" action="{{route('about.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="title">Title</label> <input placeholder="Title" name="title" type="text" value="" id="title" class="form-control"></div>
         @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group"><label for="details">Details</label> <textarea placeholder="details" name="details" cols="50" rows="10" id="details" class="form-control"></textarea></div>
         @error('details')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        
         <div class="form-group"><label for="btntext">Button Text</label> <input placeholder="btntext" name="btntext" type="btntext" value="" id="btntext" class="form-control"></div>
         @error('btntext')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group"><label for="btnurl">Button URL</label> <input placeholder="btnurl" name="btnurl" cols="50" rows="10" id="btnurl" class="form-control"></div>
         @error('btnurl')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group"><label for="details">Picture</label> <input placeholder="Picture" name="picture"  type="file" id="Picture" class="form-control"></div>
         @error('picture')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <input type="submit" value="Submit" class="btn btn-primary"> 
      </form>

   </main>
</div>

<img src="" alt="" style="display: none" height="200px" width="300px">



@endsection

@section('script')

<script>
    $(document).on('change','#Picture',function(){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            // The file's text will be printed here
            console.log(e.target.result)
            
            $('img').attr("src",e.target.result);
            $('img').show();
        };

        reader.readAsDataURL(file);
    });
</script>    
@endsection