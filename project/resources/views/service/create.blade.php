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
      <h1>Create Services</h1>
      <form method="POST" action="{{route('service.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
         @csrf
         <div class="form-group"><label for="title">Title</label> <input placeholder="Title" name="title" type="text" value="" id="title" class="form-control"></div>
         @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group"><label for="details">Details</label> <textarea placeholder="details" name="details" cols="50" rows="10" id="details" class="form-control"></textarea></div>
         @error('details')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-group"><label for="details">Picture</label> <input placeholder="Picture" name="picture[]" multiple  type="file" id="Picture" class="form-control"></div>
         @error('picture')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <input type="submit" value="Submit" class="btn btn-primary"> 
      </form>

   </main>
</div>
<div class="imgtag">

</div>




@endsection

@section('script')


<script>
    $(document).on('change','#Picture', function(){
        var files = event.target.files;
        $('.imgtag').html('');
        if (files) {
            var filesAmount = files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                  $('.imgtag').append(`<img src="${event.target.result}" alt=""  height="100px" width="120px">`);
                }
                reader.readAsDataURL(files[i]); 
            }
        }


  

    });
  
  

</script> 
  
@endsection