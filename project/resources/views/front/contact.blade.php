@extends('layouts.front') 
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-title">Get In Touch</h2>
                <div class="contact-info">
                    <iframe src="{{$contactps->url}}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <h3>How to reach us:</h3>
                    <p>
                        {{$contactps->details}}
                    </p>
                    <h3>Mobile <span>{{$contactps->mobile}}</span></h3>
                    <h3>E-mail <span>{{$contactps->mail}}</span></h3>
                </div>
            </div>
            <div class="col-md-6">
                @foreach( explode(",",$contactps->email) as $key => $email)
                    @php 
                        $title = explode(",",$contactps->name);
                        $img = explode(",",$contactps->picture);
                    @endphp
                <div class="editor-info">
                    <div class="editor-item">
                        <div class="editor-text">
                    
                    <h2 class="section-title">{{$title[$key]}}</h2>
                        <a href="">Mail: {{$email}} </a>
                       @if ($img[$key] == 'null')
                           NoT Found
                       @else
                       <div class="editor-img">
                        <img src="{{asset('assets/images/service/'. $img[$key])}}" alt="Editor Image">
                        </div> 
                       @endif
                        

                </div>
  
                    </div>                 
                </div>
                @endforeach
               
                <form method="POST" action="{{route('front.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">                     
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">                     
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject"  placeholder="Enter Subject">                     
                      </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea type="text" class="form-control" id="message" name="message" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
           
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Call to Action Start -->
<div class="call-to-action">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <h2>Get A Free HTML Template</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus sit amet
                </p>
            </div>
            <div class="col-md-3">
                <a class="btn" href="https://htmlcodex.com/contact">Contact Us</a>
            </div>
        </div>
    </div>
</div>

@endsection