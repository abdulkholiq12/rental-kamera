<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="{{url ('css/bootstrap/fonts-googleapis.css')}}" />
  <!-- <link rel="stylesheet" href="{{url ('css/font-awesome.min.css')}}"> -->
  <link href="{{url ('css/bootstrap/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <link href="{{url ('css/bootstrap/demo.css')}}" rel="stylesheet" />
  <link href="{{url ('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url ('css/admin/app.css')}}" rel="stylesheet" />
  <link href="{{url ('css/admin/header.css')}}" rel="stylesheet" />
  <link href="{{url ('css/admin/sidebar.css')}}" rel="stylesheet" />
  <link href="{{url ('css/admin/create_product.css')}}" rel="stylesheet" />
</head>

<body class="">
  @include('admin.layouts.sidebar')

    <div class="main-panel">
      <!-- Navbar -->
      @include('admin.layouts.header')
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <!-- End Navbar -->
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer">
        @include('admin.layouts.footer')
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url ('js/core/jquery.min.js')}}"></script>
  <script src="{{url ('js/core/popper.min.js')}}"></script>
  <script src="{{url ('js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{url ('js/plugins/moment.min.js')}}"></script>
  <script src="{{url ('js/plugins/jquery.dataTables.min.js')}}"></script>
  <script src="{{url ('js/plugins/bootstrap-tagsinput.js')}}"></script>
  <script src="{{url ('js/plugins/jquery-jvectormap.js')}}"></script>
  <script src="{{url ('js/plugins/arrive.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="{{url ('js/plugins/chartist.min.js')}}"></script>
  <script src="{{url ('js/plugins/bootstrap-notify.js')}}"></script>
  <script src="{{url ('js/bootstrap/material-dashboard.js?v=2.1.0')}}" type="text/javascript"></script>
  <script src="{{url ('js/bootstrap/demo.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script>
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script>
</body>

</html>
