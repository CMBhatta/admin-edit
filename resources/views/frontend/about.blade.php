@extends('frontend.master')
@section('content')
 <!-- about section -->

 <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            @foreach ($abouts as $about)
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
         
            <p>
              {{$about->description}}
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('images/'. $about->photo)}}" alt=""/>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- end about section -->
  @endsection