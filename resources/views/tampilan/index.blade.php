<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/jqvmap/jqvmap.min.css">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/css/adminlte.min.css">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.css">
        <link rel="stylesheet" href="/AdminLTE-3.1.0/assets/css/datatables.min.css">
        <style>
            #logo{
                font-family: cursive;
                font-size: 23px;
            }
        </style>
    </head>

<body class="hold-transition sidebar-mini layout-fixed">
    
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center bg-white">
            <img class="animation__shake" src="/AdminLTE-3.1.0/img/k3pg.png" alt="Logo">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <div class="float-right">
                    <a href="/logout" class="btn btn-sm btn-danger">Log Out</a>
                </div>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard"" class="brand-link">
            <img src="/AdminLTE-3.1.0/img/k3pg.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SP3MC</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="/AdminLTE-3.1.0/img/p1.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <span class="d-block text-white">{{auth()->user()->name}}</span>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open">
                        <a href="/dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="pakun" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Pengaturan Akun</p>
                        </a>
                    </li> --}}
                    
                    <li class="nav-header">DATA PUPUK</li>
                        <li class="nav-item">
                            <a href="djp" class="nav-link">
                            <i class="nav-icon fab fa-typo3"></i>
                            <p>Jenis Pupuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dpp" class="nav-link">
                            <i class="nav-icon fas fa-archive"></i>
                            <p>
                                Data Penjualan Pupuk
                            </p>
                            </a>
                        </li>
                        
                    <li class="nav-header">PERHITUNGAN PREDIKSI</li>
                        <li class="nav-item">
                            <a href="ba" class="nav-link">
                            <i class="nav-icon fas fa-random"></i>
                            <p>Bilangan Acak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="hp" class="nav-link">
                            <i class="nav-icon fas fa-poll-h"></i>
                            <p>Hasil Prediksi</p>
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
            @yield('container')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>170602041 - </strong>Muhammad Rizqi Samawa
            <div class="float-right d-none d-sm-inline-block">
                <b>SKRIPSI</b> 2021
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    {{-- script --}}
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script src="/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/chart.js/Chart.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/sparklines/sparkline.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/jquery-knob/jquery.knob.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/moment/moment.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/raphael/raphael.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="/AdminLTE-3.1.0/plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <script src="/AdminLTE-3.1.0/assets/js/jquery.min.js"></script>
        <script src="/AdminLTE-3.1.0/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/AdminLTE-3.1.0/assets/js/datatables.min.js"></script>
        <script src="/AdminLTE-3.1.0/js/adminlte.js"></script>
        <script src="/AdminLTE-3.1.0/js/demo.js"></script>
        <script src="/AdminLTE-3.1.0/js/pages/dashboard.js"></script>
    {{-- script --}}
    
@yield('script')
</body>
</html>
