<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PruebaAE | Inicio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons 
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css"> 
  -->
  
  <link rel="stylesheet" href="{{ url('/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style 
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css"> 
  -->
  <link rel="stylesheet" href="{{ url('/dist/css/adminlte.min.css') }}">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{ url('/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Prueba</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('/')}}" class="d-block">
            {{ Auth::user()->name }}
          </a>
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pagina Principal
              </p>
            </a>
          </li>
          <!--<li class="nav-item">
            <a href="{{url('usuarios')}}" class="nav-link">
            <i class="nav-icon fas"><i class="bi bi-people"></i></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>-->
          <li class="nav-item">
            <a href="{{url('productos')}}" class="nav-link">
            <i class="nav-icon fas"><i class="bi bi-bag-check-fill"></i></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('categorias')}}" class="nav-link">
            <i class="nav-icon fas"><i class="bi bi-layout-text-window-reverse"></i></i>
              <p>
                Categorias
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('detalle-categorias')}}" class="nav-link">
            <i class="nav-icon fas"><i class="bi bi-journal-text"></i></i>
              <p>
                Detalle de Categorias
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas"><i class="bi bi-box-arrow-left"></i></i>
              <p>
                Cerrar Sesion
              </p>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
              </form>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content-admin')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery 
<script src="../public/plugins/jquery/jquery.min.js"></script> 
-->
<script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
-->
<script src="{{ url('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App 
<script src="../public/dist/js/adminlte.min.js"></script> 
-->
<script src="{{ url('/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
