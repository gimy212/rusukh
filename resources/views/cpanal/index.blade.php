@extends('layouts.master') 
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            @php
                $i = 0;
            @endphp


       @if($message = Session::get('Success'))


            <div class="alert alert-success" role="alert">
                {{$message}}
              </div>

        @endif

        @if($message = Session::get('Update'))


        <div class="alert alert-info" role="alert">
            {{$message}}
          </div>

         @endif

        @if($message = Session::get('Delete'))


        <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>

         @endif



        <div id="silder" class="col-md-6 grid-margin stretch-card">

                <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sliders Section</h4>
                <a href="{{ route('slider.create') }}" type="submit" class="btn btn-success btn-rounded btn-fw">Create New Slider</a>


                                <p class="card-description">
                                {{-- Add tags <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> or class <code>.h1</code> to <code>.h6</code> --}}
                                </p>
                                <div class="template-demo">

                                @foreach ($sliders as $slider)
                                <h4>Slider {{++$i}}</h4>
                                <p class="card-description">
                                    {{$slider->slider_content}}
                                </p>
                                <div style="display: inline-flex;padding:10px">
                                    <a style="margin-right: 5px;" href="{{ route('slider.edit' , $slider->id) }}" type="submit" class="btn btn-info btn-rounded btn-fw">Edit</a>
                                    <form action="{{ route('slider.destroy', $slider->id)}}" method="POST">
                                        <button  style="margin-right: 5px" type="submit" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                                   @csrf
                                   @method('DELETE')
                                    </form>
                                </div>
                                @endforeach

                             </div>
                         </div>
                         </div>
            </div>

            {{-- <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Services Section</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Small Title</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="mini_title"  value="{{$slider->mini_title}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="slider_title" value="{{$slider->slider_title}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="slider_content" class="form-control" style="height:200px" id="" cols="230" rows="10">{{$slider->slider_content}}</textarea>
                      </div>
                      <div style="display: inline-flex;">
                          <a href="" type="submit" class="btn btn-primary me-2">Save</a>
                    </form>
                    <form action="">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">Delete</button>
                  </form>
                      </div>
                  </div>
                </div>
              </div>


          </div> --}}


        </div>



        @endsection
