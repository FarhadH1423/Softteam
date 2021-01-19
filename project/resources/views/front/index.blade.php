@extends('layouts.front') 

@section('content')

        <!-- Hero Start -->
     
        <div class="hero">
            <div class="container-fluid">       
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>{{$advertises->title}}</h2>  
                        <p>{{$advertises->details}}</p>                      
                        <a class="btn" href="https://htmlcodex.com/bootstrap-agency-template">Download Now</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('assets/images/service/'. $advertises->picture)}}"  alt="Image">
                    </div>
                </div>
               
            </div>
        </div>
        <!-- Hero End -->
       
        
        <!-- About Start -->
        <div class="about">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        
                            <img src="{{asset('assets/images/service/'. $aboutus->picture)}}"  alt="Image" height="300px">                      
                    </div>
                    <div class="col-md-6">
                        <h2 class="section-title">{{$aboutus->title}}</h2>
                        <p>
                            {{$aboutus->details}}
                        </p>
                        <a class="btn" href="{{$aboutus->btnurl}}">{{$aboutus->btntext}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container-fluid">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
                </div>
                <div class="row">
                @foreach ($serves as $service)
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3>{{$service->title}}</h3>
                        <img src="{{asset('assets/images/service/'. $service->picture)}}" alt="Service">
                        <p>{{$service->details}}</p>
                    </div>
                </div>
                @endforeach
                </div>
                
                  
                    
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- FAQs Start -->
        <div class="faqs">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="section-title">Frequently Asked Questions</h2>
                        <div id="accordion">
                            <div class="card">
                                @foreach ($faqs as $d => $faq )
                                    <div class="card-header">
                                        <a class="card-link {{$d == 1 ? 'collapsed' : ''}}" data-toggle="collapse" href="#collapse{{$d}}" aria-expanded="true">
                                            {{$faq->title}}
                                        </a>
                                    </div>
                                    <div id="collapse{{$d}}" class="collapse {{$d == 1 ? 'show' : ''}}" data-parent="#accordion">
                                        <div class="card-body">
                                            {{$faq->details}}                                   
                                        </div>
                                    </div>
                          
                                @endforeach
                            </div>                       
                        </div>
                        <a class="btn" href="">Ask more</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('assets/front/images/faqs.jpg')}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <h2>Clients Review</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
                </div>
                
                    
                
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider-nav">
                            @foreach ($clients as $client)
                            <div class="slider-nav"><img src="{{asset('assets/images/service/'. $client->picture)}}" alt="Testimonial"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider">
                            @foreach ($clients as $client)
                            <div class="slider-item">
                                <h3>{{$client->name}}</h3>
                                <h4>{{$client->designation}}</h4>
                                <p>{{$client->comment}}</p>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
               
        </div>
        <!-- Testimonial End -->


        <!-- News Start -->
        <div class="news">
            <div class="container-fluid">
                <div class="row align-items-center">
                    @foreach ($latests as $latest)
                        
                   
                    <div class="col-md-6">
                        <img src="{{asset('assets/images/service/'. $latest->picture)}}" alt="Image">
                    </div>
                    <div class="col-md-6">
                        <h2 class="section-title">{{$latest->title}}</h2>
                        <p>
                            {{$latest->details}}
                        </p>
                       
                        @if ($latest->btnurl == NULL || $latest->btnname == NULL)
                        <a href="" class="btn" style="visibility: hidden"></a>
                        @else
                        <a class="btn" href="{{$latest->btnurl}}">{{$latest->btnname}}</a>
                        @endif
                       
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- News End -->


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
        <!-- Call to Action End -->

@endsection