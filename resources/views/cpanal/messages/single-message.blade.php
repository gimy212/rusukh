
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


  <div style="max-width: 50%;" class="col-md-12 grid-margin stretch-card">


    <div class="card">
        <div style="padding: 21px">
        <h4 class="card-title">Message</h4>
        <p class="card-description">
            from <code>.{{$messages->name}}</code>
          </p>
        </div>

        <table class="table">

            <thead>
              <tr>
                <th>#Info</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Name</td>
                <td>{{$messages->name}}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>{{$messages->email}}</td>
              </tr>
              <tr>
                <td>Phone</td>
                <td>{{$messages->phone}}</td>
              </tr>

            </tbody>
          </table>

      <div class="card-body">
          <h4 class="card-title">{{$messages->subject}}</h4>
        <p>
            {{$messages->message}}


        </p>
      </div>
    </div>
  </div>

  @endsection
