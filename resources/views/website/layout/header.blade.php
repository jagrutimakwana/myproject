<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{url('website/images/fevicon/fevicon.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>HandTime</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('website/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{url('website/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('website/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('website/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>
   @include('sweetalert::alert')

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index">
            <span>
              HandTime
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
            </ul>
			
			<div class="user_optio_box">
			@if(session()->has('id'))
		    <a href="profile">
			<i class="fa fa-user" aria-hidden="true"></i>
			<span>
			      Hii.. {{session('firstname')}}
		    </span>
			</a>
			<a href="customerlogout">
			<span>
			      Logout
		    </span>
			</a>
			@else
				
			<div class="user_optio_box">
            <a href="login">
            <i class="fa fa-user" aria-hidden="true"></i>
		    <span>
               Login
			   </span>
            </a>
			@endif
			
            <a href="">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
			
			
			
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
	