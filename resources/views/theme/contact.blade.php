


@extends('theme.layout')

@section('content')


@foreach ($allcontents as  $item)

<!-- contact items -->
<section class="section pb-0">
    <div class="container">
      <div class="row">
        <!-- Addresses -->
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="bg-white box-shadow text-center p-5 px-md-2 px-lg-5">
            <i class="  icon-lg mb-4">
              <img src="/images/icons/location.png" alt="">
            </i>
            <h4 class="mb-4">Our Address</h4>
            <ul class="list-unstyled">
              <li>{{$item->address}}</li>
            </ul>
          </div>
        </div>
        <!-- phone -->
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="bg-white box-shadow text-center p-5 px-md-2 px-lg-5">
            <i class=" icon-lg mb-4">
              <img src="/images/icons/phone.png" alt="">
            </i>
            <h4 class="mb-4">@lang('home.number')</h4>
            <ul class="list-unstyled">
              <li>{{$item->number}}</li> <br>

            </ul>
          </div>

        </div>
        <!-- Mail -->
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="bg-white box-shadow text-center p-5 px-md-2 px-lg-5">
            <i class=" icon-lg mb-4">
  <img src="/images/icons/email.png" alt="">

            </i>
            <h4 class="mb-4">@lang('home.sendus')</h4>
            <ul class="list-unstyled">
              <li>{{$item->email}}
              </li> <br>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  @endforeach
  <!-- /contact item -->

  <!-- contact form and map -->
  <section class="section ">
    <div class="container ">
      <div class="text-center">
          <span class="section-title-border border-center"></span>
          <p class="subtitle"></p>
          <h2 class="mb-5">@lang('home.con_form')
          </h2>
        </div>

      <div class="row">
        <!-- google map -->
        <div class="col-md-5 mb-5 mb-md-0 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3625.1025744924696!2d46.8578014!3d24.6890004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2fa9565512f277%3A0xdcd5f19e145b303e!2z2LTYsdmD2Kkg2LHYs9mI2K4g2KfZhNmF2KrYrti12LXYqQ!5e0!3m2!1sar!2seg!4v1648827684649!5m2!1sar!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-7">

            @if($message = Session::get('Success'))


            <div class="alert alert-info" role="alert">
                {{$message}}
              </div>

              @endif
          <form action="{{ route('contact.send')}}" class="row" method="POST">
            @csrf
            <div class="col-md-6">
              <input type="text" name="name" id="name" class="form-control border-0 rounded-0 box-shadow mb-4" placeholder="@lang('home.name')">
            </div>
            <div class="col-md-6">
              <input type="email" name="email" id="mail" class="form-control border-0 rounded-0 box-shadow mb-4" placeholder="@lang('home.email')">
            </div>
            <div class="col-md-6">
              <input type="text" name="phone" id="phone" class="form-control border-0 rounded-0 box-shadow mb-4" placeholder="@lang('home.phone')">
            </div>
            <div class="col-md-6">
              <input type="text" name="subject" id="subject" class="form-control border-0 rounded-0 box-shadow mb-4" placeholder="@lang('home.Subject')">
            </div>
            <div class="col-12">
              <textarea name="message" id="message" class="form-control border-0 rounded-0 box-shadow mb-5 py-3 px-4" placeholder="@lang('home.sendus')"></textarea>
            </div>
            <div class="col-12">
              <button type="submit" value="send" class="btn btn-primary hover-ripple">@lang('home.sned_now')</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact form and map -->




  @endsection
