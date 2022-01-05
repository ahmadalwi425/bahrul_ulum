<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- My File --}}
    <link rel="stylesheet" href="{{asset('css/BuHomepage.css')}}">
    

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">

    {{-- splide --}}
    <link rel="stylesheet" href="{{asset('css/splide.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/splide-core.min.css')}}">

    {{-- pagepilling.css
    <link rel="stylesheet" href="{{asset('css/jquery.pagepiling.css')}}">
    
    {{-- skippr.css --}}
    {{-- <link rel="stylesheet" href="{{asset('css/skippr.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">  --}}
    
    <title>Pondok Pesantren Bahrul Ulum - Homepage</title>
  </head>
  <body>

    {{-- Navbar --}}
    <nav style="z-index: 99; padding:4px" class="fontNavbar navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#">
          <img src="{{asset('storage/img/logo.png')}}" alt="" height="50">    
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-3 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                TK
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Alumni</a></li>
              </ul>
            </li>
            <li class="nav-item mx-3 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SMP
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Alumni</a></li>
              </ul>
            </li>
            <li class="nav-item mx-3 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SMA
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Visi Misi</a></li>
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Alumni</a></li>
              </ul>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="#">About</a>
            </li>
          </ul>
        </div>
        <button class="btn btn-primer">Login</button>
      </div>
    </nav>

    {{-- FullPage --}}
    <div style="padding: 0; padding-top: 40px" class="container-fluid mt-7">
        <div class="col-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid" style="max-height: 50%" src="{{asset('storage/img/homepage 1.jpg')}}" class="d-block mx-auto h-1" alt="{{asset('storage/img/homepage.jpg')}}">
              </div>
              <div class="carousel-item">
                <img src="{{asset('storage/img/homepage 2.jpg')}}" class="d-block w-100" alt="{{asset('storage/img/homepage 2.jpg')}}">
              </div>
              <div class="carousel-item">
                <img src="{{asset('storage/img/homepage 3.jpg')}}" class="d-block w-100" alt="{{asset('storage/img/homepage 3.jpg')}}">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>

    {{-- About --}}
    <div class="container-fluid" style="background-color: #CDEEC8; padding-top: 100px; padding-bottom: 100px;">
      <div class="container py-5">
        <div class="row">
        <div class="col-12">
          <p class="display-6 fontUpJumbotron p-0 m-0">Selamat Datang di</p>
          <h1 class="display-3 p-0 m-0 fontJumbotron">Yayasan Bahrul Ulum</h1>
        </div>
        <div class="col-5"></div>
        <div class="col-7 pt-5 align-self-end">
          <p class="fontNavbar text-end">
            Yayasan Pondok Pesantren Bahrul Ulum merupakan yayasan yang bergerak di bidang pendidikan islam dengan dasar pondok pesantren. Yayasan ini telah memiliki jenjang pendidikan TK, SMP, SMA serta Pondok Pesantren.
          </p>
        </div>
        </div>
      </div>
    </div>

    {{-- Berita --}}
    <div class="container-fluid" style="background-color: white; padding-top: 100px; padding-bottom: 100px;">
      <div class="container py-2 pb-5">
        <div class="row">
          <h1 class="display-3 fontJumbotron text-center">
            Berita Terkini
          </h1>
          <div class="col-12">
            <div class="splide">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">\
                    <div class="card">
                      <div class="card-body">
                        <img class="img-fluid" style="" src="{{asset('storage/img/homepage 1.jpg')}}" class="d-block mx-auto h-1" alt="{{asset('storage/img/homepage.jpg')}}">
                      </div>
                      <div class="card-footer">
                        <p class="fontUpJumbotron text-center">PPDB 2021</p>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">\
                    <div class="card">
                      <div class="card-body">
                        <img class="img-fluid" style="" src="{{asset('storage/img/homepage 1.jpg')}}" class="d-block mx-auto h-1" alt="{{asset('storage/img/homepage.jpg')}}">
                      </div>
                      <div class="card-footer">
                        <p class="fontUpJumbotron text-center">PPDB 2021</p>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">\
                    <div class="card">
                      <div class="card-body">
                        <img class="img-fluid" style="" src="{{asset('storage/img/homepage 1.jpg')}}" class="d-block mx-auto h-1" alt="{{asset('storage/img/homepage.jpg')}}">
                      </div>
                      <div class="card-footer">
                        <p class="fontUpJumbotron text-center">PPDB 2021</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Program Kami --}}
    <div class="container-fluid" style="background-color: #C4C4C4; padding-top: 100px; padding-bottom: 100px;"></div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!-- jquery -->
    <script src="{{asset('js/jquery.js')}}" ></script>
    <!-- fullPage.js -->
    <script src="{{asset('js/jquery.pagepiling.js')}}" ></script>
    {{-- splide --}}
    <script src="{{asset('js/splide.js')}}" ></script>

    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
          var splide = new Splide( '.splide', {
            type   : 'loop',
            gap: 20,
            perPage: 3,
            focus: 'center',
            drag: 'free',
            autoplay: true
          } );
          splide.mount();
        } );
    </script>
  </body>
</html>

