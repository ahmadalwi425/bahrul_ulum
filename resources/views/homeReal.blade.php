<?php

?>

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

    

    {{-- FullPage --}}
    
    <div class="container-fluid" style="background-color: #CDEEC8;">
      <div style="padding: 0; padding-top: 40px; background-color: #CDEEC8;" class="container mt-7">
          <div class="col-12">
              <div class="your-class">
                <div><img loading="lazy" src="{{asset('storage/img/homepage 1.jpg')}}" class="d-block w-100" alt="{{asset('storage/img/homepage 1.jpg')}}"></div>
                <div><img loading="lazy" src="{{asset('storage/img/homepage 2.jpg')}}" class="d-block w-100" alt="{{asset('storage/img/homepage 2.jpg')}}"></div>
                <div><img loading="lazy" src="{{asset('storage/img/homepage 3.jpg')}}" class="d-block w-100" alt="{{asset('storage/img/homepage 3.jpg')}}"></div>
              </div>
          </div>
      </div>
    </div>

    {{-- About --}}
    
    <div class="container-fluid" style="background-color: #CDEEC8; padding-top: 100px; padding-bottom: 100px;">
      <div class="container-lg  py-2 py-lg-5">
        <div class="row">
        <div class="col-12 text-center text-lg-start">
          <p class="display-6 fontUpJumbotron p-0 m-0">Selamat Datang di</p>
          <h1 class="display-3 p-0 m-0 fontJumbotron">Yayasan Bahrul Ulum</h1>
        </div>
        <div class="col-lg-5"></div>
        <div class="col-lg-7 col-12 pt-5 align-self-end">
          <p class="fontNavbar text-center text-lg-end">
            Yayasan Pondok Pesantren Bahrul Ulum merupakan yayasan yang bergerak di bidang pendidikan islam dengan dasar pondok pesantren. Yayasan ini telah memiliki jenjang pendidikan TK, SMP, SMA serta Pondok Pesantren.
          </p>
        </div>
        </div>
      </div>
    </div>

    {{-- Berita --}}
    <div class="container-lg" style="background-color: white; padding-top: 70px; padding-bottom: 100px;">
      <div class="container py-2 pb-5">
        <div class="row">
          <h1 class="display-3 fontJumbotron text-center pb-5">
            Berita Terkini
          </h1>
          <div class="col-12">
            <div class="responsive">
              @foreach($data as $row)
              <div class="card" onclick="location.href='{{url('berita', $row->id)}}';" style="cursor: pointer;">
                <img loading="lazy" class="card-img-top" style="" src="{{asset('storage/'.$row->berita_cover)}}" class="d-block mx-auto h-1" alt="{{asset('storage/'.$row->berita_cover)}}">
                <div class="card-footer text-center py-3">
                  <span class="fontUpJumbotron text-center">{{$row->berita_judul}}</span>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum doloribus velit maiores quisquam placeat dicta, accusantium tempore nemo illo quam?
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Program Kami --}}
    <div class="container-fluid py-5 py-lg-5" style="background-color: #C4C4C4;">
      <div class="container py-0 py-lg-5">
        <div class="row align-items-center  py-0 py-lg-5">
          <div class="col-lg-4 col-12">
            <h1 class="display-3 fontJumbotron text-lg-start text-center">Program Kami</h1>
          </div>
          <div style="
          margin-left: -20px" class="col-lg-8 col-12">
            <div class="program-kami">
              <div class="card border-0" onclick="location.href='newurl.html';">
                <img loading="lazy" class="card-img-top" style="" src="{{asset('storage/img/homepage 1.jpg')}}"alt="{{asset('storage/img/homepage.jpg')}}">
                <div class="card-footer text-center py-3">
                  <span class="fontUpJumbotron">PPDB 2021</span>
                </div>
              </div>
              <div class="card border-0" onclick="location.href='newurl.html';">
                <img loading="lazy" class="card-img-top" style="" src="{{asset('storage/img/homepage 1.jpg')}}"alt="{{asset('storage/img/homepage.jpg')}}">
                <div class="card-footer text-center py-3">
                  <span class="fontUpJumbotron">PPDB 2021</span>
                </div>
              </div>
              <div class="card border-0" onclick="location.href='newurl.html';">
                <img loading="lazy" class="card-img-top" style="" src="{{asset('storage/img/homepage 1.jpg')}}"alt="{{asset('storage/img/homepage.jpg')}}">
                <div class="card-footer text-center py-3">
                  <span class="fontUpJumbotron">PPDB 2021</span>
                </div>
              </div>
              <div class="card border-0" onclick="location.href='newurl.html';">
                <img loading="lazy" class="card-img-top" style="" src="{{asset('storage/img/homepage 1.jpg')}}"alt="{{asset('storage/img/homepage.jpg')}}">
                <div class="card-footer text-center py-3">
                  <span class="fontUpJumbotron">PPDB 2021</span>
                </div>
              </div>
              <div class="card border-0" onclick="location.href='newurl.html';">
                <img loading="lazy" class="card-img-top" style="" src="{{asset('storage/img/homepage 1.jpg')}}"alt="{{asset('storage/img/homepage.jpg')}}">
                <div class="card-footer text-center py-3">
                  <span class="fontUpJumbotron">PPDB 2021</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Kata Mereka --}}
    <div class="container-fluid pt-3 pb-5 " style="background-color: #CDEEC8;">
      <h1 class="fontJumbotron display-3 text-center my-5 py-5">Kata mereka</h1>
      <div class="kata-mereka container col-12 pb-5 mb-5">
        @foreach($data2 as $row)
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-5 col-12 align-self-center text-center">
                <div class="avatar rounded-2 text-center" href="javascript:void(0)">
                  <img loading="lazy" class="rounded-3 mx-auto text-center" width="130px" src="{{asset('storage/'.$row->foto)}}" alt="Card image cap">
                </div>
              </div>
              <div class="col-lg-7 col-12 align-self-center">
                <p class="fontJumbotronUp text-center fontUpJumbotron">{{$row->kata}}</p>
              </div>
            </div>
          </div>
          <div class="card-footer text-center py-3">
            <span class="fontNameTesti">{{$row->nama}}</span>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- footer --}}
    <div class="container-fluid py-5" style="background-color: #C4C4C4;">
      <div class="row align-items-center">
        <div class="col-lg-5 col-12 px-3">
          <div class="row justifiy-content-center align-items-center">
            <div class="col align-items-center text-center">
              <img loading="lazy" src="{{asset('storage/img/logo.png')}}" height="80px" alt="" class="rounded-2 avatar col-lg">
              <span class="col-lg col-12 px-3 fontBrandFooter">Yayasan Bahrul Ulum</span>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-12 px-3 py-lg-1 py-5">
          <div class="row justify-content-center">
            <col-12 class="text-lg-start text-center my-1"><a class="fontNavFooter" href="">Home</a></col-12>
            <col-12 class="text-lg-start text-center my-1"><a class="fontNavFooter" href="">TK</a></col-12>
            <col-12 class="text-lg-start text-center my-1"><a class="fontNavFooter" href="">SD</a></col-12>
            <col-12 class="text-lg-start text-center my-1"><a class="fontNavFooter" href="">SMP</a></col-12>
            <col-12 class="text-lg-start text-center my-1"><a class="fontNavFooter" href="">SMA</a></col-12>
            <col-12 class="text-lg-start text-center my-1"><a class="fontNavFooter" href="{{url('feedback')}}">Feedback</a></col-12>
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
      // carousel jumbotron
      $(document).ready(function(){
        $('.your-class').slick();
      });

      // carousel berita terkini
      $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });

      // Carousel program Kami
      $('.program-kami').slick({
        centerMode: true,
        centerPadding: '100px',
        slidesToShow: 3,
        variableWidth: true,
        arrows:true,
        dots: true, 
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '50px',
              slidesToShow: 1
            }
          }
        ]
      });

      // Carousel program Kami
      $('.kata-mereka').slick({
        centerMode: false,
        centerPadding: '30px',
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: false,
              centerPadding: '40px',
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: false,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
		
    </script>
    <script>
        @if(session()->has('modal'))
          $("#emailSentModal").modal("toggle");

        @endif
    </script>


    
  </body>
</html>

