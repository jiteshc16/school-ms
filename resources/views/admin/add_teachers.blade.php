<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <style type="text/css">

      label
      {
        display: inline-block;
        width: 200px;
      }

      </style>
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
      
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
              
        
        <div class="container" align="center" style="padding-top: 100px;">


        @if(session()->has('message'))

        <div class="alert alert-success" id="success-alert">

         {{session()->get('message')}}

          <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-black me-0"></i>
              </button>
         
        </div>

        @endif

        <form action="{{url('upload_teacher')}}" method="POST">

        @csrf

        <div style="padding:15px;">

          <label>Teacher Name</label>
          <input type="text" style="color:black;" name="name" placeholder="write the name">


         </div>

          <div style="padding:15px;">

          <label>Department</label>
          <input type="text" style="color:black;" name="department" placeholder="write the department">


         </div>

         <div style="padding:15px;">

          <label>Grade</label>
          
          <select name="grade" style="color:black; width:200px">

          <option>--Select--</option>
          <option value="TGT">TGT</option>
          <option value="PGT">PGT</option>
          
         </select>


         </div>

         <div style="padding:15px;">

          <label>Gender</label>
          <input type="text" style="color:black;" name="gender" placeholder="write the gender">


         </div>

         <div style="padding:15px;">

          <input type="SUBMIT" class="btn btn-success">


         </div>



        </form>

        </div>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
