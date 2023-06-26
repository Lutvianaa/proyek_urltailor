@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Tailor</title>
    <style type="text/css">
    body {
      background-color: #071014;
      background-image: -webkit-linear-gradient(160deg, #071014 0%, #0db8de 100%);
      background-image: -moz-linear-gradient(160deg, #071014 0%, #0db8de 100%);
      background-image: -o-linear-gradient(160deg, #071014 0%, #0db8de 100%);
      background-image: linear-gradient(160deg, #071014 0%, #0db8de 100%);  
        font-family: 'Arial', sans-serif;
        height: 100vh;
      }
    .login-box {
      margin-top: 60px;
      background: #1A2226;
      text-align: center;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
    }
    .login-title {
        text-align: center;
        font-size: 20px;
        letter-spacing: 2px;
        margin-top: 20px;
        font-weight: bold;
        color: #0DB8DE;
    }
    .login-form {
        margin-top: 5px;
        text-align: left;
    }
    input[type=text] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        outline: 0;
        margin-bottom: 10px;
        padding-left: 0px;
        color: #ECF0F5;
    }
    input[type=password] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-radius: 0px;
        margin-bottom: 10px;
        color: #ECF0F5;
    }
    .form-group {
    margin: 10px;
    }
    .form-control:focus {
        box-shadow: none;
        background-color: #1A2226;
        color: #ECF0F5;
    }
    .form-control-label {
        font-size: 12px;
        color: #6C6C6C;
        letter-spacing: 1px;
    }
    .btn-outline-primary {
        width: 200px;
        height: 40px;
        border-radius: 15px;
        cursor: pointer;
        border-color:#0DB8DE!important;
        color:#0DB8DE;
        margin-top: 20px;
    }
    .btn-outline-primary:hover{
        background-color: #071014!important;
        background-image: -webkit-linear-gradient(160deg, #071014 0%, #0db8de 100%)!important;
        background-image: -moz-linear-gradient(160deg, #071014 0%, #0db8de 100%)!important;
        background-image: -o-linear-gradient(160deg, #071014 0%, #0db8de 100%)!important;
        background-image: linear-gradient(160deg, #071014 0%, #0db8de 100%)!important;
        
        color: #ffffff!important;
    }
    .login-button {
        padding-right: 0px;
        text-align: right;
        margin-bottom: 15px;
    }
    .login-text {
        padding-left: 0px;
        color: #A2A4A4;
    }

  </style>
</head>
<body>

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin:20px;">
      <div class="col-lg-5 col-md-4 mb-5 mt-5 login-box">
        <div class="col-lg-12 login-title">
          Login
        </div>
        <div class="col-lg-12 login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf>
                <div class="form-group">
                    <label class="form-control-label">{{ __('Email Address') }}</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label class="form-control-label">{{ __('Password') }}</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="col-12 login-btm login-button justify-content-center d-flex">
                    <button type="submit" class="btn btn-outline-primary">{{ __('Login') }}</button>
                </div>
                <div class="col-12 login-btm login-button justify-content-center d-flex">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>
@endsection


