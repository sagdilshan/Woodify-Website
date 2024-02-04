<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard - Woodify</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('../assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('../assets/dist/css/adminlte.min.css') }}">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed ">
  <div class="wrapper">
    <!-- Navbar -->
    @include('website-pages.admin.body.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container start-->
    @include('website-pages.admin.body.sidebar')
    <!-- Main Sidebar Container end -->

    <!-- Content Wrapper. Contains page content -->
    <div class="space" style="margin-top: 3.6rem;" >
    </div>

   @yield('admin')
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    @include('website-pages.admin.body.footer')
    <!-- End Main Footer -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('../assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('../assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('../assets/dist/js/adminlte.js') }}"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="{{ asset('../assets/plugins/chart.js/Chart.min.js') }}"></script>

  <script src="{{ asset('../assets/dist/js/demo.js') }}"></script>

  <script src="{{ asset('../assets/dist/js/pages/dashboard3.js') }}"></script>
</body>
</html>
