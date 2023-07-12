<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
        @yield('linkRel')
    </head>
    <body class="hold-transition sidebar-mini login-page">
        <div class="wrapper">
            {{-- @include('partials.navbar') --}}
            {{-- @include('partials.sidebar') --}}
            @yield('wrapper')
        </div>
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>
