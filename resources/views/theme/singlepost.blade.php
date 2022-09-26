@extends('theme.post-layout')

@section('content')

<!-- page title -->
<section class="section bg-cover overlay" data-background="https://rusukh.com.sa/images/about/Top-Klima-3.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white mb-3"> 
          @if(App::getLocale() == 'en')
          {{$posts->title}}
          @else
          {{$posts->title_ar}}
          @endif
        </h2>
        
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- service details -->
<section class="section container-xl saiko-rtl">
  <div   >
    <div class="row  ">

      <div class="col-lg-8 lightt-shadow">
       {{-- <h4> @if(App::getLocale() == 'en')
            {{$posts->title}}
            @else
            {{$posts->title_ar}}
            @endif
       </h4> --}}
        <img src="{{URL::asset($posts->photo)}}" style="max-height: 555px"  alt="service thumb" class="img-fluid w-100 mb-5">
        <p> @if (App::getLocale()== 'en')
          {!! $posts->content !!}
          @else
          {!! $posts->content_ar !!}
          @endif
        </p>

        <div class="row mb-5">
            @foreach ($posts->tag as $item2 )
            <a  href="{{ route('tags.show' , ['id'=>$item2->id])}}" class="btn btn-outline-secondary btn-sm" style="margin-right:4px">
              @if (App::getLocale()== 'en')
              {{$item2->tag}}
              @else
              {{$item2->tag_ar}}
              @endif
            </a>
            @endforeach
        </div>
        <div class="row mb-5">
        </div>

      </div>
      <aside class="col-lg-4 ">
        <div  class="row sa-direction px-4" >
                 <!-- service list -->
                 <div class="bg-white px-4 py-5 lightt-shadow mb-5 col-12 service-boxx">
                   <h4 class="mb-4"> @lang('home.our')</h4>
                   <ul class="list-styled style-circle">

                        @foreach($cat as $item) 
                        <li class="border-bottom border-color">
                         <a href="{{ route('cat.show' , ['id'=>$item->id])}}" class="text-color d-block pb-3 mt-3 text-decoration-none">
                          @if (App::getLocale()== 'en')
                          {{$item->cat}}
                          @else
                          {{$item->cat_ar}}
                          @endif
                          </a></li>

                             @endforeach
                   </ul>
                 </div>
                 <!-- quick contact -->
                 <div class="bg-white px-4 py-5 lightt-shadow mb-5 col-12 order-md-1 order-sm-2 saiko-rtl">
                   <h4 class="mb-4"> @lang('home.contact')</h4>
                 <form action="{{ route('contact.send')}}" class="row" method="POST">
                        @csrf
                     <input type="text" name="name" id="name" class="form-control form-control-sm border-0 rounded-0 lightt-shadow mb-3"
                       placeholder="@lang('home.name')">
                     <input type="email" name="email" id="mail" class="form-control form-control-sm border-0 rounded-0 lightt-shadow mb-3"
                       placeholder="@lang('home.email')">
                     <input type="text" name="phone" id="phone" class="form-control form-control-sm border-0 rounded-0 lightt-shadow mb-3"
                       placeholder="@lang('home.phone')">
                     <input type="text" name="subject" id="subject" class="form-control form-control-sm border-0 rounded-0 lightt-shadow mb-3"
                       placeholder="@lang('home.Subject')">
                     <textarea name="message" id="message" class="form-control form-control-sm border-0 rounded-0 lightt-shadow mb-3 py-3 px-4"
                       placeholder="@lang('home.sendus')"></textarea>
                     <button type="submit" class="btn btn-primary"> @lang('home.send')</button>
                   </form>
                 </div> 
                 <!-- pdf download -->

                 @if ($posts->quota != 'false')
                 <div class="bg-white px-4 py-5 lightt-shadow mb-5 col-12 order-md-2 order-sm-1">
                   <h4 class="mb-4">Download PDF</h4>
                   <ul class="list-unstyled">
                     <li class="d-flex pb-3 mb-3 border-bottom border-color align-items-center">
                       <i class="icon-sm">
                        <img src="{{ asset('images/icons/pdf-64.png')}}" alt="">
                       </i>
                       <div class="ml-3">
                        <p class="mb-0 text-dark">{{$posts->title}}</p>
                        <span class="text-dark">Rusukh&reg;</span>
                       </div>
                       <a href="#" class="text-color ml-auto"><i class=" icon-xs">
                        <a href="{{URL::asset($posts->quota)}}" download="Rusukh-Company">
                          <img src="{{asset('images/icons/download.png')}}">
                      </a>
                       </i>


                       </a>
                     </li>

                   </ul>
                 </div>

                 @endif


                 @if($posts->quota_btn == 1)
                 <div class="bg-white px-4 py-5 lightt-shadow mb-5 col-12 order-md-2 order-sm-1">
                   <button style="margin: 0 auto;" class="btn btn-primary " id="btnOpenForm"> @lang('home.request_quote')</button>
                   <div class="form-popup-bg">
                           <div class="form-container">
                                  <button id="btnCloseForm" class="close-button">X</button>
                                  <h3 class="text-white text-center" >@lang('home.request_quote_for') {{ $posts->title}}</h3>
                           <div>
                               <div class='outer-block'>
                                 <p class="text-center" style="color: crimson;"> @lang('home.qoute_type_text')</p>
                                 <div class="block">
                                   <div>
                                     <button class="btn btn-primary" id="div-1-1">@lang('home.personal') </button>
                                   </div>
                                   <div>
                                     <button   class="btn btn-primary"id="div-1-2"> @lang('home.company')</button>
                                   </div> 
                                 </div>
                                 <br>
                               <div id="div-1-1-content" class="dc-11">
                                   <div class="row justify-content-center round">
                                     <div class="col-lg-10 col-md-12 ">
                                         <div class="card shadow-lg card-1">
                                           <form action="{{ url('/quota_send')}}" method="POST" enctype="multipart/form-data">
                                               @csrf
                                             <div class="card-body inner-card">
                                               <p class="text-center" style="color: #002535;" > @lang('home.plz_fill') </p>
                                               <div class="row justify-content-center">
                                                   <div class="col-lg-5 col-md-6 col-sm-12">
                                                       <div class="form-group">
                                                         <label  for="fname"> @lang('home.name')</label>
                                                         <input type="text" name="name" class="form-control" id="fname" >
                                                        </div>
                                                        <div class="form-group">
                                                         <label for="email">@lang('home.email')</label>
                                                         <input type="text" name="email" required class="form-control" id="email" >
                                                        </div>
                                                        <div class="form-group">
                                                         <label for="property">@lang('home.email')</label>
                                                         <input type="text" name="state" required class="form-control" id="realstate" >
                                                        </div>
                                                   </div>
                                                   <div class="col-lg-5 col-md-6 col-sm-12">
                                                       <div class="form-group">
                                                         <label for="phone">@lang('home.phone')</label>
                                                         <input type="number" name="phone" class="form-control" id="phone" required >
                                                        </div>
                                                       <div class="form-group">
                                                         <label for="location">@lang('home.city')</label>
                                                         <input type="address" name="city" required class="form-control" id="location" >
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="">@lang('home.address')</label>
                                                           <input type="address" name="type" value="Personal" hidden>
                                                          </div>
                                                   </div>
                                                   <div class="col-md-12 col-lg-10 col-12">
                                                     <div class="form-group files">
                                                       <label class="my-auto">@lang('home.site_pic')</label>
                                                       <input id="file" type="file" name="file" required class="form-control" /></div>
                                                 </div>

                                                 <div class="row justify-content-end mx-2 mb-5">
                                                   <div class="col-lg-4 col-auto ">
                                                     <input class="btn btn-primary" type="submit" value="Request a Quote">
                                                      </div>
                                                 </div>
                                               </form>
                                           </div>
                                       </div>
                                     </div>
                               </div>
                             </div>
                           </div>

                                 <div id="div-1-2-content" class="dc-12">


                         <div class="row justify-content-center round">

                           <div class="col-lg-10 col-md-12 ">

                               <div class="card shadow-lg card-1">
                                  <form action="{{ url('/quota_send')}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   <div class="card-body inner-card">
                                     <p class="text-center" style="color: #002535;" > @lang('home.plz_fill') </p>
                                     <div class="row justify-content-center">
                                         <div class="col-lg-5 col-md-6 col-sm-12">

                                             <div class="form-group">
                                               <label  for="name">@lang('home.name')</label>
                                               <input type="name" name="name" required class="form-control" id="name" >
                                              </div>
                                              <div class="form-group">
                                                <label for="email">@lang('home.email')</label>
                                                <input type="text" name="email" required class="form-control" id="email" >
                                               </div>
                                              <div class="form-group">
                                               <label for="property">@lang('home.type_of_state') </label>
                                               <input type="text" name="state" required class="form-control" id="realstate" >
                                              </div>

                                              <div class="form-group">
                                               <label  for="name_project_consultant">
                                                @lang('home.project_consulant')</label>
                                               <input type="text" name="consultant" required class="form-control" id="name_project_consultant" >
                                              </div>

                                         </div>

                                         <div class="col-lg-5 col-md-6 col-sm-12">

                                             <div class="form-group">
                                               <label for="phone">@lang('home.phone')</label>
                                               <input type="number" name="phone" class="form-control" id="phone" required >
                                              </div>
                                             <div class="form-group">
                                               <label for="location">@lang('home.city')</label>
                                               <input type="address" name="city" required class="form-control" id="location" required>
                                              </div>

                                              <div class="form-group">
                                                <label for="">@lang('home.address')</label>
                                               <input type="address" name="type" value="Company" hidden>
                                              </div>
                                              <div class="form-group">
                                               <label  for="name_company">@lang('home.company_name')</label>
                                               <input type="text" name="company_name" required class="form-control" id="name_company" required>
                                              </div>
                                              <div class="form-group">
                                               <label  for="name_project">@lang('home.projectname')</label>
                                               <input type="text" name="project_name" required class="form-control" id="name_project" required>
                                              </div>
                                         </div>
                                         <div class="col-md-12 col-lg-10 col-12">
                                           <div class="form-group files">
                                             <label class="my-auto">@lang('home.site_pic')</label>
                                             <input id="file" type="file" name="file" required class="form-control" /></div>
                                       </div>
                                         <div class="col-md-12 col-lg-10 col-12">
                                           <div class="form-group files">
                                             <label class="my-auto">@lang('home.tax_copy')</label>
                                             <input id="file" type="file" name="tax" required class="form-control" /></div>
                                       </div>
                                         <div class="col-md-12 col-lg-10 col-12">
                                           <div class="form-group files">
                                             <label class="my-auto">@lang('home.commercial_copy')</label>
                                             <input id="file" type="file" name="registration" required class="form-control" /></div>
                                       </div>

                                       <div class="row justify-content-end mx-2 mb-5">
                                         <div class="col-lg-4 col-auto ">
                                           <input class="btn btn-primary" type="submit" value="Request a Quote">
                                            </div>
                                     </div>






                                     </form>

                                 </div>
                             </div>



                           </div>

                                 </div>
                               </div>
                   </div>
                 </div>

                 @endif
       </div>
             </aside>
    </div>
  </div>
</section>
<!-- /service details -->
@endsection