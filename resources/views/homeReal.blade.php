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

    {{-- pagepilling.css --}}
    <link rel="stylesheet" href="{{asset('css/jquery.pagepiling.css')}}">
    
    {{-- skippr.css --}}
    <link rel="stylesheet" href="{{asset('css/skippr.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    
    <title>Pondok Pesantren Bahrul Ulum - Homepage</title>
  </head>
  <body>

    {{-- Navbar --}}
    <nav style="z-index: 99; padding:4px" class="fontNavbar navbar navbar-expand-lg navbar-light bg-light">
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
    <div id="pagepiling">
      <div style="margin-top: -38px" class="section">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="z-index: 99">
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
      <div class="section">Some section</div>
      <div class="section">Some section</div>
      <div class="section">Some section</div>
    </div>
    
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
    <!-- skippr.js -->
    <script src="{{asset('js/skippr.js')}}" ></script>

    <script>
      $(document).ready(function() {
        $('#pagepiling').pagepiling({
          easing: 'linear',
          animateAnchor: false
        });
      });
      $(document).ready(function(){
      });    
    </script>
  </body>
</html>

