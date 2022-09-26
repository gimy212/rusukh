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
                      <h4 class="header-title">update</h4>
                  <form action="{{ route('menu.update',['id'=> $menu->id]) }}" class="forms-sample" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$menu->name}}" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name in ar</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name_ar" value="{{$menu->name_ar}}" >
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
