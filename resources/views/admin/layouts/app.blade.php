<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin/layouts/head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    @include('admin/layouts/header')
    @include('admin/layouts/sidebar')
    
    @section('main-content')
      @show

    @include('admin/layouts/footer')


      <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

@include('admin/layouts/footer-section')
</body>
</html>