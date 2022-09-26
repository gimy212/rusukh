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

                  <form action="{{ route('menu.store') }}" class="forms-sample" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Menu Name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name in arabic</label>
                        <input type="text" class="form-control" name="name_ar" placeholder="Menu Name ar" required>
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
