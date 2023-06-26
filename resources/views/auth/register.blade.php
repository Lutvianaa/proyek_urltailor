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
      margin-top: 40px;
      background: #1A2226;
      text-align: center;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
  }
  .login-title {
      text-align: center;
      font-size: 20px;
      letter-spacing: 2px;
      margin-top: 10px;
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
      <div class="col-lg-5 col-md-4 mb-5 login-box">
        <div class="col-lg-12 login-title">
          Sign Up
        </div>
        <div class="col-lg-12 login-form">
          <form method="POST" action="{{ route('register') }}">
                @csrf>
            <div class="form-group">
              <label class="form-control-label">{{ __('Name') }}</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
              <label class="form-control-label">{{ __('Email Address') }}</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label class="form-control-label">{{ __('Number Phone') }}</label>
              <input type="text" class="form-control" name="number_phone">
            </div>
            <div class="form-group">
                <label class="form-control-label">{{ __('Password') }}</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label class="form-control-label">{{ __('Confirm Password') }}</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
            <div class="col-12 login-btm login-button justify-content-center d-flex">
                <button type="submit" class="btn btn-outline-primary">{{ __('Register') }}</button>
            </div>
        </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="number_phone" class="col-md-4 col-form-label text-md-end">{{ __('Number Phone') }}</label>

                            <div class="col-md-6">
                                <input id="number_phone" type="text" class="form-control @error('number_phone') is-invalid @enderror" name="number_phone" value="{{ old('number_phone') }}" required autocomplete="number_phone">

                                @error('number_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
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
</div> -->
</body>
</html>
@endsection