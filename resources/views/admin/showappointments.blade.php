<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
    <style>
        .head{
            color: whitesmoke;
        }
    </style>
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
      <div class="main-panel"  style="padding-right: 200px;padding-top: 120px; padding-bottom: 100px;" >
        @include('flash-message')
      <div class="container container-fluid">
      <table class="table">
  <thead>
    <tr>
      <th scope="col" style="color: whitesmoke">No</th>
      <th scope="col" style="color: whitesmoke">Costumer Name</th>
      <th scope="col" style="color: whitesmoke">Email</th>
      <th scope="col" style="color: whitesmoke">Phone</th>
      <th scope="col" style="color: whitesmoke">Doctor Name</th>
      <th scope="col" style="color: whitesmoke">Date</th>
      <th scope="col" style="color: whitesmoke">Message</th>
      <th scope="col" style="color: whitesmoke">Status</th>
      <th scope="col" style="color: whitesmoke">Action Appointment</th>
    </tr>
  </thead>
  <tbody>
      @php $no = 1; @endphp
      @foreach ($appoint as $app )
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $app->name }}</td>
            <td>{{ $app->email }}</td>
            <td>{{ $app->phone }}</td>
            <td>{{ $app->doctor }}</td>
            <td>{{ $app->date }}</td>
            <td>{{ $app->message }}</td>
            <td>{{ $app->status }}</td>
            <td>
                <a class="btn btn-success ml-lg-3" href="{{ url('approved', $app->id) }}" >Approved</a>
                <a class="btn btn-danger ml-lg-3" href="{{ url('cancel',$app->id) }}" >Cancel</a>
                <a class="btn btn-primary ml-lg-3" href="{{ url('emailview',$app->id) }}" >Send Email</a>
            </td>
        </tr>
      @endforeach
  </tbody>
</table>
  </div>
      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
