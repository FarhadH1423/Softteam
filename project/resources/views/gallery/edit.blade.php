@extends('layouts.admin')

@section('content')


<div class="container">
   <main class="py-4">
      <h1>Update Services</h1>
 
      <form method="POST" action="{{route('gallery.update',$gallerys->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         
         <div class="form-group"><label for="picture"></label><input type="file" name="picture" id="picture"></div>
         @error('picture')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <input type="submit" value="Submit" class="btn btn-primary">
      </form>
   </main>
</div>
<img src="{{asset('asstes/images/gallery/'. $gallerys->picture)}}" height="100px" width="100px"  alt="">

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

 
