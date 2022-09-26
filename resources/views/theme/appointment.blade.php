@extends('theme.layout')
<head>
	
  <!-- date -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
  <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

</head>
@section('content')
<div class="container containerapp ">
    <div class="contact__wrapper shadow-lg mt-n9">
        <div class="row no-gutters">

            @foreach ($allcontents as $item)


            <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                <h3 style="font-size: 30px; font-weight: 500;" class="text-white mb-5">Make An Appointment</h3>

                <ul class="contact-info__list list-style--none position-relative z-index-101">
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-envelope"></i></span>{{$item->email}}
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-phone"></i></span>  <a class="text-white" href="tel:+966533850888">{{$item->number}}</a>
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> {{$item->address}}


                        <div class="mt-3">
                            <a href="https://goo.gl/maps/FtmvN9DtseyTH1DU6" target="_blank" class="text-link link--right-icon text-white">@lang('home.directions') <i class="link__icon fa fa-directions"></i></a>
                        </div>
                    </li>
                </ul>

                <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                        <defs>
                            <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                            </linearGradient>

                        </defs>
                        <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                        <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                    </svg>
                </figure>
            </div>

            @endforeach


            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                <form action="{{ route('appointment.send')}}" method="POST" class="contact-form form-validate" novalidate="novalidate">
                    @csrf


            @if($message = Session::get('Success'))


            <div class="alert alert-info" role="alert">
                {{$message}}
              </div>

              @endif
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="name">@lang('home.name')</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>


                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="email">@lang('home.email')</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">

                                <label class="required-field" for="email">@lang('home.date')</label>
                                    <input type="text" name="date" id="sa-date"  class="form-control input-sm" required/>

                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="email">@lang('home.time')</label>
                                <select name="time" id="time" required>
                                    <option value="8am">8 am</option>
                                    <option value="10am">10 am</option>
                                    <option value="12pm">12 pm</option>
                                    <option value="2pm">2 pm</option>
                                    <option value="4pm">4 pm</option> 
                                    <option value="6pm">6 pm</option>
                                  </select>
                                  <br><br>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="phone">@lang('home.number')</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required >
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="service">@lang('home.choose_service')</label>

                                    <input list="service" name="service" required />
                                    <datalist id="service" >
                                      <option value="Water treatment">
                                      <option value="Fog system">
                                      <option value="Oil traps">

                                    </datalist>
                            </div>
                        </div>


                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="Appointment">@lang('home.typeofmeeting') </label>

                                    <input list="Appointment" name="type" required />
                                    <datalist id="Appointment" >
                                      <option value="@lang('home.type1')">
                                      <option value="@lang('home.type2')">
                                      <option value="@lang('home.type3')">
                                      <option value="@lang('home.type4')">
                                      <option value="@lang('home.type5')">
                                      <option value="@lang('home.type6')">
                                      <option value="@lang('home.type7')">
                                      <option value="@lang('home.type8')">
                                      <option value="@lang('home.type9')">

                                    </datalist>
                            </div>
                        </div>

                        <!-- <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="message">How can we help?</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Hi there, I would like to....."></textarea>
                            </div>
                        </div> -->

                        <div class="col-sm-12 mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">@lang('nav.sizing_11')</button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- End Contact Form Wrapper -->

        </div>
    </div>
</div>


<style>

    select {
        padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 0px !important;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px;
    resize: none;
    }
    input::-webkit-calendar-picker-indicator {
              opacity: 100;
           }
           
           .containerapp {
               margin-top:50px ;
               margin-bottom:50px ;
               
           }
           

    body{
   
    background:#eee;
}
.gradient-brand-color {
    background-image: -webkit-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
    background-image: -ms-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
    color: #fff;
}

.contact-info__wrapper {
    overflow: hidden;
    border-radius: .625rem .625rem 0 0
}

@media (min-width: 1024px) {
    .contact-info__wrapper {
        border-radius: 0 .625rem .625rem 0;
        padding: 5rem !important
    }
}
.contact-info__list span.position-absolute {
    left: 0
}
.z-index-101 {
    z-index: 101;
}
.list-style--none {
    list-style: none;
}
.contact__wrapper a.text-white:hover {
    color: #002535 !important; }
.contact__wrapper {
    background-color: #fff;
    border-radius: 0 0 .625rem .625rem
}

@media (min-width: 1024px) {
    .contact__wrapper {
        border-radius: .625rem 0 .625rem .625rem
    }
}
@media (min-width: 1024px) {
    .contact-form__wrapper {
        padding: 5rem !important
    }
}
.shadow-lg, .shadow-lg--on-hover:hover {
    box-shadow: 0 1rem 3rem rgba(132,138,163,0.1) !important;
}
</style>

<script>
    $('#sa-date').datetimepicker({
      minDate: moment().add(1 , 'days'),
    maxDate: moment().add(7, 'days'),
  format:  'DD/MM/YYYY  ' ,
  useCurrent:false,

  daysOfWeekDisabled: [ 5]  ,
            sideBySide: true
});
  </script>


<style>
.datepicker {
background-color: #002535 ;
;
}
.datepicker {
  text-align: center;
  padding: 8px 12px;
  font-size: 20x;
  color: #1CA3EC;
}


.datepicker table tr td.old,
.datepicker table tr td.new {
  color: #1CA3EC;
}
.datepicker table tr td.disabled,
.datepicker table tr td.disabled:hover {
background: none;
color: #1ca3ec21;
cursor: default;
}

</style>


@endsection
