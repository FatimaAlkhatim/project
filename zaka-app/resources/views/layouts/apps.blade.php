<!DOCTYPE html>
<html lang="en" >
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('home/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" src="{{asset('home/vendor/bootstrap/css/popper.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('home/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/fonts/elegant-font/html-css/style.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('home/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('home/css/slick-theme.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('home/css/slick.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('home/css/main.css')}}">
    <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
</head>
<body class="animsition" >
	<div class="container-fluid">
<div class="row expanded">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
	<!-- Header -->
	<header>
		<!-- Header desktop -->
				<div class="topbar-social">
				<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-social-links float-left">
 <a href="#"  aria-hidden="true">English</a>
 <span>|</span>
<a href="#" class="fa fa-facebook" aria-hidden="true"></a>
<a href="#" class="fa fa-instagram" aria-hidden="true"></a>
<a href="#" class=" fa fa-twitter"  aria-hidden="true"></a>
<a href="#" class=" fa fa-youtube-play" aria-hidden="true"></a>
<div class=" float-right">

   @if (Route::has('login'))   
      @auth
      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
		   Dashboard
		</a> 
@else
<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
<i class=" fa fa-user "  aria-hidden="true">?????????? ????????</i>
</a>
@if (Route::has('register'))  
<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
<i class="fa fa-user-plus " aria-hidden="true">???????????? ????????</i>
</a>
@endif
  @endauth
@endif
</div>
</div>	
</div>	
<div class="container-fluid">
<nav class="navbar navbar-expand-sm navbar-light bg-white">
<a class="navbar-brand" href="#">
		<img src="{{asset('home/images/icons/images.jpeg')}}" width=130px; height=70px;/>
 <span> ?????????????? ???????????? ???????????? ????????????</span>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
	<div class="collapse navbar-collapse" id="myMenu">
	
      <ul class="navbar-nav text-left">
        <li class="nav-item">
          <a class="nav-link"  href="/">???????????? ????????????????<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dewan">???? ??????????????</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " hraf="home">???????????? ????????????</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="home">?????????? ????????</a>
        </li>
      </ul>
</div>
    </div>
</nav>	
</div>	
</header>
</div>
</div>
<div class="container-fluid">
@yield('section')
<div>




<!-- Footer -->


<div class="b-example-divider"></div>


<div class="container-fluid">
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-0 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-linkedin"></i></a>

      </section>
      <h5> ???????????? ?????????? ?????????????? ???? ??????????????  ??????????????</h5>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      2022 @ ???????? ??????????????
      <a class="text-white" href="https://mdbootstrap.com/">Zakat.Sudan.Com</a>
    </div>
    <!-- Copyright -->
  </footer>
</div>



	




@yield('script')
