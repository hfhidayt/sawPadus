<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('vendor\fontawesome-free\css\all.min.css') }}">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css"> --}}
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendor\adminlte\dist\css\adminlte.min.css') }}">
        <!-- icheck-bootstrap -->
        <link rel="stylesheet" href="{{ asset('vendor\bootstrap\icheck-bootstrap\icheck-bootstrap.min.css') }}">
        @stack('linkRel')
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
        <!-- jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
        <script>
            feather.replace()
        </script>
        @stack('script')
    </body>
</html>
