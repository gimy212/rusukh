<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FB75E380TZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FB75E380TZ');
</script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Rusukh</title>
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css')}}">
  <!-- fontawesome -->
   <!--<link rel="stylesheet" href="{{ asset('plugins/fontawesome/font-awesome.min.css')}}">-->
  <!-- aos -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/aos/aos.css')}}">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{ asset('plugins/venobox/venobox.css')}}">
  <!-- chart js -->
  <!--<script src="{{ asset('plugins/chart/Chart.bundle.js')}}"></script>-->
  <!--<script src="{{ asset('https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js')}}"></script>-->

  <!-- tiny -->
  <link rel='stylesheet' href='{{ asset('https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css')}}'>

  <!-- Main Stylesheet -->
  <link href="{{ asset('css/style.css?version=23')}}" rel="stylesheet">
  @if(App::getLocale() == 'en')
  <link href="{{ asset('css/main.css?version=24')}}" rel="stylesheet">
  @else
   <link href="{{ asset('css/main-ar.css?version=24')}}" rel="stylesheet">
  @endif
  <!--Favicon-->

  <!-- menu css -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.png')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('menu\public/css/style.css?version=14')}}">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  
</head>
<body>
  <!-- preloader start -->
  <div class="preloader">
    <!-- <div class="spin"></div> -->
    <div class="preloaderBg" id="preloader" onload="preloader()">
      <div class="preloader1"></div>
      <div class="preloader2"></div>
    </div>

  </div>
  <!-- preloader end -->
<!-- header -->
<header>
  <!-- top header -->
  <div class="top-header   py-2 pt-2 pb-1 py-2">
    <div class="container">
      <div class="row align-items-center">
        <!-- social icons -->
               <div class=" col-md-6 text-center text-md-left">
          <span class="text-white">@lang('home.connect_us')</span>
          <ul class="list-inline d-inline-block">
            <li class="list-inline-item"><a class="text-white d-inline-block py-2 sa-social" href="https://www.facebook.com/rusukh" target="_blank"><i>
              <img src="https://rusukh.com.sa/images/icons/facebook.svg" alt="">
              <!--<img src="{{ asset('images/icons/facebook.svg')}}" alt="">-->

            </i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block py-2 sa-social" href="https://twitter.com/rusukhsa" target="_blank"><i>
              <img src="https://rusukh.com.sa/images/icons/twitter.svg" alt="">
              <!--<img src="{{ asset('images/twitter-1.svg')}}" alt="">-->

            </i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block py-2 sa-social" href="https://www.instagram.com/rusukhsa" target="_blank"><i>
              <img src="https://rusukh.com.sa/images/icons/instagram.svg" alt="">
              <!--<img src="{{ asset('images/icons/instagram.svg')}}" alt="">-->

            </i></a></li>
            <li class="list-inline-item"><a class="text-white d-inline-block py-2 sa-social" href="https://www.linkedin.com/in/rusukh" target="_blank"><i>
              <img src="https://rusukh.com.sa/images/icons/linkedin.svg" alt="">
              <!--<img src="{{ asset('images/icons/linkedin.svg')}}" alt="">-->

            </i></a></li>

            <li class="list-inline-item"><a class="text-white d-inline-block py-2 sa-social" href="https://www.youtube.com/channel/UCswk52cGZxEiD4WLAjEM-xg" target="_blank">

              <img src="https://rusukh.com.sa/images/icons/youtube-logo.svg" alt="">
            </a></li>

          </ul>
        </div>
        <!-- mail and phone -->
        <div class=" col-md-6 text-md-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item mx-0 border-right border-secondary"><a class="text-white d-inline-block px-lg-3 px-2" href="mailto:info@Rusukh.com">info@Rusukh.com</a></li>


            <li class="list-inline-item mx-0"><a class="text-white d-inline-block px-lg-3 px-2" href="tel:+966533850888">@lang('home.call_us') <span class="text-primary">+966533850888</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /top header -->
  <!-- navigation -->
  <div class="header">
		<div class="container">
			<section class="wrapperh">
				<div class="header-item-left">
					<a href="https://rusukh.com.sa/" class="brand"><img class="logo" src="{{asset('images/logo.png')}}" alt="Rusukh" srcset=""></a>
				</div>
				<!-- Navbar Section -->
				<div class="header-item-center">
					<div class="overlay"></div>

                    @include('theme.nav')

				</div>

				<div class="header-item-right">


					<button type="button" class="menu-mobile-toggle">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</section>
		</div>
	</div>

  <!-- /navigation -->
</header>
<!-- /header -->
<!-- slider -->







@yield('content')








@include('theme.footer')
