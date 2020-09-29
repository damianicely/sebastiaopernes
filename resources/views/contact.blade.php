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
              <div class="bg-holder" style="background-image:url(/img/contact.jpg);"></div>
              <!--/.bg-holder-->
            </div>
          </div>
          <div class="col-xl-5 bg-white py-6">
            <div class="row h-100 align-items-center justify-content-center">
              <div class="col-sm-8 col-md-6 col-lg-10 col-xl-8" data-zanim-xs='{"delay":0.5,"animation":"slide-right"}' data-zanim-trigger="scroll">
                <h3 class="display-4 fs-2">Send me a message</h3>
                @if (session('success'))
                  <h6 class="text-success p-3 border border-success">{{ session('success') }}</h6>
                @else
                  <h6 class="text-danger mt-3">I'll get right back to you</h6>
                @endif
                <form class="mt-5"  method="POST"  enctype="multipart/form-data" action="/contact">
                  @csrf
                  <div class="row mb-4">
                    <div class="col">
                      <input
                      type="text"
                      class="form-control border-300 bg-light form  @error('name') is-danger @enderror"
                      name="name"
                      id="name"
                      placeholder="Your Name"
                      value="{{ old('name') }}">
                    </div>
                  </div>
                  @error('name')<p class="text-danger">{{ $errors->first('name') }} </p>@enderror
                  <div class="row mb-4">
                    <div class="col">
                      <input
                      type="text"
                      class="form-control border-300 bg-light form  @error('email') is-danger @enderror"
                      name="email"
                      id="email"
                      placeholder="Email Address"
                      value="{{ old('email') }}">
                    </div>
                  </div>
                  @error('email')<p class="text-danger">{{ $errors->first('email') }} </p>@enderror
                  <div class="row mb-4">
                    <div class="col">
                      <input
                      type="text"
                      class="form-control border-300 bg-light form @error('message') is-danger @enderror"
                      name="message"
                      id="message"
                      placeholder="Your Message"
                      value="{{ old('message') }}">
                    </div>
                  </div>
                  @error('message')<p class="text-danger">{{ $errors->first('message') }} </p>@enderror
                  <div class="row mb-4 align-items-center">
                    <div class="col-auto">
                      <input class="btn btn-dark btn-block" type="submit" name="submit" value="Send" />
                    </div>
                  </div>
                </form>
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