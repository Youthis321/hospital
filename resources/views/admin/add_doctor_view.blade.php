<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
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
        <form action="{{ url('upload_doctor') }}" method="post" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label for="name">Doctor Name</label>
    <input type="text" class="form-control" name="name" placeholder="Write the name" style="color: white;background-color: black" required="">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="Write the phone" style="color: white; background-color: black" required="">
  </div>
  <div class="form-group">
    <label for="speciality">Speciality</label>
    <select name="speciality" style="color: white;" class="form-control" required="">
        <option value="skin">---Selected---</option>
        <option value="skin">Skin</option>
        <option value="heart">heart</option>
        <option value="eye">Eye</option>
        <option value="nose">Nose</option>
    </select>
  </div>
  <div class="form-group">
    <label for="room_to">Room To</label>
    <input type="text" class="form-control" name="room_to" placeholder="Write the room to" style="color: white; background-color: black" required="">
  </div>
  <div class="form-group">
    <label for="file">Doctor Image</label>
    <input type="file" class="form-control" name="file" required="">
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
