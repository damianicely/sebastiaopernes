@extends('layout') 


@section('title')
Homepage | Sebastiao Pernes Photography
@endsection 

@section('media')
@media (max-width: 575.98px) {
  .spalsh_one {background-image:url(img/402-mobile.jpg);}
  .spalsh_two {background-image:url(img/310-mobile.jpg);}
  .spalsh_three {background-image:url(img/108-mobile.jpg);}
  .spalsh_four {background-image:url(img/503-mobile.jpg);}
  .spalsh_five {background-image:url(img/lua-mobile.jpg);}
}
@media (min-width: 576px) {
  .spalsh_one {background-image:url(img/402-tablet.jpg);}
  .spalsh_two {background-image:url(img/310-tablet.jpg);}
  .spalsh_three {background-image:url(img/108-tablet.jpg);}
  .spalsh_four {background-image:url(img/503-tablet.jpg);}
  .spalsh_five {background-image:url(img/lua-mobile.jpg);}
}
@media (min-width: 768px) {
  .spalsh_one {background-image:url(img/m-102.jpg);}
  .spalsh_two {background-image:url(img/m-114.jpg);}
  .spalsh_three {background-image:url(img/m-201.jpg);}
  .spalsh_four {background-image:url(img/m-303.jpg);}
  .spalsh_five {background-image:url(img/m-504.jpg);}
}
@media (min-width: 992px) {
  .spalsh_one {background-image:url(img/l-102.jpg);}
  .spalsh_two {background-image:url(img/l-114.jpg);}
  .spalsh_three {background-image:url(img/l-201.jpg);}
  .spalsh_four {background-image:url(img/l-303.jpg);}
  .spalsh_five {background-image:url(img/l-504.jpg);}
}
@media (min-width: 1200px) {
  .spalsh_one {background-image:url(img/x-102.jpg);}
  .spalsh_two {background-image:url(img/x-114.jpg);}
  .spalsh_three {background-image:url(img/x-201.jpg);}
  .spalsh_four {background-image:url(img/x-303.jpg);}
  .spalsh_five {background-image:url(img/x-504.jpg);}
}
@endsection

@section('content')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main min-vh-100" id="top">

        <!-- ============================================-->
        <!-- Preloader ==================================-->
        <div class="preloader" id="preloader">
          <div class="loader">
            <div class="line-scale-pulse-out-rapid">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
        <!-- ============================================-->
        <!-- End of Preloader ===========================-->
        <section class="p-0 position-relative" id="interior-header">
          <div class="position-absolute a-0">
            <div class="owl-carousel owl-theme owl-theme-white" data-options='{"items":1,"autoplay":true,"loop":true,"animateOut":"fadeOut","autoplayHoverPause":true,"nav":true,"dots":false}'>
              <div class="min-vh-100 w-100">
                <div class="bg-holder spalsh_one"></div>
                <!--/.bg-holder-->
              </div>
              <div class="min-vh-100 w-100">
                <div class="bg-holder spalsh_two"></div>
                <!--/.bg-holder-->
              </div>
              <div class="min-vh-100 w-100">
                <div class="bg-holder spalsh_three"></div>
                <!--/.bg-holder-->
              </div>
              <div class="min-vh-100 w-100">
                <div class="bg-holder spalsh_four"></div>
                <!--/.bg-holder-->
              </div>
              <div class="min-vh-100 w-100">
                <div class="bg-holder spalsh_five"></div>
                <!--/.bg-holder-->
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row vh-100 align-items-center justify-content-center justify-content-lg-start py-0">
              <div class="col-9 col-sm-10 col-md-8 col-lg-6 col-xl-4 z-index-1">
                <div class="p-3 p-sm-4 bg-glass border border-2x border-primary parallax overflow-hidden rounded" data-zanim-trigger="scroll" data-zanim-timeline='{"delay":0.2}' data-rellax-speed="3">
                  <div class="overflow-hidden float-center text-center">
                    <h4 class="fs-1 fs-sm-2 mb-2 py-0">
                      <span class="d-block overflow-hidden">
                        <span class="d-inline-block" data-zanim-xs='{"delay":0.1}'>Sebastião Pernes</span>
                      </span>
                    </h4>
                    <h4 class="fs-1">
                          <img src="/img/logo/logo_egypt.png" width="150px">  
                      <span class="d-block overflow-hidden">
                        <span class="d-inline-block" data-zanim-xs='{"delay":0.1}'>PHOTOGRAPHIA</span>
                      </span>
                    </h4>
                  </div>
                  <div class="row align-items-center mt-2">
                    <div class="col-12 overflow-hidden">
                      <div data-zanim-xs='{"delay":0.1}' class="float-right">
                        <a class="btn btn-dark btn-sm" href="#portfolio">@lang('home.portfolio')</a>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center" id="portfolio">
          <div class="container">
            <div class="row mb-5">
              <div class="col">
                <h2 class="mb-5 text-underline">Portfolio</h2>
                <div class="sortable" data-options='{"layoutMode":"fitRows"}'>
                  <div class="menu justify-content-center mb-2">
                    <div class="item active" data-filter="*">@lang('home.all')</div>
                    <div class="item" data-filter=".capestvincent">@lang('home.cape')</div>
                    <div class="item" data-filter=".costavicentina">@lang('home.costa')</div>
                    <div class="item" data-filter=".stormwaves">@lang('home.waves')</div>
                    <div class="item" data-filter=".shorelines">@lang('home.shores')</div>
                    <div class="item" data-filter=".skylines">@lang('home.skies')</div>
                    <div class="item" data-filter=".islands">@lang('home.islands')</div>
                  </div>
  
                  <div class="row no-gutters sortable-container sortable-container-gutter-fix">
                    @foreach ($photos as $photo)
                      <a class="col-6 col-md-3 sortable-item p-2 {{ str_replace(' ', '', $photo->collection) }}" href="photos/watermarked/x-{{ $photo->reference }}.jpg" data-lightbox="image" data-title="{{ $photo->reference }} - {{ $photo->description }}">
                        <img class="w-100 rounded" src="photos/watermarked/t-{{ $photo->reference }}.jpg" alt=""/>
                      </a>                      
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
  
      </main>
      <!-- ===============================================-->
      <!--    End of Main Content-->
      <!-- ===============================================-->    
@endsection