
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
 <div class="row">

  <div style="max-width: 50%;" class="col-md-12 grid-margin stretch-card">


    <div class="card">
        <div style="padding: 21px">
        <h4 class="card-title"><i style="padding-right: 3px;" class="mdi mdi-calendar-clock"></i> Appointment</h4>
        <p class="card-description">
            from <code>.{{$appointment->name}}</code>
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
                <td><i style="padding-right: 3px;" class="mdi mdi-account"></i> Name</td>
                <td>{{$appointment->name}}</td>
              </tr>
              <tr>
                <td><i style="padding-right: 3px;" class="mdi mdi-email-outline"></i> Email</td>
                <td>{{$appointment->email}}</td>
              </tr>
              <tr>
                <td><i style="padding-right: 3px;" class="mdi mdi-phone"></i> Phone</td>
                <td>{{$appointment->phone}}</td>
              </tr>
              <tr>
                <td><i style="padding-right: 3px;" class="mdi mdi-calendar-check"></i> Date</td>
                <td>{{$appointment->date}}</td>
              </tr>
              <tr>
                <td><i style="padding-right: 3px;" class="mdi mdi-calendar-clock"></i> Time</td>
                <td>{{$appointment->time}}</td>
              </tr>
              <tr>
                <td><i style="padding-right: 3px;" class="mdi mdi-wrench"></i> Service</td>
                <td>{{$appointment->service}}</td>
              </tr>
              <tr>
                <td><i style="padding-right: 3px;" class="mdi mdi-briefcase"></i> Appointment Type </td>
                <td>{{$appointment->type}}</td>
              </tr>


            </tbody>
          </table>
    </div>
  </div>
</div>
</div>
</div>

  @endsection
