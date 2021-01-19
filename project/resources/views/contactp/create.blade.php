@extends('layouts.admin')
@section('content')

<div class="container my-5">
    <form method="POST" action="{{route('contactp.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
    @csrf
        <div class="row append">
  
      @foreach (explode(',',$crets->name) as $item)
      <div class="card mx-2 my-2 " style="width: 18rem;">
        <i class="fas fa-trash"></i>
        <div class="card-body">
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name[]"  placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email[]" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="picture">Picture</label>
                  <input type="file" class="form-control" name="picture[]" id="picture" placeholder="Picture">
                </div>

        </div>
      </div>
      @endforeach
  
   

    
    </div>
    <div class="form-group">
      <label for="url">Link</label>
      <textarea type="text" class="form-control" id="link" name="url" placeholder="Enter your link"></textarea>
    </div>

    <div class="form-group">
      <label for="details">Details</label>
      <textarea type="text" class="form-control" id="details" name="details" placeholder="Enter your details"></textarea>
    </div>
  
    <div class="form-group">
      <label for="mobile">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile"  placeholder="Enter Mobile No">
    </div>

    <div class="form-group">
      <label for="mail">Mail</label>
      <input type="text" class="form-control" id="mail" name="mail"  placeholder="Enter Mail">
    </div>
   
    
    <div class="row my-5">      
        <div class="col mx-1">
      <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
</form>
    </div>
    <button class="btn btn-success add">Add More</button>
  </div>

@endsection

@section('script')
<script> 
   $(document).on('click','.fa-trash',function(){
       var all = $(".mx-2");
       if(all.length > 2){
           $(this).parent().remove();
       } else{
           $(this).parent().remove();
           $('.fa-trash').prop('disabled',true);
       }
   });  

   $('.add').click(function(){
       var r = $('.append').html();
       $('.append').append(r);
   });
</script> 
@endsection
  

  