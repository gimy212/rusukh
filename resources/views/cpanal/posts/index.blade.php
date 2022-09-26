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
                <a href="{{ route('post.create') }}" type="submit"  class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale">Create New Post</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                              <th class="border-bottom-0">#</th>
                              <th class="border-bottom-0">name</th>
                            </tr>
                          </thead>
                          <tbody>
                          @php
                              $i = 0;
                          @endphp
                                @foreach ($post as $item)
                                @php
                                $i++
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$item->title_ar}} </td>
                                
                               <td>
                                   <a  style="margin-right: 5px;" class="btn btn-primary btn-rounded btn-fw" target="_blank" href="{{ route('single.show' , ['slug'=>$item->slug])}}">Show</a>
                               </td>
                               <td>
                                    <a style="margin-right: 5px;" href="{{ route('post.edit' , ['id'=>$item->id]) }}" type="submit" class="btn btn-info btn-rounded btn-fw">Edit</a>
                               </td>
                               <td>
                                    <form action="{{ route('post.destroy', $item->id)}}" method="POST">
                                        <button  style="margin-right: 5px" type="submit" onclick="return confirm('are you sure delate this')" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                                   @csrf
                                   @method('DELETE')
                                    </form>
                               </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @endsection