@extends('layout') 

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
          <div class="position-absolute a-0" data-zanim-lg='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">
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
            </div>
          </div>
          <div class="container">
            <div class="row vh-100 align-items-center justify-content-center justify-content-lg-start py-10">
              <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 z-index-1">
                <div class="p-4 p-sm-5 bg-glass border border-2x border-dark parallax overflow-hidden rounded" data-zanim-trigger="scroll" data-zanim-timeline='{"delay":0.6}' data-rellax-speed="3">
                  <div class="overflow-hidden">
                    <h4 class="fs-1 fs-sm-2"><span class="d-block overflow-hidden"><span class="d-inline-block" data-zanim-xs='{"delay":0.1}'>Sebastião Pernes</span></span><span class="d-block overflow-hidden"><span class="d-inline-block" data-zanim-xs='{"delay":0.1}'>@lang('home.heading')</span></span>
                    </h4>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-6 overflow-hidden">
                      <div data-zanim-xs='{"delay":0.6}'>
                        <a class="btn btn-dark btn-sm mt-4" href="#portfolio">Portfolio</a>
                      </div>
                    </div>  
                    <div class="col-6 overflow-hidden">
                      <div class="mt-4" data-zanim-xs='{"delay":0.6}'>
                        <img src="/img/logo/logo_egypt.png" width="150px">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="indicator indicator-down" data-zanim-timeline='{"delay":1}' data-zanim-trigger="scroll" href="#portfolio" data-fancyscroll="data-fancyscroll" data-offset="60"><span class="indicator-arrow-white indicator-arrow-one" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.25}'></span><span class="indicator-arrow-white indicator-arrow-two" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.5}'></span></a>
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
                    <div class="item active" data-filter="*">all</div>
                    <div class="item" data-filter=".capestvincent">cape st vincent</div>
                    <div class="item" data-filter=".costavicentina">costa vicentina</div>
                    <div class="item" data-filter=".waves">storm waves</div>
                    <div class="item" data-filter=".shorelines">shorelines</div>
                    <div class="item" data-filter=".skylines">skylines</div>
                  </div>
  
                  <div class="row no-gutters sortable-container sortable-container-gutter-fix">
                    @foreach ($photos as $photo)
                      <a class="col-6 col-md-3 sortable-item p-2 {{ str_replace(' ', '', $photo->collection) }}" href="photos/x-{{ $photo->reference }}.jpg" data-lightbox="image" data-title="{{ $photo->description }}">
                        <img class="w-100 rounded" src="photos/t-{{ $photo->reference }}.jpg" alt=""/>
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