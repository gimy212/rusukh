@extends('layouts.master') 
@section('title')
RUSUKH
@stop
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('page-header') 




<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            <div class="row row-sm">
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                  <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                      <h6 class="mb-3 tx-12 text-white">المنتجات</h6>
                    </div>
                    <div class="pb-0 mt-0">
                      <div class="d-flex">
                        <div class="mdi mdi-note-text">
                          
                          <h3 style="text-align: center;padding-top: 20px;" class="rate-percentage">{{ $posts }}</h3>
                        </div>
                    
                      </div>
                    </div>
                  </div>
                  <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                  <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                      <h6 class="mb-3 tx-12 text-white">الاكثر مبيعا </h6>
                    </div>
                    <div class="pb-0 mt-0">
                      <div class="d-flex">
                        <div class="mdi mdi-collage">
                          
                        <h3 style="text-align: center;padding-top: 20px;" class="rate-percentage">{{ $products }}</h3>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                  <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                      <h6 class="mb-3 tx-12 text-white">الرسائل</h6>
                    </div>
                    <div class="pb-0 mt-0">
                      <div class="d-flex">
                        <div class="mdi mdi-message-reply">
                         
                        <h3 style="text-align: center;padding-top: 20px;" class="rate-percentage"> {{ $messages }}</h3>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient">
                  <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                      <h6 class="mb-3 tx-12 text-white">المواعيد</h6>
                    </div>
                    <div class="pb-0 mt-0">
                      <div class="d-flex">
                        <div class="mdi mdi-clipboard-check">
                          
                          <h3 style="text-align: center;padding-top: 20px;" class="rate-percentage">{{ $appointments }}</h3>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
              </div>
            </div>


            <div class="row row-sm">
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                  <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                      <h6 class="mb-3 tx-12 text-white"> استبيان المطاعم </h6>
                    </div>
                    <div class="pb-0 mt-0">
                      <div class="d-flex">
                        <div class="mdi mdi-collage">
                          
                        <h3 style="text-align: center;padding-top: 20px;" class="rate-percentage">{{ $question }}</h3>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <span id="compositeline2" class="pt-1"></span>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                  <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                      <h6 class="mb-3 tx-12 text-white">  استبيان الصيانه والخدمات</h6>
                    </div>
                    <div class="pb-0 mt-0">
                      <div class="d-flex">
                        <div class="mdi mdi-note-text">
                          
                          <h3 style="text-align: center;padding-top: 20px;" class="rate-percentage">{{ $Cars }}</h3>
                        </div>
                    
                      </div>
                    </div>
                  </div>
                  <span id="compositeline" class="pt-1"></span>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient">
                  <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                      <h6 class="mb-3 tx-12 text-white"> استبيان الزيوت والشحوم</h6>
                    </div>
                    <div class="pb-0 mt-0">
                      <div class="d-flex">
                        <div class="mdi mdi-clipboard-check">
                          
                          <h3 style="text-align: center;padding-top: 20px;" class="rate-percentage">{{ $sizings }}</h3>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <span id="compositeline4" class="pt-1"></span>
                </div>
              </div>

              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                  <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                      <h6 class="mb-3 tx-12 text-white">عدد الزوار</h6>
                    </div>
                    <div class="pb-0 mt-0">
                      <div class="d-flex">
                        <div class="mdi mdi-message-reply">
                         
                        <h3 style="text-align: center;padding-top: 20px;" class="rate-percentage"> {{ $clintip->id }}</h3>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <span id="compositeline3" class="pt-1"></span>
                </div>
            </div>



            
           

                
                  <div class="col-lg-4 d-flex flex-column">
                    <div class="row flex-grow">
                     
                     </div>
                    </div>
                  </div>











            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->

  </div>


@endsection
@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script> 
    <!-- Moment js -->
    <script src="{{ URL::asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <!--Internal  Flot js-->
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ URL::asset('assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ URL::asset('assets/js/chart.flot.sampledata.js') }}"></script>
    <!--Internal Apexchart js-->
    <script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>
    <!-- Internal Map -->
    <script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modal-popup.js') }}"></script>
    <!--Internal  index js -->
    <script src="{{ URL::asset('assets/js/index.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.vmap.sampledata.js') }}"></script>
@endsection