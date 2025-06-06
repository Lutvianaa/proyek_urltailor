@extends('layouts.apps')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  	<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  	<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> 
    <title>URL Tailor</title>
    <style>
        body {
            background: #eee;
        }
        #side_nav {
            background: #000;
            min-width: 250px;
            max-width: 250px
        }
        .content {
            min-height: 100vh;
            width: 100%;
        }
        .bg-custom{
            background-color:#00969a;
        }
        .nav-item > a{
            color:#fff;
            text-decoration: none;
            width: 100%;
            display: block;
            padding: 10px 15px;
        }
        .nav-item:hover{
            background: #fff;
            border-radius: 8px;
        }
        .nav-item:hover a{
            color: #000;
        }
        .active{
            background: #fff;
            border-radius: 8px;
        }
        .active a{
            color: #000;
        }
    </style>
</head>
<body>

@section('content')
<!-- SIDEBAR -->
<div class="container-fluid">
    <div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-custom">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a class="navbar-brand mt-3 ms-4" href="#">
                    <img src="https://i.postimg.cc/YSpBwwMY/logourltailor.png" width="70%" alt="logo">
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5" id="menu">
                    <li class="nav-item mb-3">
                        <a href="{{ url('home') }}" class="me-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="me-2" viewBox="0 0 24 24" stroke-width="1.5" width="20" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="{{ url('datauser') }}" class="me-5">
                        <svg fill="none" class="me-2" stroke="currentColor" stroke-width="1.5" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                        </svg>Data Pengguna</a>
                    </li>
                    <li class="nav-item mb-3 active">
                        <a href="{{ url('mitra') }}" class="me-5">
                        <svg fill="none" class="me-2" stroke="currentColor" stroke-width="1.5" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                        </svg>Data Mitra</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="{{ url('layanan') }}" class="me-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="20" stroke="currentColor" class="w-6 h-6 me-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>Data Layanan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle me-4" href="#" role="button" id="testimoniDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="20" stroke="currentColor" class="w-6 h-6 me-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            Testimoni
                        </a>
                        <div class="dropdown-menu" aria-labelledby="testimoniDropdown">
                            <a class="dropdown-item" href="{{ url('star') }}">Star Tailoring</a>
                            <a class="dropdown-item" href="{{ url('tailor') }}">Tailor</a>
                            <a class="dropdown-item" href="{{ url('rumahjahit') }}">Rumah Jahit</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- NAVBAR -->
        <div class="col py-3">
            <nav class="navbar navbar-expand-md navbar-light bg-light shadow p-3 mb-1 bg-body-tertiary rounded">
                <div class="container">
                    <div class="navbar-band fs-3" href="{{ url('/') }}">
                        <h4 class="card-title">Selamat Datang, {{ Auth::user()->name }}!</h4>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-info mt-2 ms-2">Login</button></a></a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-outline-info mt-2 ">Register</button></a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- TABLE -->
            <div class="card mt-3">
                <div class="card">
                    <div class="card-header">Data Mitra</div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                            <div class="card-body">
                                <a href="{{ url('/mitra/create') }}" class="btn btn-primary btn-sm mb-3" title="Add New Contact"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
                                </a>
                                <div class="table-responsive px-4">
                                    <table class="table table-responsive table-bordered table-striped table-hover" id="example">      
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Nomor Telepon</th> 
                                                <th class="text-center">Logo</th> 
                                                <th class="text-center">Aksi</th>
                                        </thead>
                                        </thead>
                                        <tbody>
                                        @foreach($mitra as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->no_telepon }}</td>
                                                <td>
                                                    <img src="{{ asset($item->logo) }}" width= '150' height='50' class="img img-responsive" />
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-primary btn-sm"><a href="{{ route('mitra.edit', $item->id) }}" data-toggle="tooltip" title="Edit Data!"><i class="fa fa-edit text-white"></i></a></button>
                                                    <form action="{{ route('mitra.destroy', $item->id) }}" method="POST" style="display: inline">
                                                        {!! csrf_field() !!}
                                                        {!! method_field('DELETE') !!}
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')"><a data-toggle="tooltip" title="Hapus Data!"><i class="fa fa-trash text-white"></i></a></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>$(document).ready(function () {$('#example').DataTable();});
            </script>
        </div>
    </div>
</div>

@endsection
    
</body>
</html>

