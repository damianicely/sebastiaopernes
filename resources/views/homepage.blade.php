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
            <div class="row vh-100 align-items-center justify-content-center justify-content-lg-start py-10">
              <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 z-index-1">
                <div class="p-4 p-sm-5 bg-glass border border-2x border-dark parallax overflow-hidden rounded" data-zanim-trigger="scroll" data-zanim-timeline='{"delay":0.2}' data-rellax-speed="3">
                  <div class="overflow-hidden">
                    <h4 class="fs-1 fs-sm-2"><span class="d-block overflow-hidden"><span class="d-inline-block" data-zanim-xs='{"delay":0.1}'>Sebastião Pernes</span></span><span class="d-block overflow-hidden"><span class="d-inline-block" data-zanim-xs='{"delay":0.1}'>Photographia</span></span>
                    </h4>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-6 overflow-hidden">
                      <div data-zanim-xs='{"delay":0.1}'>
                        <a class="btn btn-dark btn-sm mt-4" href="#portfolio">Portfolio</a>
                      </div>
                    </div>  
                    <div class="col-6 overflow-hidden">
                      <div class="mt-4" data-zanim-xs='{"delay":0.1}'>
                        <img src="/img/logo/logo_egypt.png" width="150px">
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
                    <div class="item active" data-filter="*">all</div>
                    <div class="item" data-filter=".capestvincent">cape st vincent</div>
                    <div class="item" data-filter=".costavicentina">costa vicentina</div>
                    <div class="item" data-filter=".stormwaves">storm waves</div>
                    <div class="item" data-filter=".shorelines">shorelines</div>
                    <div class="item" data-filter=".skylines">skylines</div>
                    <div class="item" data-filter=".islands">islands</div>
                  </div>
  
                  <div class="row no-gutters sortable-container sortable-container-gutter-fix">
                    @foreach ($photos as $photo)
                      <a class="col-6 col-md-3 sortable-item p-2 {{ str_replace(' ', '', $photo->collection) }}" href="x-{{ $photo->reference }}.jpg" data-lightbox="image" data-title="{{ $photo->description }}">
                        <img class="w-100 rounded" src="t-{{ $photo->reference }}.jpg" alt=""/>
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