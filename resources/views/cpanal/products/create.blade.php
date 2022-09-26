@extends('layouts.master') 
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
@if($message = Session::get('Success'))


<div class="alert alert-info" role="alert">
    {{$message}}
  </div>

  @endif
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="header-title">create</h4> 
                  <form action="{{ route('products.store') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="prod_title" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bio</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="prod_bio" placeholder="Bio" style="height: 80px;" required>
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input  type="file" class="form-control" id="exampleInputEmail1" name="prod_photo" required>
                    </div> 

                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea name="prod_desc" class="form-control" style="height:200px" id="" cols="230" rows="10" placeholder="Content" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title arbic</label>
                      <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bio arbic</label> 
                        <input type="text" class="form-control" id="bio_ar" name="bio_ar" placeholder="Bio" style="height: 80px;" required>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Description arbic</label>
                      <textarea name="desc_ar" class="form-control" style="height:200px" id="desc_ar" cols="230" rows="10" placeholder="Content" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">link</label>
                      <input name="link" class="form-control"  id="link"  placeholder="link" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">link_ar</label>
                      <input name="link_ar" class="form-control"  id="link_ar"  placeholder="link_ar" required></textarea>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Create</button>
                </div>
                </form>

              </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->





        @endsection