@extends('layouts.admin')

@section('content')
<div class="container">
   <main class="py-4">
      <h1>Update Client's Comment</h1>
 
      <form method="POST" action="{{route('client.update',$clients->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="name">Name</label> <input placeholder="name" name="name" type="text" value="{{ $clients->name}}" id="name" class="form-control"></div>
         @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         <div class="form-group"><label for="designation">Designation</label> <input placeholder="designation" name="designation" value="{{ $clients->designation}}"  id="designation" class="form-control"></div>
        @error('designation')
         <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-group"><label for="comment">Comment</label> <textarea placeholder="comment" name="comment" cols="50" rows="10" id="comment" class="form-control">{{ $clients->comment}}</textarea></div>
         @error('comment')
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
<img src="{{asset('assets/images/service/'. $clients->picture)}}" height="100px" width="100px"  alt="">

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

 
