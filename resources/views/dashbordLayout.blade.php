<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="/dashbordResources/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dashbordResources/dist/css/adminlte.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <link rel="stylesheet" href="/dashbordResources/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="/dashbordResources/dist/css/custom-style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">خانه</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">
            <!-- Notifications Dropdown Menu -->
            <i class="fa fa-home"></i>
            <a href="/logout">خروج</a>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">پنل مدیریت</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info text-white">
                        نام کاربری شما:
                        {{ auth()->user()->username }}
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                       @can('isAdmin')
                        <li class="nav-item">
                            <a href="/admin/dashbord" class="nav-link {{ Route::currentRouteName() == 'dashbord' ? 'active' : '' }}">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    داشبورد
                                    <!-- <span class="right badge badge-danger">جدید</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/demand/list" class="nav-link {{ isset($demands) ? 'active' : '' }}">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    درخواست ها
                                    <!-- <span class="right badge badge-danger">جدید</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview {{ isset($varizha) || isset($pays) || isset($helps) ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    صورت حساب ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/varizha" class="nav-link {{ isset($varizha) ? 'active' : '' }}">
                                        <p>واریز های مدیران
                                            <span class="right badge badge-danger">جدید ۵</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/helps" class="nav-link {{ isset($helps) ? 'active' : '' }}">
                                        <!--<i class="fa fa-circle-o nav-icon"></i>-->
                                        <p> کمک های مردمی </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/payList" class="nav-link {{ isset($pays) ? 'active' : '' }}">
                                        <!--<i class="fa fa-circle-o nav-icon"></i>-->
                                        <p> پرداخت ها </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/school" class="nav-link {{isset($schools) ? 'active' : ''}}">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    مدیریت مدارس
                                    <!-- <span class="right badge badge-danger">جدید</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/settings" class="nav-link">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                     تنظیمات برنامه
                                </p>
                            </a>
                        </li>
                        <br>
                        @endcan
                        @can('isModir')
                        <li class="nav-item">
                            <a href="/modir/varizModir" class="nav-link">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    واریر نقدی
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/modir/acceptRegisterShow" class="nav-link">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    تایید ثبت نام ها
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/modir/darkhastList" class="nav-link">
                                <i class="nav-icon fa fa-th"></i>
                                <p>
                                    درخواست ها
                                </p>
                            </a>
                        </li>
                        @endcan

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> @yield('title') </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">@yield('title')</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="content">
            <div class="container-fluid">
                {{-- locate rows here --}}
                @yield('content')

            </div>
        </div>
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
        <div class="float-right d-none d-sm-inline">
            09398454623-
        </div>
        <!-- Default to the left -->
        <strong> CopyRight &copy; 2020 <a> شبکه دیدبان </a>.</strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/dashbordResources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/dashbordResources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dashbordResources/dist/js/adminlte.min.js"></script>
@yield('js')
</body>
</html>
