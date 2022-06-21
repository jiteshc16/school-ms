<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
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

        <div align="center" style="padding-top: 50px">

        <strong>
          <h1 style="padding-bottom: 10px;">STUDENTS APPLIED FOR ADMISSION</h1>
        </strong>

        <table class="table">
            <thead>
                <tr>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">NAME</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">DOB</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">GENDER</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">CLASS</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">NATIONALITY</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">STATE</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $view)
                <tr>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$view->Name}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$view->DOB}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$view->Gender}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$view->Class}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$view->Nationality}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$view->State}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <strong>
          <h1 style="padding-top: 50px; padding-bottom: 10px;">TEACHERS LIST</h1>
        </strong>

        <table class="table">
            <thead>
                <tr>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">NAME</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">DEPARTMENT</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">GRADE</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">GENDER</th>
                </tr>
            </thead>
            <tbody>
            @foreach($teacher as $teachers)
                <tr>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$teachers->name}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$teachers->Department}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$teachers->Grade}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$teachers->Gender}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        
        <strong>
          <h1 style="padding-top: 50px; padding-bottom: 10px;">STUDENTS LIST</h1>
        </strong>
        
        <table class="table">
            <thead>
                <tr>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">NAME</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">CLASS</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">SECTION</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">DOB</th>
                    <th  style="padding-right: 40px; padding-left: 35px; padding-top: 10px; padding-bottom: 10px; font-size: 18px">GENDER</th>
                </tr>
            </thead>
            <tbody>
            @foreach($list as $students)
                <tr>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$students->Name}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$students->Class}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$students->Section}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$students->DOB}}</td>
                    <td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; color:white">{{$students->Gender}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        

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
