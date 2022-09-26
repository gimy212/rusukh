@extends('theme.layout')

@section('content') 
@if($message = Session::get('Success'))


<div class="alert alert-success" role="alert">
    {{$message}}
  </div>

@endif
<div class="col-lg-10 col-md-12 " style="margin: auto; margin-top: 50px; margin-bottom: 50px;">
    
    <div  class="card shadow-lg card-1">
  
  
        <div class="card-body inner-card">
          <h3 class="text-center">  @lang('nav.sizing') </h3>
          <p class="text-center" style="color: #002535;"> 
        
  
           
            @lang('nav.sizing_1')
           <br>
           @lang('nav.sizing_2')
          
          </p>
          <form action="{{url('/sizing_create')}}" method="POST">
            @csrf
          <div class="row justify-content-center">
              <div class="col-lg-5 col-md-6 col-sm-12">
  
  
                  <div class="form-group">
                    <label for="sinks-number"> @lang('nav.sizing_3')</label>
                    <input name="name" id="name" type="name" required class="form-control">
                   </div>
  
                
                 
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">
  
  
                  <div class="form-group">
                    <label for="sinks-dimentions">  @lang('nav.sizing_4')</label>
                    <input name="dimensions " id="dimensions"  placeholder=" (height*width*depth )" type="name" required class="form-control">
                   </div>
  
                
                 
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">
  
  
                  <div class="form-group">
                    <label for="safyat-number"> @lang('nav.sizing_5')</label>
                    <input name="Drains_number" id="Drains_number" type="name" required class="form-control">
                   </div>
  
                
                 
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">
  
  
                  <div class="form-group">
                    <label for="safyat-dimentions">   @lang('nav.sizing_6')</label>
                    <input name="Drains_dimensions" id="Drains_dimensions" placeholder=" (height*width*depth )" type="name" required class="form-control">
                   </div>
  
                
                 
              </div>
            
              <div class="col-lg-5 col-md-6 col-sm-12">
  
  
                  <div class="form-group">
                    <label for="balat-numbers"> @lang('nav.sizing_7')</label>
                    <input name="Sewers_number" id="Sewers_number" type="name" required class="form-control">
                   </div>
  
                
                 
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">
  
  
                  <div class="form-group">
                    <label for="balat-numbers">   @lang('nav.sizing_8')</label>
                    <input name="Sewer_dimensions" id="Sewer_dimensions" placeholder=" (height*width )" type="name" required class="form-control" id="name">
                   </div>
  
                
                 
              </div>
            
              <div class="col-lg-5 col-md-6 col-sm-12">
  
  
                  <div class="form-group">
                    <label for="machines-number">  @lang('nav.sizing_9')</label>
                    <input name="number_washing" id="number_washing" type="name" required class="form-control">
                   </div>
  
                
                 
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">
  
  
                  <div class="form-group">
                    <label for="size-machines">    @lang('nav.sizing_10') </label>
                    <input name="machine_volume" id="machine_volume" type="name" required class="form-control">
                   </div>
  
                
                 
              </div>
              </div>
            
  
              
  
  
             
         
  
  
     <div  style="margin: auto ;"  class="col-lg-4 col-auto ">
                <button type="submit" value="send" class="btn btn-primary hover-ripple"> @lang('nav.sizing_11')</button>
                 </div>




            
        </form>
    </div>
    </div>
</div>

@endsection