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
            @isset($datalembaga)
              @foreach($datalembaga as $row)
                <li class="nav-item mx-3 dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{$row->lembaga_nama}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($datamenu as $row2)
                      @if($row->id == $row2->id_lembaga)
                        <li><a class="dropdown-item" href="{{ url('menu',$row2->id) }}">{{$row2->menu_judul}}</a></li>
                        <!-- <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Alumni</a></li> -->
                      @endif
                    @endforeach
                  </ul>
                </li>
              @endforeach
            @endisset
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="#">About</a>
            </li>
            @guest @else @if(Auth::User()->level_id == 1)
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="{{url('dashboard')}}">Halaman Admin</a>
            </li>
            @endif @endguest
          </ul>
        </div>
        @guest
          <a  href="{{ route('login') }}" class="btn btn-primer">Log In</a>
        @else
          <a  href="{{ route('logout') }}"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"class="btn btn-primer">Log Out</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        @endguest
        </div>
    </nav>

    {{-- FullPage --}}
    <div class="container-fluid" style="background-color: #CDEEC8;">
    <div style="padding: 0; padding-top: 40px; background-color: #CDEEC8;" class="container mt-7">
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
    <div class="container-fluid" style="background-color: white; padding-top: 70px; padding-bottom: 100px;">
      <div class="container py-2 pb-5">
        <div class="row">
          <h1 class="display-3 fontJumbotron text-center pb-5">
            Berita Terkini
          </h1>
          <div class="col-12">
            <div class="splide">
              <div class="splide__track pb-5">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <div class="card">
                      <img class="card-img-top" style="" src="{{asset('storage/img/homepage 1.jpg')}}" class="d-block mx-auto h-1" alt="{{asset('storage/img/homepage.jpg')}}">
                      <div class="card-footer text-center py-3">
                        <span class="fontUpJumbotron text-center">PPDB 2021</span>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="card">
                      <img class="card-img-top" style="" src="{{asset('storage/img/homepage 2.jpg')}}" class="d-block mx-auto h-1" alt="{{asset('storage/img/homepage.jpg')}}">
                      <div class="card-footer text-center py-3">
                        <span class="fontUpJumbotron text-center">PPDB 2021</span>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="card">
                      <img class="card-img-top" style="" src="{{asset('storage/img/homepage 3.jpg')}}" class="d-block mx-auto h-1" alt="{{asset('storage/img/homepage.jpg')}}">
                      <div class="card-footer text-center py-3">
                        <span class="fontUpJumbotron text-center">PPDB 2021</span>
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
    <div class="container-fluid" style="background-color: #C4C4C4; padding-top: 100px; padding-bottom: 100px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-12">
            <h1 class="display-3 fontJumbotron">Program Kami</h1>
          </div>
          <div class="col-lg-8 col-12">
            <div class="splide2">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <div class="card border-0" onclick="location.href='newurl.html';">
                      <img class="card-img-top" style="" src="{{asset('storage/img/homepage 1.jpg')}}"alt="{{asset('storage/img/homepage.jpg')}}">
                      <div class="card-footer text-center py-3">
                        <span class="fontUpJumbotron">PPDB 2021</span>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="card border-0" onclick="location.href='newurl.html';">
                      <img class="card-img-top" style="" src="{{asset('storage/img/homepage 2.jpg')}}"alt="{{asset('storage/img/homepage.jpg')}}">
                      <div class="card-footer text-center py-3">
                        <span class="fontUpJumbotron">PPDB 2021</span>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="card border-0" onclick="location.href='newurl.html';">
                      <img class="card-img-top" style="" src="{{asset('storage/img/homepage 3.jpg')}}"alt="{{asset('storage/img/homepage.jpg')}}">
                      <div class="card-footer text-center py-3">
                        <span class="fontUpJumbotron">PPDB 2021</span>
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

    {{-- Kata Mereka --}}
    <div class="container-fluid pt-3 pb-5 " style="background-color: #CDEEC8;">
      <h1 class="fontJumbotron display-3 text-center my-5 py-5">Kata mereka</h1>
      <div class="col-12 pb-5 mb-5">
        <div class="splide3">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4 align-self-center">
                        <div class="avatar rounded-2 text-center" href="javascript:void(0)">
                          <img class="rounded-2 text-center" height="100px" src="{{asset('storage/img/logo.png') }}" alt="Card image cap">
                        </div>
                      </div>
                      <div class="col-8 align-self-center">
                        <p class="fontJumbotronUp text-center fontUpJumbotron">Pendidikan dengan kualitas terbaik.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center py-3">
                    <span class="fontNameTesti">Rizal Ammar - AMC</span>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4 align-self-center">
                        <div class="avatar rounded-2 text-center" href="javascript:void(0)">
                          <img class="rounded-2 text-center" height="100px" src="{{asset('storage/img/logo.png') }}" alt="Card image cap">
                        </div>
                      </div>
                      <div class="col-8 align-self-center">
                        <p class="fontJumbotronUp text-center fontUpJumbotron">Pendidikan dengan kualitas terbaik.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center py-3">
                    <span class="fontNameTesti">Rizal Ammar - AMC</span>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4 align-self-center">
                        <div class="avatar rounded-2 text-center" href="javascript:void(0)">
                          <img class="rounded-2 text-center" height="100px" src="{{asset('storage/img/logo.png') }}" alt="Card image cap">
                        </div>
                      </div>
                      <div class="col-8 align-self-center">
                        <p class="fontJumbotronUp text-center fontUpJumbotron">Pendidikan dengan kualitas terbaik.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center py-3">
                    <span class="fontNameTesti">Rizal Ammar - AMC</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    {{-- footer --}}
    <div class="container-fluid py-5" style="background-color: #C4C4C4;">

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
          var splide2 = new Splide( '.splide2', {
            type   : 'loop',
            gap: 20,
            padding: '5rem',
            perPage: 1,
            focus: 'center'
          } );
          splide2.mount();
          var splide3 = new Splide( '.splide3', {
            type   : 'loop',
            padding: '23rem',
            gap: 50,
            perPage: 1,
            focus: 'center',
            drag: 'free',
          } );
          splide3.mount();
        } );
    </script>
  </body>
</html>

