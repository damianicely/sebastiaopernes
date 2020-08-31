@extends('layout')

@section('content')
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

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0" id="page-profile">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-7 px-0">
            <div class="sticky-top overflow-hidden min-vh-50 min-vh-xl-100">
              <div class="bg-holder" style="background-image:url(/img/prints.jpg);" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'></div>
              <!--/.bg-holder-->
            </div>
          </div>
          <div class="col-xl-5 bg-white py-6">
            <div class="row h-100 align-items-center justify-content-center">
              <div class="col-lg-8">
                <div class="row justify-content-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="col-sm-10 col-lg-12">
                    <div class="overflow-hidden">
                      <h4 data-zanim-xs='{"delay":0.1}'>@lang('prints.title')</h4>
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="text-700 font-weight-normal text-uppercase ls mb-4" data-zanim-xs='{"delay":0.2}'>@lang('prints.subtitle')</h6>
                    </div>
                  </div>
                  <div class="col-sm-7 col-lg-12">
                      <div class="overflow-hidden">
                          <h6 class="text-uppercase ls mt-4" data-zanim-xs='{"delay":0.3}'>
                            @lang('prints.diasic-heading')
                          </h6>
                        </div>
                        <div class="overflow-hidden">
                          @lang('prints.diasic-content')
                        </div>
                  </div>
                  <div class="col-sm-7 col-lg-12">
                      <div class="overflow-hidden">
                          <h6 class="text-uppercase ls mt-4" data-zanim-xs='{"delay":0.3}'>
                            @lang('prints-paper-heading')
                          </h6>
                      </div>
                      <div class="overflow-hidden">
                        @lang('prints.paper-content')
                      </div>
                  </div>
                  <div class="col-sm-7 col-lg-12">
                      <div class="overflow-hidden">
                          <h6 class="text-uppercase ls mt-4" data-zanim-xs='{"delay":0.3}'>
                            @lang('prints.payment-heading')
                          </h6>
                        </div>
                        <div class="overflow-hidden">
                      <p class="mb-0 pr-sm-5 pr-lg-0" data-zanim-xs='{"delay":0.3}'>
                        @lang('prints.payment-content')
                      </p>
                    </div>
                  </div>
                </div>
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

@endsection