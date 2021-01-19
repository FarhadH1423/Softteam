@extends('layouts.admin')

@section('content')
<div class="container">
   <main class="py-4">
      <h1>Update Latests News</h1>
 
      <form method="POST" action="{{route('latest.update',$latests->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="title">Name</label> <input placeholder="name" name="title" type="text" value="{{ $latests->title}}" id="name" class="form-control"></div>
         @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-group"><label for="details">Comment</label> <textarea placeholder="comment" name="details" cols="50" rows="10" id="comment" class="form-control">{{ $latests->details}}</textarea></div>
         @error('details')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror

         <div class="form-group"><label for="btnname">btnname</label> <input placeholder="designation" name="btnname" value="{{ $latests->btnname}}"  id="btnname" class="form-control"></div>
        @error('btnname')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-group"><label for="btnurl">btnurl</label> <input placeholder="designation" name="btnurl" value="{{ $latests->btnurl}}"  id="btnurl" class="form-control"></div>
          @error('btnurl')
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
<img src="{{asset('assets/images/service/'. $latests->picture)}}" height="100px" width="100px"  alt="">

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

 
