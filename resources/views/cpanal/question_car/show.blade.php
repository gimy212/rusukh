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
        <h4 class="card-title">Question_car</h4>
        </div>

        <table class="table">

            <thead>
              <tr>
                <th>#Info</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
              <tr>
                <td>Name</td>
                <td>{{$item->name}}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>{{$item->email}}</td>
              </tr>
              <tr>
                <td>Phone</td>
                <td>{{$item->phone}}</td>
              </tr>
              <tr>
                <td>facility_name</td>
                <td>{{$item->facility_name}}</td>
              </tr>
              <tr>
                <td>location</td>
                <td>{{$item->location}}</td>
              </tr>
              <tr>
                <td> overview</td>
                <td>{{$item->overview}}</td>
              </tr>
              <tr>
                <td>type cars</td>
                <td>{{$item->Small_cars}} &nbsp;{{$item->Medium_cars}}
                    &nbsp;{{$item->Trucks}}&nbsp;{{$item->Buses}}
                    &nbsp;{{$item->Heavy_machinery}}&nbsp;{{$item->Other_machinery}}
                </td>
              </tr>
              <tr>
                <td>engines</td>
                <td>{{$item->engines}}</td>
              </tr>
              <tr>
                <td>engines_oil</td>
                <td>{{$item->engines_oil}}</td>
              </tr>
              <tr>
                <td>veicles_washed</td>
                <td>{{$item->veicles_washed}}</td>
              </tr>
              <tr>
                <td>oil_collected</td>
                <td>{{$item->oil_collected}}</td>
              </tr>
              <tr>
                <td>number_vehicles</td>
                <td>{{$item->number_vehicles}}</td>
              </tr>
             
               @endforeach
            </tbody>
          </table>
    </div>
  </div>
</div>
</div>


  @endsection