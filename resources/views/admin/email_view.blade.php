<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <base href="/public">

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- page-body-wrapper ends -->

      {{-- start form --}}
      <div class="main-panel"  style="padding-right: 400px;padding-top: 120px; padding-bottom: 100px;" >

          @include('flash-message')

          <div class="content-wrapper" >
        <form action="{{ url('sendemail', $data->id) }}" method="post">
        @csrf
  <div class="form-group">
    <label for="greeting">Greeting</label>
    <input type="text" class="form-control" name="greeting" style="color: white;background-color: black" required="">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" name="body" style="color: white; background-color: black" required="">
  </div>
  <div class="form-group">
    <label for="actiontext">Action Text</label>
    <input type="text" class="form-control" name="actiontext" style="color: white; background-color: black" required="">
  </div>
  <div class="form-group">
    <label for="actionurl">Action url</label>
    <input type="text" class="form-control" name="actionurl" style="color: white; background-color: black" required="">
  </div>
  <div class="form-group">
    <label for="endpart">End Part</label>
    <input type="text" class="form-control" name="endpart" style="color: white; background-color: black" required="">
  </div>
  <input type="submit" value="Simpan" class="btn btn-success">
</form>
          </div>
      </div>

      {{-- end form --}}

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
