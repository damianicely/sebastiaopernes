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
              <div class="bg-holder" style="background-image:url(/img/profile.jpg);"></div>
              <!--/.bg-holder-->
            </div>
          </div>
          <div class="col-xl-5 bg-white py-6">
            <div class="row h-100 align-items-center justify-content-center">
              <div class="col-lg-8">
                <div class="row justify-content-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="col-sm-10 col-lg-12">
                    <div class="overflow-hidden">
                      <h4 data-zanim-xs='{"delay":0.1}'>@lang('profile.title')</h4>
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="text-700 font-weight-normal text-uppercase ls mb-4" data-zanim-xs='{"delay":0.2}'>@lang('profile.subtitle')</h6>
                    </div>
                  </div>
                  <div class="col-sm-7 col-lg-12">
                    <div class="overflow-hidden">
                      <p class="mb-0 pr-sm-5 pr-lg-0" data-zanim-xs='{"delay":0.3}'>
                        @lang('profile.content')</p>
                        
                        
                        <h6 class="text-uppercase ls mt-4">@lang('profile.heading')</h6>
                        <ul>
                          <li>«Mar Oceano» - EMARP, Portimão - 2017</li>
                          <li>«Mar Oceano» - Vila do Bispo - 2016</li>
                          <li>«Mar Oceano» - Old Townhall, Lagos - 2015</li>
                          <li>Collective - Real Compromisso Marítimo, Ferragudo - 2015</li>
                          <li>«Mar Oceano» - Museu da Terra e do Mar, Carrapateira - 2015</li>
                          <li>«Mar Oceano» - Espaço + , Aljezur - 2015</li>
                          <li>«Mar Oceano» - Museum of Portimão, 2014</li>
                          <li>«Lagos: marítimos e marinhas» - Lagos Cultural Center, 2007</li>
                          <li>«Orla costeira de Vila do Bispo» - Vila do Bispo, Faro, Aljezur, Portimão, 2001|2004</li>
                          <li>«Flora algarvia» - São Brás de Alportel, Silves, Lagos, Sagres, 1995|1997</li>
                        </ul>
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