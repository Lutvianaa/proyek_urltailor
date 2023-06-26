@extends('rumahjahit.layout')
@section('content')

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
      .card {
      margin-top: 60px;
      background: #1A2226;
      text-align: center;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
    }
    .card-header {
        text-align: center;
        font-size: 20px;
        letter-spacing: 2px;
        margin-top: 20px;
        font-weight: bold;
        color: #0DB8DE;
    }
    .card-body {
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
    input[type=file] {
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
        font-size: 15px;
        color: white;
        letter-spacing: 1px;
    }
    .form-control{
        box-shadow: none;
        background-color: #1A2226;
        color: #ECF0F5;
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
    .save-button {
        padding-right: 0px;
        text-align: right;
        margin-bottom: 15px;
    }
    .save-text {
        padding-left: 0px;
        color: #A2A4A4;
    }
    </style>
  </head>
<body>
<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Data Mitra</div>
    <div class="card-body">

        <form action="{{ route('rumahjahit.update', $rumahjahit->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}

            <div class="form-group mb-4">
                <label class="form-control-label" for="pelanggan">Nama Pelanggan</label><br>
                <input type="text" name="pelanggan" id="pelanggan" class="form-control" value="{{ $rumahjahit->pelanggan }}">
            </div>
            <div class="form-group mb-4">
                <label class="form-control-label" for="testimoni">Testimoni</label><br>
                <input type="text" name="testimoni" id="testimoni" class="form-control" value="{{ $rumahjahit->testimoni }}">
            </div>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
</body>
</html>
@endsection

