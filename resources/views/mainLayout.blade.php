<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pondok Pesantren Bahrul Ulum Tajinan - Home" />
    <meta name="robots" content="Bahrul Ulum, Bahrul Ulum Tajinan, " />
    <meta name="author" content="SantriNgoding">
    <link rel="icon" href="{{asset('storage/img/logo.png')}}" type="image/png">

    {{-- My File --}}
    <link rel="stylesheet" href="{{asset('css/BuHomepage.css')}}">
    

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">

    {{-- Carousel --}}

    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}"/>

    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cuttr/1.3.2/cuttr.min.js"></script>
    
    <script>
        new Cuttr('.selector', {
          length: 3,
          ending: '...'
        });
    </script>

    <title>Pondok Pesantren Bahrul Ulum - Homepage</title>
  </head>
  <body>

    {{-- Navbar --}}
    <nav style="z-index: 99; padding:4px" class="fontNavbar navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#">
          <img loading="lazy" src="{{asset('storage/img/logo.png')}}" alt="" height="50">    
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="{{url('')}}">Beranda</a>
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
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pendaftaran</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @isset($datalembaga)
                @foreach($datalembaga as $row)
                <li><a class="dropdown-item" href="{{url('registrasi/'. $row->id)}}">Pendaftaran {{$row->lembaga_nama}}</a></li>
                @endforeach
                @endisset
              </ul>
            </li>
            @guest @else @if(Auth::User()->level_id == 1)
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="{{url('dashboard')}}">Halaman Admin</a>
            </li>
            
            @endif @endguest
          </ul>
        </div>
        @guest
          <a  href="{{ route('login') }}" class="btn btn-primer">Login</a>
        @else
          <a  href="{{ route('logout') }}"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"class="btn btn-primer">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        @endguest
        </div>
    </nav>

@yield('content')


    {{-- footer --}}
    <div class="container-fluid py-5" style="background-color: #C4C4C4;">
        <div class="row align-items-center">
          <div class="col-lg-5 col-12 px-3">
            <div class="row justifiy-content-center align-items-center">
              <div class="col align-items-center text-center">
                <img loading="lazy" src="{{asset('storage/img/logo.png')}}" height="80px" alt="" class="rounded-2 avatar col-lg">
                <span class="col-lg col-12 px-3 fontBrandFooter">Pondok Pesantren Bahrul Ulum</span>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-12 px-3 py-lg-1 py-5">
            <div class="row justify-content-center">
              <col-12 class="text-lg-start text-center my-1"><a class="fontNavFooter" href="{{url('feedback')}}">Ulasan tentang kami</a></col-12>
            </div>
          </div>
          <div class="col-lg-5 col-12 px-3">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="row my-2 justify-content-center">
                  <div class="col text-center">
                    <a href="https://www.instagram.com/gemabahrululumtjn/" style="text-decoration: none;"><span class="text-start"><span class="iconify iconFooter text-center d-inline-block mx-2" data-icon="ant-design:instagram-filled"></span><span class="fontSosmedFooter">@gemabahrululumtjn</span></span></a>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="row my-2">
                  <div class="col text-center">
                  <a href="https://web.facebook.com/bahrululumtajinan" style="text-decoration: none;"><span class="text-start"><span class="iconify iconFooter text-center d-inline-block mx-2" data-icon="dashicons:facebook"></span><span class="fontSosmedFooter">@bahrululumtajinan</span></span></a>
                </div>
                </div>
              </div>
              <div class="col-12">
                <div class="row my-2">
                  <div class="col text-center">
                  <a href="https://twitter.com/mabutama" style="text-decoration: none;"><span class="text-start"><span class="iconify iconFooter text-center d-inline-block mx-2" data-icon="fa-brands:twitter-square"></span><span class="fontSosmedFooter">@mabutama</span></span></a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
      {{-- swiper --}}
      <script src="{{asset('js/owl.carousel.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <!-- fullPage.js -->
      {{-- <script src="{{asset('js/jquery.pagepiling.js')}}" ></script> --}}
      {{-- splide --}}
      {{-- <script src="{{asset('js/splide.js')}}" ></script> --}}
      {{-- iconify --}}
      <script src="{{asset('js/iconify.min.js')}}"></script>
      
      <script src="{{asset('js/all.js')}}"></script>
      
  
      <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
  
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-3Y7HCNLNGY"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
  
        gtag('config', 'G-3Y7HCNLNGY');
      </script>
  
      
      <script>
          @if(session()->has('modal'))
            $("#emailSentModal").modal("toggle");
  
          @endif
      </script>
  
  @yield('script')
      
    </body>
  </html>