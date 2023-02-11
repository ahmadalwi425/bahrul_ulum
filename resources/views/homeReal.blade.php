@extends('mainLayout')

@section('content')


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
          <h1 class="display-3 p-0 m-0 fontJumbotron">Pondok Pesantren</h1>
          <h1 class="display-3 p-0 m-0 fontJumbotron">YPPAI Bahrul Ulum</h1>
          <h1 class="display-3 p-0 m-0 fontJumbotron">Tajinan</h1>
        </div>
        <div class="col-lg-5"></div>
        <div class="col-lg-7 col-12 pt-5 align-self-end">
          <p class="fontNavbar text-center text-lg-end">
            Pondok Pesantren Bahrul Ulum Tajinan merupakan wujud dari khidmat dan dedikasi terhadap pendidikan agama Islam dalam naungan YPPAI Bahrul Ulum Tajinan. Selain pondok pesantren dan TPQ sebagai lembaga pendidikan non formal, beberapa lembaga pendidikan formal seperti TK, MI, MTs, dan MA juga menjadi fokus kami. 
Pondok Pesantren Bahrul Ulum Tajinan senantiasa berupaya untuk mencetak generasi Cerdas, disiplin, berakhlakul Karimah.
          </p>
        </div>
        </div>
      </div>
    </div>

    {{-- Berita --}}
    <div class="container-lg" style="background-color: white; padding-top: 70px; padding-bottom: 100px;">
      <div class="container py-2 pb-5">
        <div class="row">
          <h1 class="display-3 fontJumbotron text-center pb-5"  onclick="location.href='{{url('listberita')}}';" style="cursor: pointer;">
            Berita & Kegiatan
          </h1>
          <div class="col-12">
            <div class="responsive">
              @foreach($data as $row)
              <div class="card" onclick="location.href='{{url('berita', $row->id)}}';" style="cursor: pointer;">
                <img loading="lazy" class="card-img-top" src="{{asset('img/'.$row->berita_cover)}}" style="width: 300px !important; height: 150px !important; object-fit: cover !important;" alt="{{asset('storage/'.$row->berita_cover)}}">
                <div class="card-footer text-center py-3">
                  <span class="fontUpJumbotron text-center">{{$row->berita_judul}}</span>
                </div>
                 <p class="selector" style="margin:10px;">Klik untuk membaca...</p>
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
                  <img loading="lazy" class="rounded-3 mx-auto text-center" width="130px" src="{{asset('img/'.$row->foto)}}" alt="Card image cap">
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


@endsection

@section('script')
<script>
  // carousel jumbotron
  $(document).ready(function(){
    $('.your-class').slick({
        autoplay: true,
        autoplaySpeed: 2000,
    });
  });

  // carousel berita terkini
  $('.responsive').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
        autoplaySpeed: 2000,
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
    autoplay: true,
        autoplaySpeed: 2000,
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
    autoplay: true,
        autoplaySpeed: 2000,
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
@endsection