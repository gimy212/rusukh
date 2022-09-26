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
                  <form action="{{ route('chiled.store') }}" class="forms-sample" method="POST">
                    @csrf
                    
                       <div style="display: grid;" class="form-group" data-select2-id="8">
                        <label> Select Menu Category : </label>
                          <select name="parent_id" style="max-width: 200px;" class="js-example-basic-single w-100 select2-hidden-accessible" data-select2-id="2" tabindex="-2" aria-hidden="true">
                            @foreach ($menus as $item)
                            <option name="parent_id"  value="{{$item->id}}" >{{$item->name}}</option>
                            @endforeach
                          </select>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" name="name" placeholder=" Name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name in arabic</label>
                        <input type="text" class="form-control" name="name_ar" placeholder=" Name ar" required>
                      </div>
                      
                           <div class="form-group">
                        <label for="exampleInputEmail1">link </label>
                        <input type="text" class="form-control" name="link" placeholder=" link" required>
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
