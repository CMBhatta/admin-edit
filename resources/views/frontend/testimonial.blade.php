@extends('frontend.master')
@section('content')
<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach($testimonials as $key=>$testimonial)

        <div class="{{ $key==0 ? 'carousel-item active' : 'carousel-item' }}">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset('images/'. $testimonial->photo)}}" >
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          {{$testimonial->name}}
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      {{$testimonial->description}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset('images/'. $testimonial->photo)}}" >
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <ol class="carousel-indicators">
        @foreach($testimonials as $key=>$testimonial)
        <li data-target="#customCarousel2" data-slide-to="{{$key}}" class="{{$key==0? 'active':''}}"></li>
        @endforeach
        {{-- <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li> --}}
      </ol>
    </div>
  </section>
  <!-- end client section -->
  @endsection
<!-- client section -->
    {{-- <div class="product-carousel carousel-wrap" id="product-carousel" data-aos="fade-up">
      @foreach($testimonials as $testimonial)
      <div>
        <div class="product-wrap">
            <div class="product-fig">
              <a href="">
               <img src="{{asset('images/'. $testimonial->photo)}}" >
                
              </a>
            </div>
            <div class="product-desc">
              <h3>
                <strong>
                  <a href="">  {{$testimonial->name}}</a>
                </strong>
              </h3>
              <p>{{$testimonial->description}}</p>
            </div>
        </div>
      </div>
      @endforeach
    </div> --}}

   