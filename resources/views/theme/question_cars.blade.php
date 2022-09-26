@extends('theme.layout')

@section('content') 
@if($message = Session::get('Success'))


<div class="alert alert-success" role="alert">
    {{$message}}
  </div>

@endif
<div class="col-lg-10 col-md-12 " style="margin: auto; margin-top: 50px; margin-bottom: 50px;" >

    <div class="card shadow-lg card-1">
       <form action="{{url('/cars_create')}}" method="post"> 
        @csrf
        <div class="card-body inner-card">
          <h4 class="text-center">@lang('nav.car')
          </h4>
  <br>
          <p class="" style="color: #002535;">
            @lang('nav.car_1') <br>
            @lang('nav.car_2')
            
          </p>
          <div class="row justify-content-center">
              <div class="col-lg-5 col-md-6 col-sm-12">
  
                  <div class="form-group">
                    <label for="name">@lang('nav.name')</label>
                    <input type="name" name="name" required="" class="form-control" id="name">
                   </div>
                  <div class="form-group">
                    <label for="email">@lang('nav.email')</label>
                    <input type="email" name="email" required="" class="form-control" id="email">
                   </div>
                 
                 
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">
  
                  <div class="form-group">
                    <label for="phone">@lang('nav.phone')</label>
                    <input type="name" name="phone" class="form-control" id="phone" required="">
                   </div>
                 
  
                   <div class="form-group">
                    <label for="Facility_name">@lang('nav.Facility_Name')</label>
                    <input type="text" name="facility_name" required="" class="form-control" id="facility_name">
                   </div>
            
                
                 
              </div>
              <div class="col-md-12 col-lg-10 col-12">
              
                  <div class="form-group ">
                    <label for="location">
                        @lang('nav.Establishment_location')</label>
                    <input type="text" name="location" required="" class="form-control" id="location">
                  <div class="form-group">
                    <label for="overview">
                        @lang('nav.car_3') </label>
                      <textarea name="overview" id="overview" cols="30" rows="3"></textarea>
                      <div class="form-group">
                    <label for="overview">
                        @lang('nav.car_4') 
                      <br>
  
                   <div class="text-center">
                    <label>
                      
                    <input type="checkbox" name="Small_cars" value="Small cars">
                    <span class="checkbox-style"> @lang('nav.car_5')</span>
                  </label>
                  <label>
                    <input type="checkbox" name="Medium_cars" value="Medium cars">
                    <span class="checkbox-style"> @lang('nav.car_6')
                    </span>
                  </label>
                  <label>
                    <input type="checkbox" name="Trucks" value="Trucks">
                    <span class="checkbox-style"> @lang('nav.car_7')
                    </span>
                  </label>
                  <label>
                    <input type="checkbox" name="Buses" value="Buses ">
                    <span class="checkbox-style"> @lang('nav.car_8')
                    </span>
                  </label>
                  <label>
                    <input type="checkbox" name="Heavy_machinery " value="Heavy machinery ">
                    <span class="checkbox-style"> @lang('nav.car_9')
                    </span>
                  </label>
                  <label>
                    <input type="checkbox" name="Other_machinery" value="Other machinery ">
                    <span class="checkbox-style"> @lang('nav.car_10')
                    </span>
                  </label>
                   </div>
                
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-10 col-12">
  
                  <div class="form-group">
                    <label for="engines">@lang('nav.car_11')</label>
                    <input name="engines" placeholder="" type="text" required class="form-control" id="engines">
                   </div>
                  <div class="form-group">
                    <label for="wash_basins">@lang('nav.car_12')
                      </label>
                    <input name="engines_oil" placeholder="" type="text" required class="form-control">
                   </div>
                 
                  <div class="form-group">
                    <label for="">@lang('nav.car_13')
                    </label>
                    <input name="veicles_washed" type="text" required class="form-control" id="veicles_washed">
                   </div>
                  <div class="form-group">
                    <label for="oil-collected">@lang('nav.car_14') </label>
                    <input type="text" name="oil_collected" required class="form-control">
                   </div>
                 
                 
              </div>
              <div class="col-md-12 col-lg-10 col-12">
  
                  <div class="form-group">
                    <label for="no-of-vehicles">@lang('nav.car_15') </label>
                    <input name="number_vehicles" class="form-control" required>
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

@endsection