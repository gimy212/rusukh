<nav style="text-align: initial;" class="menu" id="menu">
    <div class="menu-mobile-header">
      <button type="button" class="menu-mobile-arrow btn-arrow"><i class="ion ion-ios-arrow-back"></i></button>
      <div class="menu-mobile-title"></div>
      <button type="button" class="menu-mobile-close">X<i class="ion ion-ios-close"></i></button>
    </div>
    <ul class="menu-section">
      <li class="menu-item"><a href="{{ url('/') }}">@lang('nav.home')</a></li>

      <li class="menu-item-has-children">
        <a href="#">@lang('nav.products')<i class="ion ion-ios-arrow-down"></i></a>
        <div class="menu-subs menu-mega menu-column-4">


        @foreach($menus as $menu)
          <div class="list-item">
            <h4 class="title">
                @if(App::getLocale() == 'en')
                {{$menu->name}}
                @else
                {{$menu->name_ar}}
                @endif
            </h4>
             @foreach($menu->chiled as $item)
            <ul>
              <li><a href="{{$item->link}}">
                     @if(App::getLocale() == 'en')
                {{$item->name}}
                @else
                {{$item->name_ar}}
                @endif
                  </a></li>
            </ul>
              @endforeach
          </div>
          @endforeach

    
   
      

          <!-- <div class="list-item">
            <img src="images/products/6.jpg" loading="lazy" alt="Product Images">
          </div> -->
        </div>
      </li>
      <li class="menu-item-has-children">
        <a href="#">@lang('nav.services')<i class="ion ion-ios-arrow-down"></i></a>
        <div class="menu-subs menu-column-1">
          <ul>
            <li><a href="{{LaravelLocalization::localizeUrl('/booking')}}"> @lang('nav.make_app')</a></li>
            <li><a href="{{LaravelLocalization::localizeUrl('/grate')}}"> @lang('nav.make_a')</a></li>
            <li><a href="{{LaravelLocalization::localizeUrl('/cars')}}"> @lang('nav.make')</a></li>
            <li><a href="{{LaravelLocalization::localizeUrl('/sizing')}}"> @lang('nav.make_ap')</a></li> 
          </ul>
        </div>
      </li>

        <!--<li class="menu-item"><a href="https://rusukh.com.sa/blog"> products(trial)</a></li>-->

      <li class="menu-item"><a href="{{LaravelLocalization::localizeUrl('/contactus')}}">@lang('nav.contact')  </a></li>

      <li class="menu-item">
        @if (App::getLocale()== 'en')
        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
        @else
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">
        @endif
        @lang('nav.lang')
        </a>
    </li>

    <li class="nav-item">
      <a class="btn btn-primary ml-lg-3" href="{{ url('/store') }}">Login </a>
      
    </li>
    </ul>
  </nav>
