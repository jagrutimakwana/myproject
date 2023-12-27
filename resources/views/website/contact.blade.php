@extends('website.layout.structure')
@section('main_container')


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{url('/contact')}}" method="post">
			@csrf
              <div>
                <input type="text" name="contact_name" value="{{old('contact_name')}}" placeholder="Your Name" />
				@error('contact_name')
				     <div class="alert alert-danger">{{ $message }}</div>
			    @enderror
              </div>
              <div>
                <input type="number" name="mobile_no" value="{{old('mobile_no')}}" placeholder="Contact Number" />
				@error('mobile_no')
				     <div class="alert alert-danger">{{ $message }}</div>
			    @enderror
              </div>
              <div>
                <input type="email" name="email" value="{{old('email')}}" placeholder="Your Email" />
				@error('email')
				     <div class="alert alert-danger">{{ $message }}</div>
			    @enderror
              </div>
              <div>
                <input type="text" name="message" value="{{old('message')}}" class="message-box" placeholder="Message" />
				@error('message')
				     <div class="alert alert-danger">{{ $message }}</div>
			    @enderror
              </div>
              <div class="btn_box">
                <button type="submit" name="submit" value="SEND">SEND</button>
                  </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 ">
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


  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          HandTime
        </h2>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="{{url('images/location-white.png')}}" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{url('images/telephone-white.png')}}" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{url('images/envelope-white.png')}}" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div class="row m-0">
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('images/w1.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('images/w2.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('images/w3.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('images/w4.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('images/w5.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('images/w6.png')}}" alt="">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="{{url('images/fb.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{url('images/twitter.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{url('images/linkedin.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{url('images/youtube.png')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  @endsection