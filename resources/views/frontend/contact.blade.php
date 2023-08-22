@extends('frontend.master')
@section('content')
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
            <form action="" method="post">
            @csrf 
              <div>
                <input type="text" placeholder="Your Name" name="name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="phone" />
              </div>
              <div>
                <input type="email" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name ="message" />
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
  <!-- end contact section -->
  @endsection