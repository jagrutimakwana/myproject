@extends('website.layout.structure')
@section('main_container')

<!-- about section -->

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
	 
        <div class="col-lg-4" style="min-height: 400px;">
          <div class="img_container">
            <div class="img-box b1">
              <img src="{{url('upload/customer/'.$data->file)}}" alt="">
            </div>
           
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h2>
              Manage Profile Page
            </h2><br>
			
            <h5>
              Firstname :  {{$data->firstname}}<br><br>
			  Lastname :  {{$data->lastname}}<br><br>
			  Email : {{$data->email}}<br><br>
			  Contact No :  {{$data->mobile}}<br><br>
			  Address :  {{$data->address}}<br><br>
			  Gender :  {{$data->gender}}<br><br>
			  Languages :  {{$data->languages}}<br><br>
			  
			  </h5>
			  <div class="btn-box">
            <a href="{{url('profile/'.$data->id)}}" class="btn2">
              Edit Profile
            </a>
			</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->


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
                <img src="{{url('website/images/location-white.png')}}" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{url('website/images/telephone-white.png')}}" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{url('website/images/envelope-white.png')}}" width="18px" alt="">
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
                      <img src="{{url('website/images/w1.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('website/images/w2.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('website/images/w3.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('website/images/w4.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('website/images/w5.png')}}" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="{{url('website/images/w6.png')}}" alt="">
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
                <img src="{{url('website/images/fb.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{url('website/images/twitter.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{url('website/images/linkedin.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{url('website/images/youtube.png')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  @endsection