<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>  
    <title>Starship</title>
    <style type="text/css">
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .main{
            position: relative;
            background: url("https://apahabar.s3.ap-southeast-1.amazonaws.com/storage/20221025/181411-desainer-webp-large.jpg");
            min-height: 50vh;
            background-size: cover;
            padding: 150px 0 200px;
        }
        .main .container .row .col-sm-12{
            color: rgb(17, 192, 229);
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
            font-size: 14px
        }
        .navbar .navbar-brand{
            color: black;
            font-size: 30px;
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
        footer .container .row .col-sm-3 .btn-outline-blue {
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
        }
        .content {
            padding: 10%;
        }
        .content h2 {
            /* font-size: 30px; */
            /* text-transform: uppercase; */
            margin-bottom: 15px;
        }
        .content p {
            line-height: 1.5;
        }
        .main-content {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-row-gap: 25px;
            grid-column-gap: 25px;
        }
        .main-content .box {
            position: relative;
            cursor: pointer;
            margin-bottom: 15px;
            box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
            height: 250px;
            overflow: hidden;
        }
        .main-content .box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            transition: all 0.9s ease-in-out;
        }
        .main-content .box:hover::before {
            top: 0;
            right: calc(100% - 5px);
            z-index: 8;
        }
        .main-content .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .main-content .box .img-text {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.9);
            width: 100%;
            height: 100%;
            top: 0;
            right: 100%;
            transition: all 0.7s ease-in-out;
        }
        .main-content  .box:hover .img-text {
            top: 0;
            right: 0;
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
                        <p class="font-weight-bold text-center">Star Tailoring</p>
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
                    <a class="nav-link" href="#tentangkami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#layanan">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#langkah">Langkah Pengerjaan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="tentangkami" id="tentangkami">
        <div class="container mt-5">
          <div class="row mt-3">
            <h1 class="text-center mt-5 mb-5">Tentang Kami</h1>
            <div class="col-md-6";>
              <!-- Carousel -->
              <div id="demo" class="carousel slide" data-bs-ride="carousel">
              
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://fitinline.com/data/article/20190717/Belajar-Desain-Fashion-001.jpg" alt="baju" class="d-block" style="width:100%">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://fitinline.com/data/article/20171018/Membuat-Desain-Baju-005.jpg" alt="Cewe" class="d-block" style="width:100%">
                    <div class="carousel-caption"></div> 
                  </div>
                  <div class="carousel-item">
                    <img src="https://fitinline.com/data/article/20190717/Belajar-Desain-Fashion-004.jpg" alt="bule" class="d-block" style="width:100%">
                    <div class="carousel-caption"></div>  
                  </div>
                </div>
                
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
            </div>
            <div class="col-md-6">    
                <p>Starship adalah sebuah toko spesialis dalam merancang dan membuat pakaian.Starship memiliki tim desainer dan penjahit yang ahli dalam membuat pakaian dengan kualitas terbaik dan desain yang menarik. dan menawarkan jasa desain pakaian dari awal hingga selesai, atau menerima pesanan untuk mengubah atau memodifikasi pakaian yang sudah ada.</p>
                <p> Starship juga menyediakan berbagai jenis pakaian, seperti pakaian formal, pakaian kasual, busana pesta, gaun pengantin, dan lain-lain. Mereka juga dapat menawarkan jasa pembuatan pakaian kustom, di mana pelanggan dapat memilih jenis kain, desain, dan ukuran pakaian sesuai dengan keinginan mereka.</p>
                <p>Kualitas, kreativitas, dan kepuasan pelanggan adalah kunci kesuksesan bagi toko kami. Oleh karena itu, toko kami selalu mengikuti tren terbaru dalam dunia fashion, menggunakan bahan-bahan berkualitas tinggi, dan memberikan pelayanan terbaik kepada pelanggan</p>
            </div>
        </div>
        </div>
    </section>


    <section class="layanan" id="layanan">
        <div class="container mt-3">
            <div class="row text-center mb-3 mt-3">
                <div class="col-md-12 mb-5 mt-5">
                    <h2>Layanan Kami</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="wrapper">                        
                        <div class="main-content">
                            <div class="box">
                                <img src="https://i.pinimg.com/originals/e6/01/60/e601607f96ee52f44f04f0ed48f373c0.jpg" class="card-img-top" alt="...">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Desain Blouse Wanita</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="col-md-4">
                    <div class="wrapper">                        
                        <div class="main-content">
                            <div class="box">
                                <img src="https://images.unsplash.com/photo-1607345366928-199ea26cfe3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8c2hpcnR8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Desain  Kemeja (Pria & Wanita)</h3>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">                        
                        <div class="main-content">
                            <div class="box">
                                <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGFudHN8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Desain Celana (Pria & Wanita)</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">                        
                        <div class="main-content">
                            <div class="box">
                                <img src="https://i.pinimg.com/originals/c1/2d/ee/c12dee6cbec5d0ec3f3ae7e4b7fdaa60.jpg" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Desain  Gamis & Abaya</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">                        
                        <div class="main-content">
                            <div class="box">
                                <img src="https://images.unsplash.com/photo-1622470953794-aa9c70b0fb9d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Desain  Kaos Oblong</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">                        
                        <div class="main-content">
                            <div class="box">
                                <img src="data:image/jpeg;base64,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" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Desain Baju tidur (piyama dan daster)</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">                        
                        <div class="main-content">
                            <div class="box">
                                <img src="https://lh6.googleusercontent.com/D3PwFYQjP_ouREYuMuf0ZB0sR9Esz4C40JYNXqNYK_18a5p6zbVG0XnsWz6vPA8kUztnrQKUvNJ13cixe_8HQrdPGwkAxKzW2GdKuTYOnfGjFp8SxgtTEh1_v71yLd12v9FqzRSJSDWtH1lx5A" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Desain Jacket Bomber</h3>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrapper">                        
                        <div class="main-content">
                            <div class="box">
                                <img src="https://girlisme.com/wp-content/uploads/2020/03/model-baju-pesta-27.png" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Kebutuhan Fashion show</h3>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section class="langkah" id="langkah">
        <div class="container mt-5">
          <div class="row mt-1">
            <h1 class="text-left mt-3 mb-3">Langkah Pengerjaan</h1>
            <div class="col-md-6";>
             <ul>
                <li>
                    Meeting dan feeting
                </li>
                <li>
                    Pembuatan Desain
                </li>
                <li>
                    ACC Desain
                </li>
                <li>
                    Revisi (jika ada)
                </li>
                <li>
                    Grading Size
                </li>
                <li>
                  Pembuatan Sample (Jika Ada)
                <li>
                    ACC Sample (Jika Ada)
                </li>
                <li>
                    Revisi (Jika Ada)
                </li>
                <li>
                    Packing Desain dan Sample (Jika Ada)
                </li>
                <li>
                    Shipping ke Buyer
                </li>
                <li>
                    After Sales Service
                </li>
             </ul>
            </div>
          </div>
        </div>
        </div>
      </section>

      <section class="testimoni" id="testimoni">
        <div class="container">
            <div class="row text-center mb-3 mt-3">
                <div class="col">
                    <h2>Testimoni</h2>
                </div>
            </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow">                  
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Ulan Juniarti</h5>
                        <p class="card-text">"Layanan jasa jahit ini benar-benar mengagumkan! Mereka sangat fleksibel dan dapat memenuhi permintaan saya untuk jahit dalam waktu yang sangat singkat. Pakaian yang saya pesan terlihat sempurna dan pas di badan saya. Terima kasih banyak!"</p>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body text-center">                  
                        <h5 class="card-title mb-5">Lutviana</h5>
                        <p class="card-text">"Saya sangat puas dengan jasa jahit yang diberikan oleh tim ini. Mereka sangat sabar dan teliti dalam membantu saya mendesain dan membuat pakaian yang saya inginkan. Saya akan menggunakan layanan mereka lagi di masa depan."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-5">Ariefah Khairina Islahati</h5>
                        <p class="card-text">"Saya sangat senang dengan layanan jasa jahit ini. Mereka sangat profesional dalam melakukan pekerjaan mereka dan hasil jahitannya sangat rapi dan berkualitas tinggi. Saya pasti akan merekomendasikan layanan ini kepada teman-teman saya."</p>
                    </div>
                </div>
            </div>            
        </div>
    </section> 

      <section>
        <div class="whatsapp-float">
          <a href="https://api.whatsapp.com/send?phone=6287773705521" target="_blank" data-toggle="tooltip" data-bs-placement="left" title="Butuh Bantuan?"><img src="https://2.bp.blogspot.com/-QfS1hyElLFk/XDdD551JV7I/AAAAAAAAGu0/ZwfoMBwMoiUAzSCHhP4QvHn_KyjaeecWQCK4BGAYYCw/s1600/logo%2Bwhatsapp.png" alt="Hubungi saya via WhatsApp" class="whatsapp-logo"></a>
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