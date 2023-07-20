<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        {{-- <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('vendor\fontawesome-free-6.4.0\css\all.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('vendor\overlayScrollbars\css\OverlayScrollbars.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
        <!-- Bootstrap 5.3.0 -->
        <link rel="stylesheet" href="{{ asset('vendor\bootstrap\css\bootstrap.min.css') }}">
        <!-- icheck-bootstrap -->
        <link rel="stylesheet" href="{{ asset('vendor\bootstrap\icheck-bootstrap\icheck-bootstrap.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('vendor\fontawesome-free-6.4.0\css\all.min.css') }}"> --}}
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor\bootstrap\icheck-bootstrap\icheck-bootstrap.min.css') }}">
        @yield('linkRel')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        {{-- @include('partials.navbar')
        @include('partials.sidebar') --}}
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="container-fluid">
                    @yield('wrapper')
                </div>
            </div>
        </div>
        <!-- REQUIRED SCRIPTS -->
        {{-- <!-- jQuery -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- AdminLTE App -->
        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script> --}}
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>
