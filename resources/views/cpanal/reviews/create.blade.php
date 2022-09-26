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

      <!-- partial -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <h4 class="header-title">create</h4> 
                  </div>
                  <form action="{{ route('reviews.store') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Title" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input  type="file" class="form-control" id="exampleInputEmail1" name="photo"  value="" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Comment</label>
                      <textarea name="comment" class="form-control" style="height:200px" id="" cols="230" rows="10" placeholder="Comment Here" required></textarea>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Create</button>
                </div>
                </form>


                </div>
              </div>
            </div>
      </div>




        @endsection
