

@extends('theme.layout')

@section('content')




<!-- page title -->
<section class="section bg-cover overlay" data-background="{{asset('images/about/Top-Klima-3.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-white mb-3">  @if (App::getLocale()== 'en')
            {{$tags->tag}}
            @else
            {{$tags->tag_ar}}
            @endif 
            </h2>
          <!-- breadcrumb -->

        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->
  <!-- blog -->
  <section class="section saiko-rtl">
    <div class="container">
      <div class="row">

        <!-- blog post -->

        @foreach($tags->post as $item)


        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card border-0 rounded-0 position-relative box-shadow zindex-1">

            <img class="card-img-top rounded-top-0 clip-half-cycle" src="{{URL::asset($item->photo)}}" alt="blog-thumb">
            <div class="card-body">
              <div class="title-border-left">

                <h4 class="card-title"><a href="{{LaravelLocalization::getLocalizedUrl(null,trans('routes.single-show'),['slug'=> $item->slug])}}" class="text-dark">
                    @if (App::getLocale()== 'en')
                    {{$item->title}}
                    @else
                    {{$item->title_ar}}
                    @endif

                </a></h4>
              </div>
              <p class="card-text">
                @if (App::getLocale()== 'en')
                {{ str_limit($item->desc, $limit = 50, $end = '...') }}
                @else
                {{ str_limit($item->seo_description_ar, $limit = 50, $end = '...') }}
                @endif


            </p>

              <a href="{{LaravelLocalization::getLocalizedUrl(null,trans('routes.single-show'),['slug'=> $item->slug])}}" class="btn btn-secondary btn-arrow">@lang('home.read_more')</a>
            </div>
          </article>
        </div>

        @endforeach

      </div>
                     {{-- {!! $tagPosts->links('cpanal.paginate') !!} --}}

    </div>
  </section>
  <!-- /blog -->
  @endsection
