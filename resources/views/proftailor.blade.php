<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>  
	<title>Tailor</title>
    <style type="text/css">
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .main{
            position: relative;
            background: url("https://cdn.pixabay.com/photo/2016/11/22/19/08/hangers-1850082_1280.jpg");
            min-height: 50vh;
            background-size: cover;
            padding: 150px 0 200px;
        }
        .main .container .row .col-sm-12{
            text-transform: uppercase;
            color: rgb(255, 119, 0);
            text-shadow: 2px 2px 2px rgba(100, 98, 98, 5);
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
        #tentangkami, #langkah, #layanan, #testimoni{
          margin-top: 5rem;
          /* margin-bottom: 5rem; */
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
                        <p class="font-weight-bold text-center">Tailor</p>
                    </div>
                </div>                
            </div>
        </section> 
    </header>

    <nav class="navbar navbar-expand-lg bg-light bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="https://i.postimg.cc/2yCJHCR2/logo.png" width="16%" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto" style="font-size: 15px; font-family: sans-serif;">
                    <li class="nav-item"><a class="nav-link" href="{{url('/welcome')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentangkami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#langkah">Langkah Pengerjaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="tentangkami" id="tentangkami">
        <div class="container mt-3">
          <div class="row mb-3 mt-3">
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
                    <img src="https://cdn.pixabay.com/photo/2015/08/25/11/50/shop-906722__480.jpg" alt="baju" class="d-block" style="width:100%">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2017/06/21/20/51/tshirt-2428521_1280.jpg" alt="Kain" class="d-block" style="width:100%">
                    <div class="carousel-caption"></div> 
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2020/03/26/17/22/corona-4971090__480.jpg" alt="mesin" class="d-block" style="width:100%">
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
                <p>Tailor adalah perusahaan yang bergerak di bidang jasa jahit dan permak. Kami menawarkan berbagai layanan seperti penyesuaian ukuran, perbaikan pakaian, modifikasi pakaian, pembuatan pakaian baru, dan pembersihan serta pemeliharaan pakaian. Dengan kualitas jahitan yang baik dan pelayanan yang memuaskan, Tailor berkomitmen untuk memenuhi kebutuhan pelanggan dalam hal pakaian yang tepat ukuran, nyaman dan sesuai dengan gaya dan selera mereka.</p>
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
                                <img src="https://plus.unsplash.com/premium_photo-1658506943767-4cdc681e7fbf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Penyesuaian Ukuran</h3>
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
                                <img src="https://cdn.pixabay.com/photo/2016/09/01/18/43/pants-1637097__480.jpg" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Perbaikan Pakaian</h3>
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
                                <img src="https://cdn.pixabay.com/photo/2018/09/24/02/17/sewing-3698994__480.jpg" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Penambahan Detail</h3>
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
                                <img src="https://cdn.pixabay.com/photo/2015/02/10/11/12/binding-630909_1280.jpg" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Modifikasi Pakaian</h3>
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
                                <img src="https://cdn.pixabay.com/photo/2018/09/24/02/17/sewing-3698996_1280.jpg" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Pembuatan Pakaian Baru</h3>
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
                                <img src="https://cdn.pixabay.com/photo/2014/07/31/00/30/laundry-405878__480.jpg" alt="">
                                <div class="img-text">
                                    <div class="content">
                                        <h3 class="text-center">Pembersihan dan Pemeliharaan Pakaian</h3>
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
        <div class="container mt-3">
          <div class="row mt-1">
            <h1 class="text-left mt-3 mb-3">Langkah Pengerjaan</h1>
            <div class="col-md-12";>
             <ul>
                <li><strong>Konsultasi dengan Pelanggan</strong>: Langkah awal dalam pengerjaan jasa jahit dan permak adalah berbicara dengan pelanggan untuk memahami kebutuhan mereka dan menentukan jenis layanan yang dibutuhkan.</li>
                <li><strong>Pengukuran</strong>: Setelah mengetahui kebutuhan pelanggan, langkah selanjutnya adalah pengukuran tubuh pelanggan untuk menyesuaikan ukuran pakaian.</li>
                <li><strong>Desain atau Modifikasi</strong>: Jika diperlukan, pelanggan dapat meminta desain atau modifikasi pakaian yang sesuai dengan keinginan mereka.</li>
                <li><strong>Pemotongan Kain</strong>: Setelah desain atau modifikasi ditentukan, kain dipotong sesuai dengan pola yang telah dibuat.</li>
                <li><strong>Penjahitan</strong>: Setelah potongan kain siap, proses penjahitan dimulai. Jahitan diatur sedemikian rupa sehingga pakaian dapat disesuaikan dengan ukuran dan bentuk tubuh pelanggan.</li>
                <li><strong>Penyelesaian Detail</strong>: Setelah penjahitan selesai, beberapa detail seperti kancing, resleting, dan aksesori lainnya ditambahkan untuk menyelesaikan tampilan pakaian.</li>
                <li><strong>Fitting</strong>: Setelah pakaian selesai dibuat, fitting dilakukan untuk memastikan bahwa pakaian telah disesuaikan dengan ukuran dan bentuk tubuh pelanggan.</li>
                <li><strong>Finishing</strong>: Langkah terakhir adalah finishing, di mana pakaian dicuci, disetrika, dan dilakukan pemeriksaan akhir sebelum diserahkan kepada pelanggan.</li>
             </ul>
            </div>
          </div>
        </div>
        </div>
      </section>
    
      <section class="testimoni" id="testimoni">
        <div class="container">
            <div class="row text-center mt-3">
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