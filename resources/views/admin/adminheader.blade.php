<?php
/**
 * Created by PhpStorm.
 * User: Anjali
 * Date: 25-03-2021
 * Time: 14:41
 */?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OneCliq | Admin </title>
    <link rel="icon" href="/images/logo.png" type="image/png">
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/admin" class="nav-link">Home</a>
            </li>
            {{--<li class="nav-item d-none d-sm-inline-block">--}}
                {{--<a href="#" class="nav-link">Contact</a>--}}
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

            <!-- Notifications Dropdown Menu -->

            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">--}}
                    {{--<i class="fas fa-th-large"></i>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-warning elevation-4">
        <!-- Brand Logo -->
        <a href="/admin" class="brand-link">
            <img src="/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-bold">OneCliq</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="" class="img-circle elevation-2" alt="I">
                </div>
                <div class="info">
                    <a href="/admin" class="d-block">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="/admin" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home Page
                                {{--<i class="right fas fa-angle-left"></i>--}}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/adminvendor" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Vendors
                                <span class="right badge badge-danger"></span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="/productselect" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Vendor wise Product
                                {{--<i class="fas fa-angle-left right"></i>--}}
                                {{--<span class="badge badge-info right">6</span>--}}
                            </p>
                        </a>

                    </li>

                    <li class="nav-item has-treeview">
                        <a href="/productdetails" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                All Products
                                {{--<i class="fas fa-angle-left right"></i>--}}
                                {{--<span class="badge badge-info right">6</span>--}}
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="/showcategory" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Categories
                                {{--<i class="right fas fa-angle-left"></i>--}}
                            </p>
                        </a>

                    <li class="nav-item has-treeview">
                        <a href="/businesstype" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Business Types
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="/vaccdelete" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Vendor Account deletion
                                {{--<i class="fas fa-angle-left right"></i>--}}
                                {{--<span class="badge badge-info right">6</span>--}}
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="/userdelete" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Customer Account deletion
                                {{--<i class="fas fa-angle-left right"></i>--}}
                                {{--<span class="badge badge-info right">6</span>--}}
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Reports
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/productbased" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product Reports</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/categoryreport" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category wise Reports</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Date based Reports</p>
                                </a>
                            </li>


                    <li class="nav-item">
                        <a href="/customer" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>cutomer based Reports</p>
                        </a>
                    </li>
                            <li class="nav-item">
                                <a href="/Vendorbased" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Vendor based Reports</p>
                                </a>
                            </li>
                    </ul>


        <!-- /.sidebar -->
    </aside>

@yield('body')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <br/>
        {{--<strong>Copyright &copy; </strong>--}}
        {{--All rights reserved.--}}
        <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://www.iroidtechnologies.com/">Iroid Technologies</a>
            {{--<br>--}}
            {{--&copy;Anjali Sethumadhavan--}}
        </p>
        <div class="float-right d-none d-sm-inline-block">
            {{--<b>Version</b> 3.0.5--}}
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
</body>
</html>