<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="/assets/imv/assets/img/favicon.png" rel="icon">
  <link href="/assets/imv/assets/img/favicon.png" rel="apple-touch-icon">

  <title>Register User IMV</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/adminlte/dist/css/adminlte.min.css">

  <style media="screen">
    *,
    *:before,
    *:after{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body{
      background-color: lightgray;
    }
    .background{
      width: 430px;
      height: 520px;
      position: absolute;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
    }
    .background .shape{
      height: 200px;
      width: 200px;
      position: absolute;
      border-radius: 50%;
    }
    .shape:first-child{
      background: linear-gradient(
          #DB0B21,
          #f9f9f9
      );
      left: -80px;
      top: -80px;
    }
    .shape:last-child{
      background: linear-gradient(
          to right,
          #DB0B21,
          #f9f9f9
      );
      right: -30px;
      bottom: -80px;
    }
    form{
      height: 520px;
      width: 400px;
      background-color: rgba(249, 249, 249, 0.5);
      position: absolute;
      transform: translate(-50%,-50%);
      top: 50%;
      left: 50%;
      border-radius: 10px;
      /* backdrop-filter: blur(10px); */
      border: 2px solid rgba(249, 249, 249,0.1);
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.6);
      padding: 50px 35px;
    }
    @media (max-width: 768px) {
      form {
        height: 460px;
        width: 340px;
      }
    }
    form *{
      font-family: 'Poppins',sans-serif;
      /* color: #ffffff; */
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }
    form h3 {
      font-size: 32px;
      font-weight: 500;
      line-height: 42px;
      text-align: center;
      color: #1f1f1f;
      margin: 40px 0;
    }
    .logo {
      text-align: center;
    }
    .btn-login {
      color: #fff;
      background-color: #DB0B21;
      border-color: #f9f9f9;
    }
    .btn-login:hover {
      color: #DB0B21;
      background-color: #f9f9f9;
      border-color: #DB0B21;
    }
  </style>

</head>
<body>

  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  
  <form action="{{ route('register') }}" method="post">
    @csrf
    <div class="logo">
      <img src="/assets/imv/assets/img/logo/logo-imv.png" alt="" height="60px" width="auto">
    </div>
    
    <h3>Register User IMV</h3>

    <div class="input-group mb-3">
        <input name="name" type="text" class="form-control @error('name'){{'is-invalid'}}@enderror" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
        @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <input name="username" type="text" class="form-control @error('username'){{'is-invalid'}}@enderror" placeholder="Username" value="{{ old('username') }}" required autocomplete="username" autofocus>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
        @error('username')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
        @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
        @error('password-confirm')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-login btn-block">Register</button>
  </form>

  <!-- jQuery -->
  <script src="/assets/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
