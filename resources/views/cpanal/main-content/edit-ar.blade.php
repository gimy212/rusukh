@extends('layouts.master') 
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
@if($message = Session::get('Update'))


<div class="alert alert-info" role="alert">
    {{$message}}
  </div>

  @endif


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

           
              @foreach ($mainContent as $item)


           <div  class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Service 1 </h4>
                  <form action="{{ url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Service Title 1</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="serv_title1"  value="{{$item->serv_title1}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Service Description 1</label>
                      <textarea name="serve_content1" class="form-control" style="height:75px" id="" cols="150"  rows="10">{{$item->serve_content1}}</textarea>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                </div>
                </form>

                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Service 2 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Service Title 2</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="serv_title2"  value="{{$item->serv_title2}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Service Description 2</label>
                        <textarea name="serve_content2" class="form-control" style="height:75px" id="" cols="150"  rows="10">{{$item->serve_content2}}</textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Service 3 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Service Title 3</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="serv_title3"  value="{{$item->serv_title3}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Service Description 3</label>
                        <textarea name="serve_content3" class="form-control" style="height:75px" id="" cols="150"  rows="10">{{$item->serve_content3}}</textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Service 4 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Service Title 4</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="serv_title4"  value="{{$item->serv_title4}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Service Description 4</label>
                        <textarea name="serve_content4" class="form-control" style="height:75px" id="" cols="150"  rows="10">{{$item->serve_content4}}</textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>


              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Service Provide 1 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Service Provide Title 1</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="prov_title1"  value="{{$item->prov_title1}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Service Provide Description 1</label>
                        <textarea name="prov_desc1" class="form-control" style="height:75px" id="" cols="150"  rows="10">{{$item->prov_desc1}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">link_ar</label>
                        <input name="link1" class="form-control"  id="link1"  value="{{$item->link1}}" required></textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Service Provide 2 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Service Provide Title 2</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="prov_title2"  value="{{$item->prov_title2}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Service Provide Description 2</label>
                        <textarea name="prov_desc2" class="form-control" style="height:75px" id="" cols="150"  rows="10">{{$item->prov_desc2}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">link_ar</label>
                        <input name="link2" class="form-control"  id="link2"  value="{{$item->link2}}" required></textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>


              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Service Provide 3 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Service Provide Title 3</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="prov_title3"  value="{{$item->prov_title3}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Service Provide Description 3</label>
                        <textarea name="prov_desc3" class="form-control" style="height:75px" id="" cols="150"  rows="10">{{$item->prov_desc3}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">link_ar</label>
                        <input name="link3" class="form-control"  id="link3"  value="{{$item->link3}}" required></textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>


              <div id="Customers" class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Counters 1 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Counter Name 1</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="crt_title1"  value="{{$item->crt_title1}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Counter Length 1</label>
                        <input type="number" class="form-control" id="exampleInputUsername1" name="crt_count1"  value="{{$item->crt_count1}}">

                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Counters 2 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Counter Name 2</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="crt_title2"  value="{{$item->crt_title2}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Counter Length 2</label>
                        <input type="number" class="form-control" id="exampleInputUsername1" name="crt_count2"  value="{{$item->crt_count2}}">

                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Counters 3 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Counter Name 3</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="crt_title3"  value="{{$item->crt_title3}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Counter Length 3</label>
                        <input type="number" class="form-control" id="exampleInputUsername1" name="crt_count3"  value="{{$item->crt_count3}}">

                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>


              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Counters 4 </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Counter Name 4</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="crt_title4"  value="{{$item->crt_title4}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Counter Length 1</label>
                        <input type="number" class="form-control" id="exampleInputUsername1" name="crt_count4"  value="{{$item->crt_count4}}">

                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

              <div id="Message" class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Message Section </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Message Title </label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="message_title"  value="{{$item->message_title}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Message Content </label>
                        <textarea name="message_content" class="form-control" style="height:150px" id="" cols="150"  rows="10">{{$item->message_content}}</textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Message Auther </label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="message_author"  value="{{$item->message_author}}">
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>


              <div id="Partener" class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Partener Section </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Partener Title </label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="part_title"  value="{{$item->part_title}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Partener Content </label>
                        <textarea name="part_content" class="form-control" style="height:150px" id="" cols="150"  rows="10">{{$item->part_content}}</textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

              <div id="Choose" class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Choose Us Section </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Choose Us Title 1</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="cho_content1"  value="{{$item->cho_title1}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Choose Us Content 1</label>
                        <textarea name="cho_title1" class="form-control" style="height:150px" id="" cols="150"  rows="10">{{$item->cho_content1}}</textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

              <div id="Choose" class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Choose Us Section </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Choose Us Title 2</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="cho_title2"  value="{{$item->cho_title2}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Choose Us Content 2</label>
                        <textarea name="cho_content2" class="form-control" style="height:150px" id="" cols="150"  rows="10">{{$item->cho_content2}}</textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>



              <div id="Footer" class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Footer Section </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}
                      <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="email" class="form-control" id="exampleInputUsername1" name="email"  value="{{$item->email}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="phone" class="form-control" id="exampleInputUsername1" name="number"  value="{{$item->number}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <textarea name="address" class="form-control" style="height:50px" id="" cols="150"  rows="10">{{$item->address}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">About</label>
                        <textarea name="footer_bio" class="form-control" style="height:150px" id="" cols="150"  rows="10">{{$item->footer_bio}}</textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>
              <div id="Footer" class="col-md-6 grid-margin stretch-card">
                <div style="max-height: 352px;" class="card">
                  <div class="card-body">
                    <h4 class="card-title">Quota Section </h4>
                    <form action="{{url('/main-content-ar_update',$item->id) }}" class="forms-sample" method="POST">
                      @csrf
                      {{-- @method('PUT') --}}

                      <div class="form-group">
                        <label for="exampleInputPassword1">Quota Content</label>
                        <textarea name="quota_content" class="form-control" style="height:150px" id="" cols="150"  rows="10">{{$item->quota_content}}</textarea>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-success btn-rounded btn-fw">Update</button>
                  </div>
                  </form>

                  </div>
                </div>
              </div>

            @endforeach



        @endsection
