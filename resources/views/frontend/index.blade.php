@extends('frontend.master')
@section('content')
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      ARCHITECT <br>
                      BUILDER CONSTRUCTION <br>
                      SERVICES
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      ARCHITECT <br>
                      BUILDER CONSTRUCTION <br>
                      SERVICES
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      ARCHITECT <br>
                      BUILDER CONSTRUCTION <br>
                      SERVICES
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      ARCHITECT <br>
                      BUILDER CONSTRUCTION <br>
                      SERVICES
                    </h1>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                      ARCHITECT <br>
                      BUILDER CONSTRUCTION <br>
                      SERVICES
                    </h1>
                    <div class="btn-box">
                      <a href="{{url('frontend.contact')}}" class="btn1">
                        Contact Us
                      </a>
                      <a href="{{url('frontend.about')}}" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
          <li data-target="#customCarousel1" data-slide-to="4"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


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
                <img src="{{asset('services/img/'. $service->photo)}}" alt=""/>
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


  <!-- about section -->

  <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->



  <!-- project section -->

  <section class="project_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Projects
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="filter_box">
          <h6>
            Category filter
          </h6>
          <nav class="owl-filter-bar">
            <a href="#" class="item active" data-owl-filter="*">All</a>
            <a href="#" class="item" data-owl-filter=".painting">Painting</a>
            <a href="#" class="item" data-owl-filter=".reconstruction">Reconstruction </a>
            <a href="#" class="item" data-owl-filter=".repair">Repairs </a>
            <a href="#" class="item" data-owl-filter=".residential">Residential </a>
            <a href="#" class="item" data-owl-filter=".styling">Styling </a>
          </nav>
        </div>

        <div class="owl-carousel project_carousel">
          <div class="item painting">
            <div class="box">
              <div class="img-box">
                <img src="images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
          <div class="item reconstruction">
            <div class="box">
              <div class="img-box">
                <img src="images/project2.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
          <div class="item repair">
            <div class="box">
              <div class="img-box">
                <img src="images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
          <div class="item residential">
            <div class="box">
              <div class="img-box">
                <img src="images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
          <div class="item styling">
            <div class="box">
              <div class="img-box">
                <img src="images/project1.jpg" alt="" />
                <a href="" class="pin_link">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  Interior work
                </h5>
                <p>
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end project section -->

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
        <div class="carousel-item active">
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
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  <!-- end client section -->

  <!-- why us section -->

  <section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us?
        </h2>
      </div>
      <div class="why_us_container">
        <div class="box">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Project done on time
            </h5>
            <p>
              Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
              making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
              Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              going through the
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Always avaliable
            </h5>
            <p>
              Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
              making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
              Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              going through the
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Professional and responsible
            </h5>
            <p>
              Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
              making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
              Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              going through the
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end why us section -->
    <!-- contact section -->
    <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="heading_container">
          <h2>
            Contact Us
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-md-1">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

@endsection