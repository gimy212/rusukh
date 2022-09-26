@extends('layouts.master') 
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
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

      <!-- partial -->
      <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0"></h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i> 
                    </div>
                    <p class="tx-12 tx-gray-500 mb-2">index</p>
                </div>
               
                <div class="card-body">
                  <div class="table-responsive">
                      <table id="example" class="table key-buttons text-md-nowrap">
                          <thead>
                          <tr>
                            <th class="border-bottom-0">#</th>
                            <th class="border-bottom-0">name</th>
                            <th class="border-bottom-0">phone</th>
                            <th class="border-bottom-0">facility_name</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 0;
                        @endphp
                                @foreach ($data as $item)
                                @php
                                $i++
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$item->name}} </td>
                                <td>{{$item->phone}} </td>
                                <td>{{$item->facility_name}} </td>
                               
                                
                               <td>
                               
                                <a  style="margin-right: 5px;" class="btn btn-primary btn-rounded btn-fw" target="_blank" href="{{ url('/cars_show' , $item->id)}}">Show</a>
                               </td>
                               <td>
                                <a class="btn btn-danger btn-rounded btn-fw" style="margin-right: 5px" onclick="return confirm('are you sure delate this')" href="{{url('/questioncar_delete',$item->id)}}">delete</a>
                              </td>
                            </tr>
                                @endforeach
                              </tbody>
                            </table>
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