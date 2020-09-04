@extends('../layout')

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
              <div class="bg-holder" style="background-image:url(/img/404.jpg);" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'></div>
              <!--/.bg-holder-->
            </div>
          </div>
          <div class="col-xl-5 bg-white py-6">
            <div class="row h-100 align-items-center justify-content-center">
              <div class="col-sm-8 col-md-6 col-lg-10 col-xl-8" data-zanim-xs='{"delay":0.5,"animation":"slide-right"}' data-zanim-trigger="scroll">
                <h3 class="display-4 fs-2">Add an Image:</h3>

<form method="POST"  enctype="multipart/form-data" action="/photos">
  @csrf
<label for="reference" class="label">Reference:</label>              
<div class="row mb-4">
  <div class="col">
    <input
      type="number"
      class="form-control border-300 bg-light form  @error('reference') is-danger @enderror"
      name="reference"
      id="reference"
      placeholder="101"
      value="{{ old('reference') }}">
  </div>
</div>

@error('reference')
<p class="text-danger">{{ $errors->first('reference') }} </p>
@enderror

<label for="collection" class="label">Collection:</label>

<div class="row mb-4">
  <div class="col">
    <select name="collection" id="collection" class="form-control border-300 bg-light form @error('collection') is-danger @enderror">
      <option value="" {{ old("collection") == "" ? "selected":"" }}></option>
      <option value="cape st vincent" {{ old("collection") == "cape st vincent" ? "selected":"" }}>cape st vincent</option>
      <option value="costa vicentina" {{ old("collection") == "costa vicentina" ? "selected":"" }}>costa vicentina</option>
      <option value="storm waves" {{ old("collection") == "storm waves" ? "selected":"" }}>storm waves</option>
      <option value="shorelines" {{ old("collection") == "shorelines" ? "selected":"" }}>shorelines</option>
      <option value="skylines" {{ old("collection") == "skylines" ? "selected":"" }}>skylines</option>
      <option value="islands" {{ old("collection") == "islands" ? "selected":"" }}>islands</option>
    </select>
  </div>
</div>
@error('collection')
  <p class="text-danger">{{ $errors->first('collection') }}</p>
@enderror

<div class="row mb-4">
  <div class="col">
    <input class="zinput-file" id="file-1" type="file" name="photofile" data-multiple-caption="{count} files selected" multiple="">
    <label class="btn btn-outline-primary btn-sm" for="file-1"><span>Select Photo</span></label>
    </div>
</div>
@error('photofile')
  <p class="text-danger">{{ $errors->first('photofile') }}</p>
@enderror

<label for="Description" class="label">Description:</label>

  <div class="row mb-4 text-danger">
  
    <div class="col">
      <input
        type="text"
        class="form-control border-300 bg-light form @error('description') is-danger @enderror"
        name="description"
        id="description"
        placeholder="eg. Cordoama 1, 2012"
        value="{{ old('description') }}">
    </div>
  </div>
  @error('description')
    <p class="text-danger">{{ $errors->first('description') }}</p>
  @enderror

  <div class="field-is-grouped">
    <div class="control">
      <button class="button is-link btn btn-dark btn-block" type="submit">Submit</button>
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