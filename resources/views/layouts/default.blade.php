<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekam Pajak | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- style -->
 
  @include ('includes.style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include ('includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include ('includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
 
  @yield('content')
  <!-- /.content-wrapper -->
  
  @include ('includes.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include ('includes.script')
</body>
</html>
