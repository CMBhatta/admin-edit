<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <form action="{{ route('reset.password.post', ['token' => $token]) }}" method="post">

        @csrf
        @method('post')
        <input type="text"  name="token" hidden value="{{$token}}">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Enter New Password" name="password">
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirm Your Password" name="password_confirmation">
        <div class="row">
          <div class="col-8">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
