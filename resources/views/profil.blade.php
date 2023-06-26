<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>  
	<title>Profil</title>
    <style type="text/css">
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .main{
            position: relative;
            background: url("https://cdn.pixabay.com/photo/2020/01/29/20/24/building-4803602__480.jpg");
            min-height: 50vh;
            background-size: cover;
            padding: 200px 0 120px;
            text-shadow: 2px 2px 2px rgb(35, 123, 255);
        }
        .main .container .row .col-sm-12{
            color: rgb(255, 255, 255);
        }
        .main .container .row .col-sm-12 p {
            font-size: 70px;
        }
        .main .container .row .col-sm-12 .btn{
            transition: all 0.3s;
        }
        .main .container .row .col-sm-12 .btn:hover{
            transform: scale(1.08);
            background-color: rgb(206, 228, 59);
        }
        nav{
            background-color: transparent;
            background-image: linear-gradient(110deg, #CEE43B 0%, #11C0E5 100%);
        }
        .navbar .navbar-nav .nav-link {
            color: black;
            font-size: 18px;
        }
        .navbar .navbar-brand{
            color: black;
            font-size: 30px;
        }
        .judul .container .row .col-sm-12 h1 {
            text-shadow: 2px 2px 2px rgb(35, 123, 255);
        }
        .bg-white {
            background-color: white !important;
        }
        @media only screen and (max-width: 600px){
            .navbar-collapse {
                background: white;
            }
        }
        @media (max-width: 768px) {
            .main {
                min-height: 50vh;
                padding-top: 175px;
            }
            h1, h2 {
                font-size: calc(0.425rem + 3.3vw);
            }
        }
        /* .col-sm-4 .card{
            transition: all 0.3s;
        }
        .col-sm-4 .card:hover{
            transform: scale(1.08);
            background-color: rgb(30, 0, 254);
        } */
        .collapse .navbar-nav .nav-item .nav-link {
            text-transform: uppercase;
        }
        .collapse .navbar-nav .nav-item .nav-link:hover{
            color: rgb(17, 192, 229);
        }
        .container .row .col-md-4 .card {
            transition: all 0.3s;
        }      
        footer .container .row .col-md-3 .btn-outline-blue {
          --bs-btn-color: rgb(0, 0, 0);
          --bs-btn-border-color: rgb(0, 0, 0);
          --bs-btn-hover-color: rgb(206, 228, 59);
          --bs-btn-hover-bg: none;
          --bs-btn-hover-border-color: rgb(206, 228, 59);
          --bs-btn-focus-shadow-rgb: 25,135,84;
          --bs-btn-active-color: #fff;
          --bs-btn-active-bg: rgb(206, 228, 59);
          --bs-btn-active-border-color: rgb(206, 228, 59);
          --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
          --bs-btn-disabled-color: rgb(206, 228, 59);
          --bs-btn-disabled-bg: transparent;
          --bs-btn-disabled-border-color: rgb(206, 228, 59);
          --bs-gradient: none;
        }
        #testimoni{
          padding-top: 5rem;
        }
        .col-md-4 .card{
            transition: all 0.3s;
        }
        .col-md-4 .card:hover{
            transform: scale(1.08);
            background-color: rgb(206, 228, 59);
        }
        .judul .container-fluid{
            /* background-color: transparent; */
            background-image: linear-gradient(110deg, #CEE43B 0%, #11C0E5 100%);
        }
        footer {
            background-color: transparent;
            background-image: linear-gradient(110deg, #CEE43B 0%, #11C0E5 100%);
        }
        footer .container .row .col-md-3 .btn-outline-blue:hover {
          outline-color: rgb(17, 192, 229);
        }

        footer .container .row .col-md-4 .row .col i:hover{
          color: rgb(17, 192, 229);
        }

        .whatsapp-float{
          position: fixed;
          bottom: 30px;
          right: 30px;
          border-radius: 50%;

        }

        .whatsapp-float .whatsapp-logo{
          display: block;
          width: 60px;
          height: 60px;
          background-color: green;
          color: white;
          text-align: center;
          line-height: 60px;
          font-size: 30px;
          border-radius: 50%;
          box-shadow: 2px 2px 3px #999;
          transition: all 0.3s ease-in-out;
        }

        .whatsapp-icon {
          margin-top: 15px;
        }

        .whatsapp-float:hover {
          transform: scale(1.1);
          box-shadow: 3px 3px 5px #252323;
        }



    </style>
</head>
<body>
    <header>
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p class="font-weight-bold text-center">PROFIL</p>
                    </div>
                </div>                
            </div>
        </section> 
    </header>

    <nav class="navbar navbar-expand-lg bg-light bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="https://i.postimg.cc/2yCJHCR2/logo.png" width="20%" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto" style="font-size: 15px; font-family: sans-serif;">
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#sejarah">Sejarah</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#visimisi">Visi Misi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="judul" id="judul">
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-sm-12 mt-3">
                    <img src="https://i.postimg.cc/2yCJHCR2/logo.png" alt="logo" width="40%" class="mx-auto d-block">
                    <h1 class="text-center">PERUSAHAAN JASA JAHIT PROFESIONAL</h1>
                </div>
            </div>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.5" d="M0,256L60,256C120,256,240,256,360,250.7C480,245,600,235,720,208C840,181,960,139,1080,149.3C1200,160,1320,224,1380,256L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> -->
        </div>
    </section>

    <section class="sejarah" id="sejarah">
        <div class="container mt-3">
            <div class="row">
                <h1 class="text-center">SEJARAH</h1>
                <div class="col mt-3 mb-3">
                    <p class="text-center">URL Tailor didirikan pada tahun 2022 dengan tujuan untuk menyediakan layanan jahit berkualitas tinggi dengan harga yang kompetitif. Sejak itu, kami telah memperluas layanan kami dan mengembangkan mitra di seluruh Indonesia. Kami selalu berfokus pada kepuasan pelanggan dan berusaha untuk memenuhi kebutuhan mereka dengan terus meningkatkan kualitas produk dan layanan kami.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="visimisi " id="visimisi">
        <div class="container">
            <div class="row mx-auto">
                <h1 class="text-center">VISI MISI</h1>
                <div class="col-md-5 mx-auto">
                    <h2>Visi</h2>
                    <p>Menjadi penyedia jasa jahit yang terbaik dan terpercaya di Indonesia, dengan fokus pada kualitas produk dan layanan pelanggan yang unggul.</p>
                </div>
                <div class="col-md-5 mx-auto">
                    <h2>Misi</h2>
                    <ul>
                        <li>Menyediakan produk jahit yang inovatif dan menarik bagi pelanggan.</li>
                        <li>Meningkatkan kepuasan pelanggan dengan memberikan layanan yang ramah dan responsif.</li>
                        <li>Mempertahankan hubungan yang baik dengan mitra dan pelanggan kami.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-black pt-5">
        <div class="container text-md-left">
            <div class="row mb-3 pb-4">
                <div class="col-md-4">
                    <h3>URL Tailor</h3>
                    <p>Menyediakan jasa layanan menjahit baju dengan kualitas utama, kami sanggup untuk memenuhi permintaan jasa menjahit dalam skala kecil maupun besar.</p>
                    <div class="row">
                      <div class="col">
                        <a href="https://www.instagram.com" class="text-black"><i class="bi bi-instagram m-2"></i></a>
                        <a href="https://www.twitter.com" class="text-black"><i class="bi bi-twitter m-2"></i></a>
                        <a href="https://www.facebook.com" class="text-black"><i class="bi bi-facebook m-2"></i></a>
                        <a href="https://www.youtube.com" class="text-black"><i class="bi bi-youtube m-2"></i></a>
                      </div>
                    </div>
                </div> 
                <div class="col-md-3">
                    <h3>Hubungi Kami</h3>
                    <p><i class="bi bi-telephone ">  (+62)87776665554</i></p>
                    <p><i class="bi bi-envelope ">  urltailor@gmail.com</i></p>
                    <p><i class="bi bi-geo-alt ">  Jalan Melati No. 100, Purwokerto</i></p>
                </div>
                <div class="col-md-2">
                    <h3>Jasa Kami</h3>
                    <p>Jasa Jahit & Permak</p>
                    <p>Jahit Tailor-made</p>
                    <p>Konveksi Seragam</p>
                </div>
                <div class="col-sm-3">
                  <h4>Tag Populer</h4>
                  <button type="button" class="btn btn-outline-blue m-1">Jahit Online</button>
                  <button type="button" class="btn btn-outline-blue m-1">Permak Online</button>
                  <button type="button" class="btn btn-outline-blue m-1">Konveksi</button>
                  <button type="button" class="btn btn-outline-blue m-1">Tukang Jahit</button>
                  <button type="button" class="btn btn-outline-blue m-1">Kemeja Batik</button>
                  <button type="button" class="btn btn-outline-blue m-1">URL Tailor</button>
                  <button type="button" class="btn btn-outline-blue m-1">Sarimbit</button>
                </div>                
            </div>
            <div class="row">
                <div class="col text-center">
                    <hr class="text-black ">
                    <p>Created by URL Tailor Team &copy 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
      $(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>

    <!-- bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var nav =document.querySelector('nav');
        window.addEventListener('scroll',function () {
            if(window.pageYOffset > 100){
                nav.classList.add('bg-white', 'shadow');
            } else {
                nav.classList.remove('bg-white');
            }
        })
    </script>


    </body>
    </html>