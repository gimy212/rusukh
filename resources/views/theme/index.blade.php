@extends('theme.layout')

@section('content')

<section>
    <div class="hero-slider">


        @foreach($sliders as $slider)


      <!-- slider item -->
      <div class="hero-slider-item bg-cover overlay-saiko  hero-section" data-background="{{$slider->slider_photo}}">
        <div class="container">
          <div class="row saiko-reverse">
            <div class="col-lg-6 " data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">
                @if(App::getLocale() == 'en')
              <h4 class="mb-0 letter-spacing">{{$slider->mini_title}}</h4>
              <h1 class="mb-4">{{$slider->slider_title}}</h1>
              <p class="mb-5">{{$slider->slider_content}}</p>
              <a href=" {{$slider->link}}" class="btn btn-primary-outline" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".4">@lang('home.more_details')</a>
              @else
              <h4 class="mb-0 letter-spacing">{{$slider->mini_title_ar}}</h4>
              <h1 class="mb-4">{{$slider->title_ar}}</h1>
              <p class="mb-5">{{$slider->content_ar}}</p>
              <a href=" {{$slider->link_ar}}" class="btn btn-primary-outline" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".4">@lang('home.more_details')</a>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach



    </div>
  </section>
  <!-- /slider -->
  <!-- banner feature -->

  @foreach($allcontents as $item)

  <section class="translate-top">
    <div class="container">
      <div  class="row " >
        <!-- feature item -->
  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0 wow fadeInUp" data-wow-duration="1s">
    <div class="bg-white pt-5 pb-1 px-4 text-center sa-box sa-height transition hover-bg-dark ">
      <div class="icon-bg mb-4 water-wave">
        <div  class=" icon "> <img class="iconsmall" src="images/service/oil.webp" alt="" loading="lazy" > </div>
      </div>
      <h4 class="mb-4">{{$item->serv_title1}}</h4>
      <p>{{$item->serve_content1}}</p>

    </div>
  </div>
  <!-- feature item -->
  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0 wow fadeInUp" data-wow-duration="1.5s">
    <div class="bg-white pt-5 pb-1 px-4 text-center sa-box sa-height  transition hover-bg-dark">
      <div class="icon-bg mb-4 water-wave">
        <i class=" icon ">  <img class="iconsmall" src="images/service/fog.webp" alt="" loading="lazy" > </i>
      </div>
      <h4 class="mb-4">{{$item->serv_title2}}</h4>
      <p>
        {{$item->serve_content2}}

      </p>
    </div>
  </div>
  <!-- feature item -->
  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0 wow fadeInUp" data-wow-duration="2s">
    <div class="bg-white pt-5 pb-1 px-4 text-center sa-box sa-height transition hover-bg-dark">
      <div class="icon-bg mb-4 water-wave">
        <i class=" icon ">  <img class="iconsmall" src="images/service/reuse-water.webp" alt="" loading="lazy" > </i>
      </div>
      <h4 class="mb-4">{{$item->serv_title3}}</h4>
      <p>{{$item->serve_content3}}</p>
    </div>
  </div>
  <!-- feature item -->
  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0 wow fadeInUp" data-wow-duration="2.5s">
    <div class="bg-white pt-5 pb-1 px-4 text-center sa-box sa-height transition hover-bg-dark">
      <div class="icon-bg mb-4 water-wave">
        <i class=" icon ">  <img class="iconsmall" src="images/service/eng.webp" alt="" loading="lazy" > </i>
      </div>
      <h4 class="mb-4">{{$item->serv_title4}}</h4>
      <p>
        {{$item->serve_content4}}
      </p>
    </div>
  </div>
      </div>
    </div>
  </section>

  <!-- /banner feature -->
  @endforeach

  <!-- products -->

<!-- products -->


