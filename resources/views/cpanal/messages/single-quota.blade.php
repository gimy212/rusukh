
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
        <h4 class="card-title">Request</h4>
        <p class="card-description">
            from <code>.{{$requestquota->name}}</code>
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
                  <td>Name :</td>
                  <td>{{ $requestquota->name}}</td>
                </tr>
                <tr>
                  <td>Email : </td>
                  <td>{{ $requestquota->email}}</td>
                </tr>
                <tr>
                  <td>Phone : </td>
                  <td>{{ $requestquota->phone}}</td>
                </tr>

                <tr>
                  <td>City : </td>
                  <td>{{ $requestquota->city}}</td>
                </tr>
                <tr>
                  <td>Type : </td>
                  <td>{{ $requestquota->type}}</td>
                </tr>
                <tr>
                  <td>State : </td>
                  <td>{{ $requestquota->state}}</td>
                </tr>



                @if($requestquota->type == 'Company')



                  <tr>
                      <td>Company Name : </td>
                      <td>{{ $requestquota->company_name}}</td>
                  </tr>
                  <tr>
                      <td>Consultant : </td>
                      <td>{{ $requestquota->consultant}}</td>
                  </tr>
                  <tr>
                      <td>Project Name : </td>
                      <td>{{ $requestquota->project_name}}</td>
                  </tr>



                  @endif

                  @if($requestquota->file  != 'false')
                  <tr>
                      <td>Place picture : </td>
                      <td>
                      <a type="button" href="{{URL::asset($requestquota->file)}}" download="{{$requestquota->file}}" class="btn btn-primary btn-icon-text">
                          <i class="mdi mdi-cloud-download"></i>
                           Download
                      </a>
                      </td>
                  </tr>

                  @endif

                  @if($requestquota->tax  != 'false' && $requestquota->type == 'Company')
                  <tr>
                      <td>Tax certificate : </td>
                      <td>

                    <a type="button" href="{{URL::asset($requestquota->tax)}}" download="{{$requestquota->tax}}" class="btn btn-primary btn-icon-text">
                        <i class="mdi mdi-cloud-download"></i>
                        Download
                    </a>
                      </td>
                  </tr>
                  <tr>
                    <td>Registration certificate : </td>
                    <td>

                  <a type="button" href="{{URL::asset($requestquota->registration)}}" download="{{$requestquota->registration}}" class="btn btn-primary btn-icon-text">
                      <i class="mdi mdi-cloud-download"></i>
                      Download
                  </a>
                    </td>
                </tr>

                  @endif






              </tbody>


          </table>


    </div>
  </div>

  @endsection
