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
        <h4 class="card-title">Question</h4>
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
                <td>name_company</td>
                <td>{{$item->name_company}}</td>
              </tr>
              <tr>
                <td>location</td>
                <td>{{$item->location}}</td>
              </tr>
              <tr>
                <td>A brief overview</td>
                <td>{{$item->abrief}}</td>
              </tr>
              <tr>
                <td>Food Meals offered</td>
                <td>{{$item->food}}</td>
              </tr>
              <tr>
                <td>Number of meals served per day</td>
                <td>{{$item->meals}}</td>
              </tr>
              <tr>
                <td>Number of wash basins</td>
                <td>{{$item->wash}}</td>
              </tr>
              <tr>
                <td>dishwasher</td>
                <td>{{$item->dishwasher}}</td>
              </tr>
              <tr>
                <td>washing areas on the floor</td>
                <td>{{$item->dedicated}}</td>
              </tr>
              <tr>
                <td>vegetable washing</td>
                <td>{{$item->vegetable}}</td>
              </tr>
              <tr>
                <td> sinks for washing</td>
                <td>{{$item->sinks}}</td>
              </tr>
              <tr>
                <td>underground drain lines</td>
                <td>{{$item->underground}}</td>
              </tr>
              <tr>
                <td>the oils used in the cooking</td>
                <td>{{$item->cooking}}</td>
              </tr>
               @endforeach
            </tbody>
          </table>
    </div>
  </div>
</div>
</div>


  @endsection