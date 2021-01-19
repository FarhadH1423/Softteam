@extends('layouts.admin')

@section('content')


<div class="container">
   <main class="py-4">
      <h1>Update Advertise</h1>
 
      <form method="POST" action="{{route('advertise.update')}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="title">Title</label> <input placeholder="Title" name="title" type="text" value="{{ $advs->title}}" id="title" class="form-control"></div>
         @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         <div class="form-group"><label for="details">Details</label> <textarea placeholder="details" name="details" cols="50" rows="10" id="details" class="form-control">{{ $advs->details}}</textarea></div>
        @error('details')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         <div class="form-group"><label for="picture"></label><input type="file" name="picture" id="picture"></div>
         @error('picture')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <input type="submit" value="Submit" class="btn btn-primary">
      </form>
   </main>
</div>
<img src="{{asset('assets/images/service/'. $advs->picture)}}" height="100px" width="100px"  alt="">

@endsection

@section('script')

<script>
    $(document).on('change','#picture',function(){
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

 
