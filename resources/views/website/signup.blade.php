@extends('website.layout.structure')
@section('main_container')


  <!-- contact section -->
  <section class="layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Sign up
        </h2>
      </div>
	  
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
           <form action="{{url('/signup')}}" method="post" enctype="multipart/form-data">
		   @csrf
                <div class="control-group">
				<label><b> Firstname: </b></label>
                    <input type="text" class="form-control" name="firstname" value="{{old('firstname')}}" placeholder="Your Firstname" >
					@error('firstname')
				     <div class="alert alert-danger">{{ $message }}</div>
			        @enderror
                    <p class="help-block text-danger"></p>
                </div>
			    <div class="control-group">
			    <label><b> Lastname: </b></label>
                    <input type="text" class="form-control" name="lastname" value="{{old('lastname')}}" placeholder="Your Lastname" >
					@error('lastname')
				     <div class="alert alert-danger">{{ $message }}</div>
			        @enderror
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
				<label><b> Email: </b></label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Your Email" >
					@error('email')
				     <div class="alert alert-danger">{{ $message }}</div>
			        @enderror
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
			    <label><b> Password: </b></label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Your Password" >
					@error('password')
				     <div class="alert alert-danger">{{ $message }}</div>
			        @enderror
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
				<label><b> Contact no: </b></label>
                    <input type="number" class="form-control" name="mobile" value="{{old('mobile')}}" placeholder="Your Contact No" >
					@error('mobile')
				     <div class="alert alert-danger">{{ $message }}</div>
			        @enderror
                    <p class="help-block text-danger"></p>
                </div>
			    <div class="control-group">
				<label><b> Address: </b></label>
                    <textarea class="form-control" name="address" value="{{old('address')}}" placeholder="Your Address" ></textarea>
					@error('address')
				     <div class="alert alert-danger">{{ $message }}</div>
			        @enderror
                    <p class="help-block text-danger"></p>
                </div>
			    <div class="control-group">
				<label><b> Gender: </b></label>
                    Male:<input type="radio" name="gender" value="Male" checked>
				    Female:<input type="radio" name="gender" value="Female">
                </div>
				<div class="control-group">
				<label><b> Language: </b></label>
                    Hindi:<input type="checkbox" name="languages[]" value="Hindi" checked>
				    English:<input type="checkbox" name="languages[]" value="English">
			        Gujrati:<input type="checkbox" name="languages[]" value="Gujrati">
                </div>
							   
			    <div class="control-group">
                <label for="inputState"><b>Country</b></label>
                    <select name="cid" class="form-control" />
                    <option value="">Select Country</option></label>
                                  
            @if(!empty($country))
                                     
                @foreach($country as $c)
               
                <option value="{{$c->cid}}">{{$c->cname}}</option>
                @endforeach
			    @endif
                </select>
				@error('cid')
				     <div class="alert alert-danger">{{ $message }}</div>
			    @enderror
                </div>
			    <div class="control-group">
                <label for="exampleInputName1"><b>Image Upload</b></label>
                <input type="file" name="file" value="{{old('file')}}" class="form-control" >
				@error('file')
				     <div class="alert alert-danger">{{ $message }}</div>
			    @enderror
                </div>			
                <div><br>
				<a href="login"> If You Already Register Then Click Login</a><br><br>
                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" value="Signup" id="sendMessageButton">Signup</button>								
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