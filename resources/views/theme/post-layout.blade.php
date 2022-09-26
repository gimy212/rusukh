<!DOCTYPE html>
<html  style="overflow-x:hidden;" lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>{{$posts->title}}</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="{{$posts->seo_title}}">
    <meta name="keywords" content="{{$posts->keywords}}">
    <meta name="description" content="{{$posts->seo_description}}">
    <meta property="og:title" content="{{$posts->seo_title}}">
    <meta property="og:description" content="{{$posts->seo_description}}">
    <meta property="og:image" content="{{$posts->photo}}">
    <meta property="og:type" content="{{$posts->seo_title}}">
    <meta property="og:url" content="{{$posts->slug}}">
    <meta name="clientSideIngraphs" content="1" data-gauge-metric-endpoint="/content-guest/api/ingraphs/gauge" data-counter-metric-endpoint="/content-guest/api/ingraphs/counter">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css')}}">
    <!--<link rel="stylesheet" href="{{ asset('plugins/slick/slick.css')}}">-->
    <!--<link rel="stylesheet" href="{{ asset('plugins/aos/aos.css')}}">-->
    <!--<link rel="stylesheet" href="{{ asset('plugins/venobox/venobox.css')}}">-->
    <link href="{{ asset('css/style.css?version=14')}}" rel="stylesheet">
  @if(App::getLocale() == 'en')
  <link href="{{ asset('css/main.css?version=24')}}" rel="stylesheet">
  @else
   <link href="{{ asset('css/main-ar.css?version=24')}}" rel="stylesheet">
  @endif
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('menu\public/css/style.css?version=14')}}">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <!--<script src="{{ asset('plugins/chart/Chart.bundle.js')}}"></script>-->
    <!--<script src="{{ asset('https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js')}}"></script>-->
    </head>
<body >
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


            <li class="list-inline-item mx-0"><a class="text-white d-inline-block px-lg-3 px-2" href="tel:+966533850888">Call Us Now: <span class="text-primary">+966533850888</span></a></li>
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
					<a href="https://rusukh.com.sa" class="brand"><img class="logo" src="{{asset('images/logo.png')}}" alt="Rusukh" srcset=""></a>
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
