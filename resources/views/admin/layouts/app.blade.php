@include('admin.layouts.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('/dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('admin.components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.components.sidebar') 
  <!-- end of Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->

  @yield('content')

  <!-- /.content-wrapper -->

  @include('admin.components.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.layouts.script')
