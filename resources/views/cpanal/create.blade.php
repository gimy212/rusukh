@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
@if($message = Session::get('Success'))


<div class="alert alert-info" role="alert">
    {{$message}}
  </div>

  @endif

      <!-- partial -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <h4 class="header-title">create</h4> 
                  <form action="{{ route('slider.store') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Small Title</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="mini_title"  placeholder="Mini Title" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="slider_title" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input  type="file" class="form-control" id="exampleInputEmail1" name="slider_photo"  accept="image/*" required>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea name="slider_content" class="form-control" style="height:200px" id="" cols="230" rows="10" placeholder="Content" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Small Title arbic</label>
                      <input type="text" class="form-control" id="mini_title_ar" name="mini_title_ar"  placeholder="Mini Title" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title arbic</label>
                      <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Title" required>
                    </div>
                    <div class="form-group"> 
                      <label for="exampleInputPassword1">Description arbic</label>
                      <textarea name="content_ar" class="form-control" style="height:200px" id="content_ar" cols="230" rows="10" placeholder="Content" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">link</label>
                      <input type="text" class="form-control" id="link" name="link"  placeholder="link" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">link_ar</label>
                      <input type="text" class="form-control" id="link_ar" name="link_ar"  placeholder="link_ar" required>
                    </div>
                      <div class="form-group">
                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Create</button>
                </div>
                </form>
              </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->




        @endsection
