@extends('layouts.master') 
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
@if($message = Session::get('Delete'))


<div class="alert alert-danger" role="alert">
{{$message}}
</div>

@endif
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                              <div>
                                <h4 class="card-title card-title-dash">  <i style="font-size: 20px;padding-right: 10px;" class="mdi mdi-comment-text-outline"></i>Quota Request</h4>
                               <p class="card-subtitle card-subtitle-dash">You Message Is Secured By TLS Encryption</p>
                              </div>
                            </div>
                            <div class="table-responsive  mt-1">
                              <table class="table select-table">
                                <thead>
                                  <tr>
                                    <th>
                                        <div class="form-check form-check-flat mt-0">
                                            <h6>#</h6>

                                          </div>
                                    </th>
                                    <th>Customer Name</th>
                                    <th>Personal Details</th>
                                    <th>Type</th>
                                    <th>Gmail Status</th>
                                    <th>view</th>
                                    <th></th>
                                  </tr>
                                </thead>

                                    @php

                                        $i = 0;
                                    @endphp

                                @foreach ($requestquota as $item)



                                <tbody>
                                  <tr>
                                    <td>
                                        <div class="form-check form-check-flat mt-0">
                                            <h6>{{ ++$i; }}</h6>
                                          </div>
                                    </td>
                                    <td>
                                      <div class="d-flex ">
                                        <div>
                                          <h6>{{$item->name}}</h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <h6>{{$item->phone}}</h6>
                                      <p>{{$item->email}}</p>
                                    </td>
                                    <td>
                                      <div>
                                        <h6>{{$item->type}}</h6>
                                        
                                        </div>

                                      </div>
                                    </td>
                                    <td><div class="badge badge-opacity-success">Completed</div></td>
                                    <td>  <a style="text-decoration: none;" href="{{route('quota.show', ['id'=> $item->id])}}"><div style="background-color: #d5e5f6;color: #1987ea;" class="badge badge-opacity-success">View</div></a></td>
                                    <td>
                                      <a class="btn btn-danger btn-rounded btn-fw" style="margin-right: 5px" onclick="return confirm('are you sure delate this')" href="{{url('/requst_delete',$item->id)}}">delete</a>
                                    </td>
                                  </tr>
                                </tbody>


                                @endforeach

                              </table>

                              <span style="margin: 0 auto;">  {!! $requestquota->links('cpanal.paginate') !!}</span>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

        @endsection
