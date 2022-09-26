@extends('theme.layout')

@section('content') 
@if($message = Session::get('Success'))


<div class="alert alert-success" role="alert">
    {{$message}}
  </div>

@endif
<div class="col-lg-10 col-md-12 " style="margin: auto; margin-top: 50px; margin-bottom: 50px;" >

    <div class="card shadow-lg card-1">
       <form action="{{url('/qustionn')}}" method="post">
        @csrf
        <div class="card-body inner-card">
          <h3 class="text-center"> @lang('nav.Questionnaire')</h3>
          <p class="text-center" style="color: #002535;" > @lang('nav.please') </p>
          <div class="row justify-content-center">
              <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label  for="name">@lang('nav.name')</label>
                    <input type="text" required class="form-control" id="name"  name="name">
                    {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}" />  --}}
                   </div>
                  <div class="form-group">
                    <label for="email">@lang('nav.email')</label>
                    <input type="email" required class="form-control" id="email" name="email">
                   </div>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="phone">@lang('nav.phone')</label>
                    <input type="tel" class="form-control" id="phone" required  name="phone">
                   </div>

                   <div class="form-group">
                    <label  for="Facility_name"> @lang('nav.Facility_Name')</label>
                    <input type="text" required class="form-control" id="name_company" name="name_company">
                   </div>

              </div>
              <div class="col-md-12 col-lg-10 col-12">
                  <div class="form-group">
                    <label  for="location">
                       @lang('nav.Establishment_location') </label>
                    <input type="text" required class="form-control" id="name_project_consultant" name="location" >
                  <div class="form-group">
                    <label  for="overview">
                      @lang('nav.mk') </label>
                    <textarea name="abrief" id="" cols="30" rows="3"></textarea>
                  <div class="form-group">
                    <label  for="location">
                      @lang('nav.food') </label>
                   <textarea name="food" id="" cols="30" rows="3"></textarea>

                </div>
            </div>
            </div>
            </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-5 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label  for="meals_number">@lang('nav.food_1') </label>
                    <input placeholder="you can choose an upper and a lower limit" type="text" name="meals" required class="form-control" id="name" >
                   </div>
                  <div class="form-group">
                    <label for="wash_basins">@lang('nav.food_2')</label>
                    <input placeholder=" (not including hand washing)" type="text" name="wash" required class="form-control"  >
                   </div>

                  <div class="form-group">
                    <label  for="meals_number">   @lang('nav.food_3')</label>
                    <input placeholder="(indicate the number)" type="text" required name="dishwasher" class="form-control" id="name" >
                   </div>
                  <div class="form-group">
                    <label for="wash_basins">@lang('nav.food_4')</label>
                    <input placeholder="(mention the number)" type="text" name="dedicated" required class="form-control"  >
                   </div>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">

                  <div class="form-group">
                    <label for="phone"> @lang('nav.food_5')</label>
                    <input placeholder=" (indicate the number)" class="form-control" name="vegetable" required >
                   </div>


                   <div class="form-group">
                    <label  for="Facility_name"> @lang('nav.food_6') </label>
                    <input placeholder="(indicate the number)" type="text" name="sinks" required class="form-control"  >
                   </div>

                   <div class="form-group">
                    <label  for="Facility_name">@lang('nav.food_7') </label>
                    <input placeholder="(indicate the number)" type="text" name="underground" required class="form-control"  >
                   </div>
                   <div class="form-group">
                    <label  for="Facility_name">@lang('nav.food_8') </label>
                    <input  type="text" name="cooking" required class="form-control"  >
                   </div>

              </div>
              </div>

            <div class="row justify-content-end mx-2 mb-5">
              <div class="col-lg-4 col-auto ">
                <button class="btn btn-primary" type="submit"> @lang('nav.food_9')</button>
                 </div>
          </div>

          </form>

      </div>
  </div>
  </div>
  </div>

@endsection
