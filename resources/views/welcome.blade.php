<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>  
	<title>URL Tailor</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style type="text/css">
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}} */
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .main{
            position: relative;
            background: url("https://cdn.pixabay.com/photo/2020/08/06/12/28/woman-5467838_1280.jpg");
            min-height: 100vh;
            background-size: cover;
            padding: 200px 0 120px;
            text-shadow: 2px 2px 2px rgba(100, 98, 98, 5);
        }
        .main .container .row .col-sm-12{
            color: rgb(0, 0, 0);
        }
        .main .container .row .col-sm-12 .btn{
            transition: all 0.3s;
        }
        .main .container .row .col-sm-12 .btn:hover{
            transform: scale(1.08);
            background-color: rgb(206, 228, 59);
        }
        .navbar .navbar-nav .nav-link {
            color: black;
            font-size: 13px;
        }
        .navbar .navbar-brand{
            color: black;
            font-size: 30px;
        }
        nav{
            background-color: transparent;
            background-image: linear-gradient(110deg, #CEE43B 0%, #11C0E5 100%);
        }
        .bg-dark {
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
        .col .card{
            transition: all 0.3s;
        } 
        .col .card:hover{
            transform: scale(1.08);
        }
        .collapse .navbar-nav .nav-item .nav-link {
            text-transform: uppercase;
        }
        .collapse .navbar-nav .nav-item .nav-link:hover{
            color: rgb(17, 192, 229);
        }
        .container .row .col-md-4 .card {
            transition: all 0.3s;
        }     
        .inner {
            overflow: hidden;
        }
        .inner img {
            transition: all 1.5s ease;
        }
        .inner:hover img {
            transform: scale(1.4);
        } 
        #tentangkami, #jasakami, #mitrakami{
          padding-top: 4rem;
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
    <body class="antialiased">
    <header>
        <section class="main">
            <div class="container mb-3">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h1 class="text-custom font-weight-bold">Bekerja sama dengan banyak mitra Handal dan Terpercaya</h1>
                        <h2 class="text-custom font-weight-bold">Ingin menjadi Mitra Kami?</h2>
                        <a href="#"><button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar Sekarang</button></a>
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
                    <a class="nav-link mt-1" href="{{url('/profil')}}"><strong>Profil</strong></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mt-1" href="#jasakami"><strong>Jasa Kami</strong></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mt-1" href="#tentangkami"><strong>Tentang Kami</strong></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mt-1" href="#mitrakami"><strong>Mitra Kami</strong></a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li>    
                                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="btn btn-dark mt-1 ms-2 me-2">Login</button></a>
                            </li>

                            @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="btn btn-outline-dark mt-1">Register</button></a>
                            </li>
                            @endif
                    @endauth
            @endif

                </ul>
            </div>
        </div>
    </nav>

    <section class="tentangkami" id="tentangkami">
        <div class="container mt-5">
          <div class="row mt-5">
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
                    <img src="https://images.pexels.com/photos/8387825/pexels-photo-8387825.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="baju" class="d-block" style="width:100%">
                    <div class="carousel-caption"></div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/3984866/pexels-photo-3984866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Cewe" class="d-block" style="width:100%">
                    <div class="carousel-caption"></div> 
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/3984872/pexels-photo-3984872.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="bule" class="d-block" style="width:100%">
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
                <p>Seiring dengan perkembangan teknologi dan tren mode yang terus berubah, tukang jahit juga perlu mengikuti perkembangan terbaru dan selalu meningkatkan keterampilan mereka. Oleh karena itu, pelatihan dan kursus dalam bidang fashion dan jahit-menjahit juga tersedia untuk membantu mereka meningkatkan keterampilan mereka dan tetap up-to-date dengan tren mode terbaru.</p>
                <p>URL TAILOR, menyediakan jasa layanan menjahit baju dengan kualitas utama, kami sanggup untuk memenuhi permintaan jasa menjahit dalam skala kecil maupun besar. dengan bekerja sama dengan para mitra yang memiliki keterampilan dan pengetahuan dalam mengoperasikan mesin jahit, mengukur dan memotong kain, memilih pola dan bahan, serta merancang dan membuat desain pakaian. Kemampuan untuk membaca pola dan memiliki keterampilan tangan yang baik</p>
            </div>
        </div>
      </section>
    
    <section class="jasakami" id="jasakami">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <h1 class="text-center mt-3 mb-3">Jasa Kami</h1>
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img src="https://idalamat.com/images/addresses/9874312-etis-tailor-purwakarta-jawa-barat.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Jasa Jahit & Permak</h5>
                            <p class="card-text">Layanan Home Service untuk Jahit & Permak pakaian ke lokasi anda oleh Mitra Jahit Terampil. Diukur langsung saat penjemputan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img src="https://orca-photo.shopback.co.id/oXU5sJFFBJ4XOG3s_uGz8xe0a2zpcyipO0ocYC52a6s/resize:fill:292:292:1/gravity:no/aHR0cHM6Ly9pZC1s/aXZlLnNsYXRpYy5u/ZXQvcC9jODkzNTUw/MWMxY2E0MjYzODRl/N2M4ZmRhY2E5NWJj/Mi5qcGc.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Jasa pembuatan seragam</h5>
                            <p class="card-text">Solusi kebutuhan pembuatan seragam mulai dari Jahit Kaos, Jersey, Kemeja, Jaket, hingga Print Sablon tanpa minimum order</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;">
                        <div class="inner">
                            <img src="https://assets.kompasiana.com/items/album/2020/09/26/0c092353193f80f5958c5a1fe4269107-5f6e867ad541df0899417e47.jpg?t=o&v=400" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title">Jahit Tailor-Made</h5>
                          <p class="card-text">Punya desain atau referensi? Pesan Layanan Jahit Baru pakaian dikerjakan oleh Mitra Tailor yang handal dan terpercaya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mitrakami">
        <div class="container mb-3 mt-3" >
            <h2 class="text-center">Mitra URL Tailor</h2>
            <div class="row mt-5 mb-5">
                <div class="col-4">
                    <a href="{{url('/profrumahjahit')}}"><img src="https://www.pixelbuck.com/wp-content/uploads/2014/02/logo-rumah-jahit.png" alt="Mitra Logo Rumah Jahit" style="width: 100%"></a>
                </div>
                <div class="col-4">
                    <a href={{url('/profstar')}}><img src="data:image/jpeg;base64,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" alt="Mitra Logo Rumah Jahit" style="width: 100%"></a>
                </div>
                <div class="col-4">
                    <a href={{url('/proftailor')}}><img src="https://th.bing.com/th/id/R.2867016fcd96f8338cbce8ecb5eb7844?rik=%2bcI1LJqklXqaaA&riu=http%3a%2f%2finnovationm.co%2fwp-content%2fuploads%2f2017%2f06%2f18ae2e06-5b3b-11e5-9b37-72a3e9621b9c.png&ehk=pzQDRzg3w9laN7vV53dynWrr%2fMD0QGGoDv6q%2fDQzxIo%3d&risl=&pid=ImgRaw&r=0" alt="Mitra Logo Rumah Jahit" style="width: 100%"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="kenapakami" id="kenapakami">
        <div class="container mb-5">
            <div class="row text-center mb-3 mt-3">
                <div class="col">
                    <h2>Kenapa Memilih Kami?</h2>
                </div>
            </div>
             
            <div class="row">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <img src='https://www.shareicon.net/data/2016/01/05/698562_award_512x512.png' style="width: 10%;" alt='justURL'/>
                                <h5 class="card-title mb-3 mt-3">Produk Berkualitas</h5>
                                <p class="card-text">Kami menggunakan bahan-bahan berkualitas tinggi untuk setiap produk yang kami hasilkan. Bahan-bahan tersebut dipilih dengan hati-hati untuk memastikan kualitas terbaik dan memberikan kenyamanan serta tahan lama pada produk yang kami buat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <img src='https://th.bing.com/th/id/R.cd004e253cbab5dec5752f9f4280bcc6?rik=zjhnMesLpgMI6A&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_380402.png&ehk=xxkVjLB949jkp73zsrvap3zynFJ7CvKEqzc6tC7VsRQ%3d&risl=&pid=ImgRaw&r=0' style="width: 10%;" alt='justURL'/>
                                <h5 class="card-title mb-3 mt-3">Tepat Waktu</h5>
                                <p class="card-text">Kami berkomitmen untuk memberikan layanan penjahitan yang tepat waktu. Dengan tim yang terlatih dengan baik, serta sistem manajemen produksi yang efisien untuk memastikan bahwa setiap proyek penjahitan selesai sesuai dengan jadwal yang telah ditentukan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <img src='https://th.bing.com/th/id/R.98e175dd390b0b59bc52de0dcbe6fc8c?rik=KqRmgqLK54p7jA&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_61865.png&ehk=CAntr01CmLYN4kiiV63fiXsxFs7NrRo7x6fQrDdK%2frA%3d&risl=&pid=ImgRaw&r=0' style="width: 10%;" alt='justURL'/>
                                <h5 class="card-title mb-3 mt-3">Harga Kompetitif</h5>
                                <p class="card-text">Kami menawarkan harga yang kompetitif untuk produk dan layanan kami. Kami berkomitmen untuk memberikan nilai terbaik bagi pelanggan kami tanpa mengorbankan kualitas produk yang kami hasilkan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <img src='https://webstockreview.net/images/donation-clipart-hand-heart-8.png' style="width: 10%;" alt='justURL'/>
                                <h5 class="card-title mb-3 mt-3">Pelayanan Terbaik</h5>
                                <p class="card-text">Kami akan membantu Anda dalam setiap tahap produksi, mulai dari konsultasi desain, pemilihan bahan, hingga pengiriman produk akhir. Kami akan berusaha untuk memastikan Anda puas dengan layanan kami.</p>
                            </div>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pendaftaran</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                      <label for="Masukkan Nama Perusahaan" class="form-label">Nama Perusahaan</label>
                      <input type="nama" class="form-control" id="nama" aria-describedby="nama">
                    </div>
                    <div class="mb-3">
                      <label for="Masukkan Email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                      <label for="Masukkan Nomor Telepon" class="form-label">Nomor Telepon</label>
                      <input type="nomor" class="form-control" id="nomor">
                    </div>
                    <div class="mb-3">
                        <label for="Lampirkan Portofolio Perusahaan" class="form-label">Portofolio Perusahaan</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            </div>
        </div>
    </div>

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
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark');
            }
        })
    </script>


        <!-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div> -->
    </body>
</html>
