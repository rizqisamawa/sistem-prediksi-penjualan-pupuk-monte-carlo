<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SP3MC</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="/AdminLTE-3.1.0/css/adminlte.min.css">
  {{-- <style>
      body{
          background-image: url(/AdminLTE-3.1.0/img/photo1.png);
      }
  </style> --}}
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="card card-outline card-indigo">
            <div class="card-header text-center">
                <div class="h1"><b class="text-dark">S</b><b class="text-indigo">P3</b><b class="text-dark">MC</b></div>
            </div>
            
            <div class="card-body pt-3 ">
                @if(session('notif'))
                    <div class="card-body">
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span style="font-size: 14px">{{session('notif')}}</span>
                        </div>
                    </div>
                @endif
            <form action="/postlogin" method="post">
                @csrf
                <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Username">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user-alt"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-8">
                    <div class="icheck-indigo text-indigo">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
        </div>
    </div>

    <script src="/AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
    <script src="/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/AdminLTE-3.1.0/js/adminlte.min.js"></script>
</body>

</html>