<div class="wrapper wow fadeInUp" data-wow-duration="1.5s">

    <div class="text-center">
      <span class="section-title-border border-center"></span>
      <p class="subtitle"></p>
      <h2 class="">@lang('home.featured_products')
      </h2>
    </div>

    <div class="sa-cols">

        @foreach($products as $product)
              <div class="sa-col wow zoomIn" data-wow-duration="2s" >
                  <div class="container-products">
                @if(App::getLocale() == 'en')
                      <div class="front" style="background-image: url({{$product->prod_photo}});">
                          <div class="inner">
                        <p>{{$product->prod_title}}</p>
                        <span>{{$product->prod_bio}}</span>
                          </div>
                      </div>
                      <div class="back">
                          <div class="inner">
                            <p>{{$product->prod_desc}}</p>
                            
                @else
                 <div class="front" style="background-image: url({{$product->prod_photo}});">
                          <div class="inner">
                        <p>{{$product->title_ar}}</p>
                        <span>{{$product->bio_ar}}</span>
                          </div>
                      </div>
                      <div class="back">
                          <div class="inner">
                            <p>{{$product->desc_ar}}</p>
                @endif            
                 @if(App::getLocale() == 'en')
                <a href="{{$product->link}}">
                @else
                  <a href="{{$product->link_ar}}"> 
                @endif

                  <button  class="btn btn-primary ">@lang('home.learn_more')</button>
                </a>
                          </div>
                      </div>
                      
                      
                  </div>
              </div>

              @endforeach


          </div>
   </div>

  <!-- end products -->
  @foreach($allcontents as $item)
  <!-- service -->
  <section class="bg-gray-white wow fadeInUp" data-wow-duration="1s">
    <div class="section bg-secondary section-bottom-lg">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <span class="section-title-border border-center"></span>
            <p class="subtitle">Best Service</p>
            <h2 class="section-title text-white">@lang('home.services_We_Provide')</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="service-wrapper">
      <div class="container">
        <div class="row">
          <!-- service-item -->
  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 wow fadeInUp" data-wow-duration="1s">
    <div class="sa-card border-0 rounded-0 box-shadow sa-height">
      <img class="card-img-top rounded-0" src="images/blog/oil.jpg" alt="" loading="lazy"  >
      <div class="card-body position-relative">
        <i class="card-icon"> <img src="images/service/oil-white.png" alt="" loading="lazy" >  </i>
        <h4>
             @if(App::getLocale() == 'en')
             @foreach($contents as $itemo)
                <a href="{{$itemo->link1}}">
            @endforeach
             @else
                 @foreach($contents_ar as $itemi)
                  <a href="{{$itemi->link1}}">
                      @endforeach 
                @endif
            
            
            {{$item->prov_title1}}</a>
        
        
        </h4>
        <p class="card-text">
            {{$item->prov_desc1}}
          <br> <br>

        </p>
        <a href="{{$item->link1}}" class="btn btn-secondary btn-arrow" >@lang('home.read_more')</a>
      </div>
    </div>
  </div>
  <!-- service-item -->
  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 wow fadeInUp" data-wow-duration="1.5s">
    <div class="sa-card border-0 rounded-0 box-shadow sa-height">
      <img class="card-img-top rounded-0" src="images/blog/fog-saytem1.jpg" alt="" loading="lazy" >
      <div class="card-body position-relative">
        <i class="card-icon"> <img src="images/service/fog-white.png" alt="" loading="lazy" >  </i>
        <h4>
             @if(App::getLocale() == 'en')
             @foreach($contents as $itemo)
                <a href="{{$itemo->link2}}">
            @endforeach
             @else
                 @foreach($contents_ar as $itemi)
                  <a href="{{$itemi->link2}}">
                      @endforeach 
                @endif
        
        
        
        
        {{$item->prov_title2}}</a></h4>
        <p class="card-text">

            {{$item->prov_desc2}}



        </p>
        <a href="{{$item->link2}}" class="btn btn-secondary btn-arrow">@lang('home.read_more')</a>
      </div>
    </div>
  </div>
  <!-- service-item -->
  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 wow fadeInUp" data-wow-duration="2s">
    <div class="sa-card border-0 rounded-0 box-shadow sa-height">
      <img class="card-img-top rounded-0" src="images/blog/water-treatment.jpg" alt="" loading="lazy" >
      <div class="card-body position-relative">
        <i class="card-icon"> <img src="images/service/reuse-water-white.png" alt="" loading="lazy" >  </i>
        <h4>
            
             @if(App::getLocale() == 'en')
             @foreach($contents as $itemo)
                <a href="{{$itemo->link3}}">
            @endforeach
             @else
                 @foreach($contents_ar as $itemi)
                  <a href="{{$itemi->link3}}">
                      @endforeach 
                @endif
        
        
        
        
        {{$item->prov_title3}}</a></h4>
        <p class="card-text">
            {{$item->prov_desc3}}



        </p>
        <a href="{{$item->link3}}" class="btn btn-secondary btn-arrow">@lang('home.read_more')</a>
      </div>
    </div>
  </div>


        </div>

        <br>

        <div class="text-center " > <a  href="{{ route('singl.showw')}}" class="btn btn-primary hover-ripple">@lang('home.more_details')</a></div>
      </div>
    </div>

  </section>

  @endforeach
  <!-- /service -->


  @foreach($allcontents as $item)
  <!-- funfacts -->
  <section class="funfacts wow bounceInRight" data-wow-duration="2s">

      <div class="row bg-secondary p-5">
        <!-- funfacts item -->
  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
    <div class="d-flex align-items-center">
      <i class=" icon-lg mr-3 text-primary">
        <img class="fun-icon" src="images/icons/project.png" alt="" loading="lazy" >
      </i>
      <div>
        <h3 class="text-white mb-0"><span class="count" data-count="{{$item->crt_count1}}">0</span>+</h3>
        <span class="text-white">{{$item->crt_title1}}</span>
      </div>
    </div>
  </div>
  <!-- funfacts item -->
  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
    <div class="d-flex align-items-center">
      <i class="icon-lg mr-3 text-primary">
        <img class="fun-icon" src="images/icons/expert-100.png" alt="" loading="lazy" >

      </i>
      <div>
        <h3 class="text-white mb-0"><span class="count" data-count="{{$item->crt_count2}}">0</span>+</h3>
        <span class="text-white">{{$item->crt_title2}}</span>
      </div>
    </div>
  </div>
  <!-- funfacts item -->
  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
    <div class="d-flex align-items-center">
      <i class=" icon-lg mr-3 text-primary">

        <img class="fun-icon" src="images/icons/award-100.png" alt="" loading="lazy" >
      </i>
      <div>
        <h3 class="text-white mb-0"><span class="count" data-count="{{$item->crt_count3}}">0</span>+</h3>
        <span class="text-white">{{$item->crt_title3}}</span>
      </div>
    </div>
  </div>
  <!-- funfacts item -->
  <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
    <div class="d-flex align-items-center">
      <i class=" icon-lg mr-3 text-primary">

        <img class="fun-icon" src="images/icons/happy.png" alt="" loading="lazy" >
      </i>
      <div>
        <h3 class="text-white mb-0"><span class="count" data-count="{{$item->crt_count4}}">0</span>+</h3>
        <span class="text-white">{{$item->crt_title4}}</span>
      </div>
    </div>
  </div>
      </div>

  </section>
  <!-- /funfacts -->

  @endforeach

  @foreach($allcontents as $item)

  <!-- about us -->
  <section class="section pt-0  wow fadeInUp" data-wow-duration="1s">
    <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-5 bg-contain" data-background="images/backgrounds/about-us-bg.png">
        <!-- about us image -->
        <img class="img-fluid sa-shadow w-100 wow zoomIn" data-wow-duration="1.5s" src="images/team/ceo.webp"
        width="640" height="360"
        alt="About Image" loading="lazy" >
      </div>
      <div class="col-md-6">


        <h2 class="section-title">{{$item->message_title}}</h2>
        <p class="mb-5">

            {{$item->message_content}}

            <br> <br>
          <span style="font-weight: 700;" >

            {{$item->message_author}}
          </span>

        </p>

        <!--<a href="service.html" class="btn btn-primary hover-ripple">About us</a>-->
      </div>
    </div>
  </div>
  </section>
  <!-- /about us -->
  @endforeach


  @foreach($allcontents as $item)
  <!-- customer -->
  <section class="section  position-relative wow fadeInUp" data-wow-duration="1s">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          <span class="section-title-border"></span>
          <p class="subtitle ">@lang('home.clients')</p>
          <h2 class="section-title "> {{$item->part_title}}</h2>
          <p class="">

            {{$item->part_content}}

            </p>
        </div>
        <!-- customer logo -->
        <div class="col-md-6">
          <div class="tartist-tiny-slider-wrap">
            <div class="tartist-tiny-slider" data-chunksize="12">
              <div class="tartist-tiny-slider__item  "><img src="images/clients-logo/1.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/11.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/1231312.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/1234124.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/123456789.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/123re.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/12weffe.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/1412414.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/2.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/213.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/213123.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/2142141.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/21ff.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/222r.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/23.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/231.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/2e1.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/3213.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/34242.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/4.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/412412.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/42412.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/5.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/51512.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/6.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/7.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/8658.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/client.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/coca.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/eqweqwf.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/213.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/ewqe.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/ewqeqw.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/le.png" alt="" loading="lazy" > </div>

              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/q2e2.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/Untitled-1.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/Untitled-114124.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/wqeqw.png" alt="" loading="lazy" > </div>
              <div class="tartist-tiny-slider__item "><img src="images/clients-logo/wqeqweqw.png" alt="" loading="lazy" > </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- background shape -->
    <img src="images/backgrounds/customer-bg.png" alt="shape" loading="lazy"  class="customer-bg-shape img-fluid">
  </section>
  <!-- /customer -->

  @endforeach

  <br> <br>



  @foreach($allcontents as $item)


  <div  class="container wow fadeInUp" data-wow-duration="1s">
    <div class="text-center">
      <span class="section-title-border border-center"></span>
      <p class="subtitle"></p>
      <h2 class="section-title"> {{$item->choose}}
      </h2>
    </div>
    <div class="row sa-shadow" >


      <div class="col-sm-6 order-lg-1 order-2 ">
        <li class="d-flex align-items-center mb-5">
          <div class="text-center mr-4">

          </div>
          <div>
            <h4 class="text-center mt-5 "  > {{$item->cho_title1}} <img class="sa-iconn"  src="images/team/hear.png" alt="" loading="lazy" >  </h4>

           <p>

            {{$item->cho_content1}}
           </p>

          </div>
        </li>
        <li class="d-flex align-items-center mb-5">
          <div class="text-center mr-4">

          </div>
          <div>
            <h4  class="text-center" >{{$item->cho_title2}}  <img class="sa-iconn" src="images/team/target.png" loading="lazy" >

            </h4>
         <p  >

            {{$item->cho_content2}}
         </p>
          </div>
        </li>


      </div>
      <div style="padding-right: 0; min-height: 300px;" class="col-sm-6 order-lg-2 order-1 whyus ">


        <div class="bg-primary  d-flex play-video">
          <div class="d-flex align-items-center p-2 ">
            <a href="https://youtu.be/6WZOxnYi4Cs" class="venobox d-flex mr-4 vbox-item" data-vbtype="video">
              <i class=" text-white">
                <img class=" d-inline sa-play  hover-ripple ripple-white " src="images/icons/play-70.png" alt="" loading="lazy" >
              </i>
              <h5 class="mb-0 text-white">@lang('home.watch')</h5>
            </a>

          </div>
        </div>



      </div>


      </div>


  </div>
  @endforeach

   <br> <br>



  <!-- /case study -->
  <!-- testimonial -->
  <section  class="section bg-gray bg-dots wow fadeInUp" data-wow-duration="1s">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <span class="section-title-border border-center"></span>
          <p class="subtitle">@lang('home.testimonials')</p>
          <h2 class="section-title">@lang('home.client_say')</h2>
        </div>
        <div class="col-10 mx-auto">
          <div class="testimonial-slider">
            <!-- slider-item -->


        @foreach ($reviews as $review )


            <div class="text-center">
              <img class="img-fluid box-shadow rounded-circle mb-5 d-inline-block" style="height:70px; width:65px;" src="{{URL::asset($review->photo)}} "
                alt="client" loading="lazy" >
              <div class="bg-quote text-center pt-md-4" data-dot-image="{{URL::asset($review->photo)}}">
                <p class="font-italic mb-5 h5 text-dark">

                 {{$review->comment}}

                </p>
                <h4>{{$review->name}}</h4>

              </div>
            </div>

            @endforeach

          </div>
        </div>


        <div class="mx-auto mt-3" >
          <p class="p-0 m-0" >@lang('home.google')</p>
          <a href="https://goo.gl/maps/FtmvN9DtseyTH1DU6" target="_blank" >
            <img class="google" src="images/testimonial/google reviews.png" alt="" loading="lazy" >
          </a>

        </div>
      </div>
    </div>
  </section>
  <!-- /testimonial -->
  <!-- call to action -->

  @foreach($allcontents as $item)

  <section class="section overlay-secondary bg-fixed wow fadeInUp" data-wow-duration="1s" data-background="images/about/Top-Klima-3.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-10 col-11 text-center mx-auto">
          <h2 class="section-title text-white">{{$item->quota_content}} </h2>
          <a href="https://rusukh.com.sa/contactus" class="btn btn-primary hover-ripple">@lang('home.connect_cover')</a>
        </div>
      </div>
    </div>
  </section>

  @endforeach

  <!-- /call to action -->



  @endsection
