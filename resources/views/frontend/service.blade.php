@extends('frontend.master')
@section('content')
<!-- service section -->

<section class="service_section layout_padding">
  <div class="service_container">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Services
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
        </p>
      </div>
      <div class="row">
        @foreach ($services as $service)
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="{{asset('images/'. $service->photo)}}" alt=""/>
            </div>
            <div class="detail-box">
              <h5>
                {{$service->name}}
              </h5>
              <p>
               {{$service->description}}
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
       @endforeach

      </div>
    </div>
  </div>
</section>

<!-- end service section -->
@endsection