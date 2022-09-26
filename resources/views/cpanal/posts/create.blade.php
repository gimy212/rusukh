@extends('layouts.master') 
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
 <script src="{{ asset('https://cdn.ckeditor.com/4.18.0/full/ckeditor.js')}}"></script>
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
                  </div>
                  <form action="{{ route('post.store') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Title" required>
                    </div>


                    <div style="display: grid;" class="form-group" data-select2-id="8">
                        <label> Select Category : </label>
                          <select name="cat" style="max-width: 200px;" class="js-example-basic-single w-100 select2-hidden-accessible" data-select2-id="2" tabindex="-2" aria-hidden="true">
                            @foreach ($cat as $item)
                            <option name="cat"  value="{{$item->id}}" >{{$item->cat}}</option>
                            @endforeach
                          </select>
                    </div>

                               <div  class="form-group">
                                <label for="exampleInputPassword1">Content</label>
                                <textarea name="content" id="editor" class="form-control" style="height: 500px!important;" height="100"  cols="500" rows="1500" placeholder="Content" required></textarea>
                              </div>
                              <script>
                                CKEDITOR.replace( 'content' );
                             </script>

                        <label for="exampleInputEmail1">Tags : </label>
                        <br>
                         @foreach ($tags as $item)


                    <div style="display: inline-flex;
                    padding-right: 9px;" class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" name="tags[]" class="form-check-input" value=" {{$item->id}} ">&nbsp;&nbsp;&nbsp;&nbsp;
                        {{$item->tag}}
                        <i class="input-helper"></i></label>
                    </div>

                     @endforeach



                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input  type="file" class="form-control" id="exampleInputEmail1" name="photo"  required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Quota</label>
                        <input  type="file" class="form-control" id="exampleInputEmail1" name="quota" >
                    </div>

                <div style="display: grid;" class="form-group" data-select2-id="7">
                    <label>Select Quota Button Options : </label>
                      <select name="quota_btn" style="max-width: 200px;" class="js-example-basic-single w-100 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option  name="quota_btn"  value="1" data-select2-id="1">Yes, Show It</option>
                        <option  name="quota_btn"  value="0" data-select2-id="18">No , Hide</option>
                      </select>
                </div>



                <div  class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="desc"  class="form-control" style="height: 131px!important;"   cols="230" rows="30" placeholder="Description" required></textarea>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Title in arabic</label>
                    <label style="float: right;" for="exampleInputUsername1">العربية</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title_ar" placeholder="العنوان" >
                  </div>


                <div  class="form-group">
                  <label for="exampleInputPassword1">Content in arabic</label>
                  <label style="float: right;" for="exampleInputUsername1">العربية</label>
                  <textarea name="content_ar" id="editorr" class="form-control" style="height: 281px!important;" height="300px"  cols="230" rows="230" placeholder="المحتوي" ></textarea>
                </div>
                <script>
                    CKEDITOR.replace( 'content_ar' );
                 </script>
<hr>

<h4 class="card-title">SEO Settings</h4>
<div class="form-group">
    <label for="exampleInputUsername1">Page title </label>
    <label style="float: right;" for="exampleInputUsername1">Engish</label>
    <input type="text" class="form-control" id="exampleInputUsername1" name="seo_title"  placeholder="Page title" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Page Friendely URL</label>
    <label style="float: right;" for="exampleInputUsername1">Engish</label>
    <input type="text" class="form-control" id="exampleInputUsername1" name="slug" placeholder="oreim-en-post-es-"  >
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Meta Keywords</label>
    <label style="float: right;" for="exampleInputUsername1">Engish</label>
    <textarea name="keywords" class="form-control" style="height:75px" id="" cols="150"  rows="10" placeholder="post,keywords,post,artical"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Meta Description</label>
    <label style="float: right;" for="exampleInputUsername1">Engish</label>
    <textarea name="seo_description" class="form-control" style="height:75px" id="" cols="150"  rows="10" placeholder="Meta Description"></textarea>
  </div>


  <div class="form-group">
    <label for="exampleInputUsername1">Page title</label>
    <label style="float: right;" for="exampleInputUsername1">العربية</label>
    <input type="text" class="form-control" id="exampleInputUsername1" name="seo_title_ar" placeholder="Page title">
  </div>

  <div class="form-group">
      <label for="exampleInputUsername1">Page Friendely URL</label>
      <label style="float: right;" for="exampleInputUsername1">العربية</label>
      <input type="text" class="form-control" id="exampleInputUsername1" name="slug_ar" placeholder="oreim-en-post-es-" >
    </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Meta Keywords</label>
    <label style="float: right;" for="exampleInputUsername1">العربية</label>
    <textarea name="keywords_ar" class="form-control" style="height:75px" id="" cols="150"  rows="10" placeholder="post,keywords,post,artical"></textarea>
  </div>

  <div class="form-group">
      <label for="exampleInputPassword1">Meta Description ar</label>
      <label style="float: right;" for="exampleInputUsername1">العربية</label>
      <textarea name="seo_description_ar" class="form-control" style="height:75px" id="" cols="150"  rows="10" placeholder="Meta Description"></textarea>
    </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Create</button>
                </div>
                </form>


                </div>
              </div>
            </div>

      </div>





        @endsection
        @section('js')
        
        <script>
          ClassicEditor
              .create( document.querySelector( '#editor' ) )
              .catch( error => {
                  console.error( error );
              } );
      </script>
      <script>
        ClassicEditor
            .create( document.querySelector( '#editorr' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
        @endsection