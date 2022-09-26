@extends('layouts.master') 
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
@if($message = Session::get('Delete'))


<div class="alert alert-info" role="alert">
    {{$message}}
  </div>

  @endif


@if($message = Session::get('Update'))


<div class="alert alert-info" role="alert">
{{$message}}
</div>

@endif


      <!-- partial -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <h4 class="header-title">update</h4> 
                  <form action="{{ route('slider.update',  ['id' =>$sliders->id ] ) }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Small Title</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="mini_title"  value="{{$sliders->mini_title}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="slider_title"  value="{{$sliders->slider_title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input  type="file" class="form-control" id="exampleInputEmail1" name="slider_photo"  value="{{URL::asset($sliders->slider_photo)}}">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input name="slider_content" class="form-control" style="height:200px" id="" cols="230" rows="10" value="{{$sliders->slider_content}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Small Title arbic</label>
                      <input type="text" class="form-control" id="mini_title_ar" name="mini_title_ar"  value="{{$sliders->mini_title_ar}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title arbic</label>
                      <input type="text" class="form-control" id="title_ar" name="title_ar" value="{{$sliders->title_ar}}" required>
                    </div>
                    <div class="form-group"> 
                      <label for="exampleInputPassword1">Description arbic</label>
                      <input name="content_ar" class="form-control" style="height:200px" id="content_ar" cols="230" rows="10" value="{{$sliders->content_ar}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">link</label>
                      <input type="text" class="form-control" id="link" name="link"  value="{{$sliders->link}}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">link_ar</label>
                      <input type="text" class="form-control" id="link_ar" name="link_ar"  value="{{$sliders->link_ar}}" required>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                </div>
                </form>

 
              </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->





        @endsection
