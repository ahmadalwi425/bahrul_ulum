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
              <a class="nav-link" aria-current="page" href="{{url('')}}">Home</a>
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
              <a class="nav-link" aria-current="page" href="{{url('/registrasi')}}">Pendaftaran</a>
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

    {{-- Menu --}}
    <div class="container-fluid mt-5 py-5" style="background-color: #CDEEC8; min-height:500px;">
      <div class="container px-2">
        <div class="row">
            <h1 class="display-3 fontJumbotron text-center">{{ $data->berita_judul }}</h1>
            <img src="{{asset('storage/'.$row->berita_cover)}}" alt="" style="width:80%;">
            <div class="col-12 fontNavbar">
                {!!$data->berita_konten!!}
            </div>
        </div>
      </div>
    </div>

     {{-- footer --}}
     <div class="container-fluid py-5" style="background-color: #C4C4C4;">
      <div class="row align-items-center">
        <div class="col-5 px-3">
          <div class="row justifiy-content-center align-items-center">
            <div class="col text-center">
              <img src="{{asset('storage/img/logo.png')}}" height="80px" alt="" class="rounded-2 avatar">
              <span class="px-3 fontBrandFooter">Yayasan Bahrul Ulum</span>
            </div>
          </div>
        </div>
        <div class="col-2 px-3">
          <div class="row justify-content-center">
            <col-12 class="text-start my-1"><a class="fontNavFooter" href="">Home</a></col-12>
            <col-12 class="text-start my-1"><a class="fontNavFooter" href="">TK</a></col-12>
            <col-12 class="text-start my-1"><a class="fontNavFooter" href="">SD</a></col-12>
            <col-12 class="text-start my-1"><a class="fontNavFooter" href="">SMP</a></col-12>
            <col-12 class="text-start my-1"><a class="fontNavFooter" href="">SMA</a></col-12>
            <col-12 class="text-start my-1"><a class="fontNavFooter" href="{{url('feedback')}}">Feedback</a></col-12>
          </div>
        </div>
        <div class="col-5 px-3">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row my-2 justify-content-center">
                <div class="col text-center">
                  <span class="text-start"><span class="iconify iconFooter text-center d-inline-block mx-2" data-icon="ant-design:instagram-filled"></span><span class="fontSosmedFooter">Bahrul Ulum</span></span>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="row my-2">
                <div class="col text-center">
                <span class="text-start"><span class="iconify iconFooter text-center d-inline-block mx-2" data-icon="dashicons:facebook"></span><span class="fontSosmedFooter">Bahrul Ulum</span></span>
              </div>
              </div>
            </div>
            <div class="col-12">
              <div class="row my-2">
                <div class="col text-center">
                <span class="text-start"><span class="iconify iconFooter text-center d-inline-block mx-2" data-icon="fa-brands:twitter-square"></span><span class="fontSosmedFooter">Bahrul Ulum</span></span>
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
    {{-- iconify --}}
    <script src="{{asset('js/iconify.min.js')}}"></script>

  </body>
</html>