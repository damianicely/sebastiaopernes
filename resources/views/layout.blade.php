<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>
      @yield('title')
    </title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="manifest" href="/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/lib/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono%7cPT+Serif:400,400i%7cLato:100,300,400,700,800,900" rel="stylesheet">
    <link href="/lib/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/lib/owl.carousel/owl.carousel.css" rel="stylesheet">
    <link href="/lib/lightbox2/css/lightbox.min.css" rel="stylesheet">
    <link href="/css/theme.css" rel="stylesheet">
    <style>
          @yield('media')
</style>
  </head>

  <body class="has-sidemenu overflow-hidden-x">

    <!--===============================================-->
    <!--    Fancynav-->
    <!--===============================================-->

    <nav class="fancynavbar" data-zanim-lg='{"from":{"opacity":1,"x":70},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}' data-zanim-xs='{"from":{"opacity":1,"y":-43},"to":{"opacity":1,"y":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}'
      data-zanim-trigger="scroll" data-exclusive="true">
      <div class="fancynavbar-togglerbar" data-onscroll-fade-in="data-onscroll-fade-in">
      <a class="fancynavbar-addon-item" href="{{ route('homepage') }}">
          <span class='fas fa-home fs-3' data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll"></span>
          <!--<img class="fancynavbar-brand-img" src="/img/logo-sparrow-invert.svg" alt="" width="30" height="30" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll"/>-->
          <!--You can use icon or text logo as well-->
          <!--<span class='fab fa-superpowers fs-3'></span>-->
          <!--<span class='logo-sparrow'>S</span>--></a>
        <div class="fancynavbar-toggler">
          <svg class="fancynavbar-toggler-icon" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.5}' data-zanim-trigger="scroll">
            <path id="path-top" d="M20,25c0,0,22,0,30,0c16,0,18.89,40.71-.15,21.75C38.7,35.65,19.9,16.8,19.9,16.8"></path>
            <path id="path-middle" d="M20,32h30"></path>
            <path id="path-bottom" d="M19.9,46.98c0,0,18.8-18.85,29.95-29.95C68.89-1.92,66,38.78,50,38.78c-8,0-30,0-30,0"></path>
          </svg>
        </div>
        <div class="fancynavbar-addon" data-zanim-lg='{"from":{"opacity":1,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll">
          <a class="fancynavbar-addon-item" href="{{ route('login') }}"><span class="fas fa-unlock"></span></a>
          <a class="fancynavbar-addon-item" href="{{ route('contact') }}"><span class="far fa-envelope"></span></a>
          <a class="fancynavbar-addon-item" href="#languageModal" data-toggle="modal">
            <span class="text-sans-serif ls font-weight-black fs--1 d-block">
              {{ $locale }}
            </span>
          </a>
        </div>
      </div>
      <div class="fancynavbar-collapse">
        <ul class="fancynavbar-nav">
          <li class="fancynav-item">
            <a class="fancynav-link" href="{{ route('homepage') }}"><span class="fancynav-link-content"><i class="fas fa-home"></i> @lang('layout.nav-portfolio')</span></a>
          </li>
          <li class="fancynav-item">
            <a class="fancynav-link" href="{{ route('profile') }}"><span class="fancynav-link-content"><i class="far fa-user"></i> @lang('layout.nav-profile')</span></a>
          </li>
          <li class="fancynav-item">
            <a class="fancynav-link" href="{{ route('contact') }}"><span class="fancynav-link-content"><i class="far fa-envelope"></i> @lang('layout.nav-contact')</span></a>
          </li>
          <li class="fancynav-item">
          <a class="fancynav-link" href="{{ route('prints') }}"><span class="fancynav-link-content"><i class="fas fa-shopping-cart"></i> @lang('layout.nav-prints')</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <!--===============================================-->
    <!--    End of Fancynav-->
    <!--===============================================-->

@yield('content')

    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->
    <footer class="footer bg-black text-600 py-4 text-sans-serif text-center overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 order-lg-2">
              <a class="indicator indicator-up" href="#top" data-fancyscroll="data-fancyscroll"><span class="indicator-arrow indicator-arrow-one" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.9}'></span><span class="indicator-arrow indicator-arrow-two" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":1.05}'></span></a>
            </div>
            <div class="col-lg-4 text-lg-left mt-4 mt-lg-0">
              <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Copyright &copy; 2020 FullStackDesign</p>
            </div>
            <div class="col-lg-4 text-lg-right order-lg-2 mt-2 mt-lg-0">
              <p class="fs--1 text-uppercase ls font-weight-bold mb-0">@lang('layout.foot-love')<span class="text-danger fas fa-heart mx-1"></span>@lang('layout.foot-by')
                <a class="text-600" href="https://FullStackDesign.ltd/">FullStackDesign</a>
              </p>
            </div>
          </div>
        </div>
    </footer>

    <!--===============================================-->
    <!--    Modal for language selection-->
    <!--===============================================-->
    <!-- Modal-->
    <div class="modal fade fade-in" id="languageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xs mx-auto" role="document">
        <div class="modal-content bg-black">
          <div class="modal-body text-center p-0">
            <button class="close text-white position-absolute t-0 r-0 times-icon mt-2 mr-2 p-2" type="button" data-dismiss="modal" aria-label="Close"></button>
            <ul class="list-unstyled pl-0 my-0 py-4 text-sans-serif">
              <li>
                <a class="pt-1 d-block 
                    @if ($locale === 'en')
                        text-white font-weight-bold 
                    @else
                        text-500
                    @endif
                    " href="/set-language/en">English</a>
              </li>
              <li>
                <a class="pt-1 d-block 
                    @if ($locale === 'fr')
                        text-white font-weight-bold 
                    @else
                        text-500
                    @endif
                    " href="/set-language/fr">Francais</a>
              </li>
              <li>
                <a class="pt-1 d-block 
                    @if ($locale === 'pt')
                        text-white font-weight-bold 
                    @else
                        text-500
                    @endif
                    " href="/set-language/pt">Portugues</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/js/jquery.min.js"></script>
    <!--    <script src="/js/popper.min.js"></script>-->
    <script src="/js/bootstrap.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/lib/loaders.css/loaders.css.js"></script>
    <!--    <script src="/js/stickyfill.min.js"></script>-->
    <script src="/lib/is_js/is.min.js"></script>
    <!--     <script src="/lib/jtap/jquery.tap.js"></script>-->
    <!--     <script src="/js/rellax.min.js"></script>-->
    <!--     <script src="/lib/fancybox/jquery.fancybox.min.js"></script>-->
    <script src="/lib/owl.carousel/owl.carousel.js"></script>
    <script src="/lib/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/lib/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="/lib/lightbox2/js/lightbox.min.js"></script>
    <script src="/js/theme.js"></script>
  </body>

</html>