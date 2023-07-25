<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('public\vendor\fontawesome-free\css\all.min.css') }}">
        <!-- Bootstrap 5.3.0 -->
        <link rel="stylesheet" href="{{ asset('vendor\bootstrap\css\bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
        <!-- icheck-bootstrap -->
        <link rel="stylesheet" href="{{ asset('vendor\bootstrap\icheck-bootstrap\icheck-bootstrap.min.css') }}">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="/"><b>Paduan Suara UTDI</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Daftar sebagai anggota baru</p>
                    @if(session()->has('registerError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('registerError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="/register" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-address-card"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nim" placeholder="NIM">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-id-badge"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="jurusan" placeholder="Jurusan">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-id-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-0">
                        <a href="/" class="text-center">Masuk untuk memulai sesi Anda</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 5.3.0 -->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>