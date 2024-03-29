
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>PPBU - {{$nav}}</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('storage/img/logo.png')}}" type="image/x-icon">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.css')}}" type="text/css">
  <link href="{{asset('argon-icon/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('argon-icon/css/nucleo-svg.css')}}" rel="stylesheet" />
  {{-- <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css"> --}}
  <!-- Own CSS -->
  <link rel="stylesheet" href="{{asset('css/adminCss.css')}}">

  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css">
  {{-- DatePicker --}}
  <link rel="stylesheet" href="{{asset('css/datepicker.css')}}" type="text/css">
  {{-- Sweetalert --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> -->
  {{-- CKEditor --}}
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script> --}}
  <script>
    const reader = new FileReader();

    const changeImg = (param) => {
      document.getElementById(param).click()
    }

    const readUrl = (input, id) => {
      if (input.files && input.files[0]) {
        reader.onload = function(e) {
                  $('#' + id)
                      .attr('src', e.target.result)
              };

              reader.readAsDataURL(input.files[0]);
      }
    }

    const del = (eventt) => {
      eventt.preventDefault()
      const link = eventt.currentTarget.href;
      Swal.fire({
        title: 'Apakah Anda yakin ingin menghapus?',
        text: "Anda tidak dapat membatalkan ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Iya, hapus saja!'
      }).then((result) => {
        if (result.isConfirmed) {
          // console.log(link);
          window.location.href = link;
        }
      })
    }

    const kembali = (event) => {
      event.preventDefault()
      const link = event.currentTtarget.href;
      Swal.fire({
        title: 'Apakah Anda yakin ingin mengubah status menjadi DIKEMBALIKAN?',
        text: "Anda tidak dapat membatalkan ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Iya, ubah saja!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = link;
        }
      })
    }

</script>
    
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-dark bg-default" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="pt-4 pb-5 mb-3 sidenav-header  align-items-center">
        <a class="avatar avatar-lg rounded-circle" href="javascript:void(0)">
            <img src="{{asset('storage/img/logo.png') }}" alt="Card image cap">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">

    @if($nav == "dashboard")
    <li class="nav-item">
      <a class="nav-link active" href="{{url('dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text text-dark">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/siswa')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/pendaftaran')}}">
        <i class="fa fa-users text-white"></i>
        <span class="nav-link-text">Pendaftar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/lembaga')}}">
        <i class="fa fa-university text-red"></i>
        <span class="nav-link-text">Lembaga</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/banner')}}">
        <i class="fa fa-image text-yellow"></i>
        <span class="nav-link-text">Banner</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/program')}}">
        <i class="ni ni-bullet-list-67 text-white"></i>
        <span class="nav-link-text">Program Kami</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/berita')}}">
        <i class="fa fa-quote-right text-blue"></i>
        <span class="nav-link-text">Berita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/kata_mereka')}}">
        <i class="fa fa-comment text-green"></i>
        <span class="nav-link-text">Kata Mereka</span>
      </a>
    </li>
    @elseif($nav == "siswa")
    <li class="nav-item">
      <a class="nav-link" href="{{url('dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('admin/siswa')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text text-dark">Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/pendaftaran')}}">
        <i class="fa fa-users text-white"></i>
        <span class="nav-link-text">Pendaftar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/lembaga')}}">
        <i class="fa fa-university text-red"></i>
        <span class="nav-link-text">Lembaga</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/banner')}}">
        <i class="fa fa-image text-yellow"></i>
        <span class="nav-link-text">Banner</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/program')}}">
        <i class="ni ni-bullet-list-67 text-white"></i>
        <span class="nav-link-text">Program Kami</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/berita')}}">
        <i class="fa fa-quote-right text-blue"></i>
        <span class="nav-link-text">Berita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/kata_mereka')}}">
        <i class="fa fa-comment text-green"></i>
        <span class="nav-link-text">Kata Mereka</span>
      </a>
    </li>
    @elseif($nav == "pendaftaran")
    <li class="nav-item">
      <a class="nav-link" href="{{url('dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/siswa')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('admin/pendaftaran')}}">
        <i class="fa fa-users text-primary"></i>
        <span class="nav-link-text text-dark">Pendaftar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/lembaga')}}">
        <i class="fa fa-university text-red"></i>
        <span class="nav-link-text">Lembaga</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/banner')}}">
        <i class="fa fa-image text-yellow"></i>
        <span class="nav-link-text">Banner</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/program')}}">
        <i class="ni ni-bullet-list-67 text-white"></i>
        <span class="nav-link-text">Program Kami</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/berita')}}">
        <i class="fa fa-quote-right text-blue"></i>
        <span class="nav-link-text">Berita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/kata_mereka')}}">
        <i class="fa fa-comment text-green"></i>
        <span class="nav-link-text">Kata Mereka</span>
      </a>
    </li>
    @elseif($nav == "banner")
    <li class="nav-item">
      <a class="nav-link" href="{{url('dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/siswa')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/pendaftaran')}}">
        <i class="fa fa-users text-primary"></i>
        <span class="nav-link-text">Pendaftar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/lembaga')}}">
        <i class="fa fa-university text-red"></i>
        <span class="nav-link-text">Lembaga</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('admin/banner')}}">
        <i class="fa fa-image text-yellow"></i>
        <span class="nav-link-text text-dark">Banner</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/program')}}">
        <i class="ni ni-bullet-list-67 text-white"></i>
        <span class="nav-link-text">Program Kami</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/berita')}}">
        <i class="fa fa-quote-right text-blue"></i>
        <span class="nav-link-text">Berita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/kata_mereka')}}">
        <i class="fa fa-comment text-green"></i>
        <span class="nav-link-text">Kata Mereka</span>
      </a>
    </li>
    @elseif($nav == "program")
    <li class="nav-item">
      <a class="nav-link" href="{{url('dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/siswa')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/pendaftaran')}}">
        <i class="fa fa-users text-primary"></i>
        <span class="nav-link-text">Pendaftar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/lembaga')}}">
        <i class="fa fa-university text-red"></i>
        <span class="nav-link-text">Lembaga</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/banner')}}">
        <i class="fa fa-image text-yellow"></i>
        <span class="nav-link-text">Banner</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('admin/program')}}">
        <i class="ni ni-bullet-list-67 text-primary"></i>
        <span class="nav-link-text  text-dark">Program Kami</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/berita')}}">
        <i class="fa fa-quote-right text-blue"></i>
        <span class="nav-link-text">Berita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/kata_mereka')}}">
        <i class="fa fa-comment text-green"></i>
        <span class="nav-link-text">Kata Mereka</span>
      </a>
    </li>
    @elseif($nav == "lembaga" || $nav == "menu")
    <li class="nav-item">
      <a class="nav-link" href="{{url('dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/siswa')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/pendaftaran')}}">
        <i class="fa fa-users text-white"></i>
        <span class="nav-link-text">Pendaftar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('admin/lembaga')}}">
        <i class="fa fa-university text-red"></i>
        <span class="nav-link-text text-dark">Lembaga</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/banner')}}">
        <i class="fa fa-image text-yellow"></i>
        <span class="nav-link-text">Banner</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/program')}}">
        <i class="ni ni-bullet-list-67 text-white"></i>
        <span class="nav-link-text">Program Kami</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/berita')}}">
        <i class="fa fa-quote-right text-blue"></i>
        <span class="nav-link-text">Berita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/kata_mereka')}}">
        <i class="fa fa-comment text-green"></i>
        <span class="nav-link-text">Kata Mereka</span>
      </a>
    </li>
    @elseif($nav == "berita")
    <li class="nav-item">
      <a class="nav-link" href="{{url('dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/siswa')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/pendaftaran')}}">
        <i class="fa fa-users text-white"></i>
        <span class="nav-link-text">Pendaftar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/lembaga')}}">
        <i class="fa fa-university text-red"></i>
        <span class="nav-link-text">Lembaga</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/banner')}}">
        <i class="fa fa-image text-yellow"></i>
        <span class="nav-link-text">Banner</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/program')}}">
        <i class="ni ni-bullet-list-67 text-white"></i>
        <span class="nav-link-text">Program Kami</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('admin/berita')}}">
        <i class="fa fa-quote-right text-red"></i>
        <span class="nav-link-text text-dark">Berita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/kata_mereka')}}">
        <i class="fa fa-comment text-green"></i>
        <span class="nav-link-text">Kata Mereka</span>
      </a>
    </li>
    @elseif($nav == "kata mereka")
    <li class="nav-item">
      <a class="nav-link" href="{{url('dashboard')}}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/siswa')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">Siswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/pendaftaran')}}">
        <i class="fa fa-users text-white"></i>
        <span class="nav-link-text">Pendaftar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/lembaga')}}">
        <i class="fa fa-university text-red"></i>
        <span class="nav-link-text">Lembaga</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/banner')}}">
        <i class="fa fa-image text-yellow"></i>
        <span class="nav-link-text">Banner</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/program')}}">
        <i class="ni ni-bullet-list-67 text-white"></i>
        <span class="nav-link-text">Program Kami</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/berita')}}">
        <i class="fa fa-quote-right text-red"></i>
        <span class="nav-link-text">Berita</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{url('admin/kata_mereka')}}">
        <i class="fa fa-comment text-green"></i>
        <span class="nav-link-text text-dark">Kata Mereka</span>
      </a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="{{url('/')}}">
        <i class="fa fa-cog text-purple"></i>
        <span class="nav-link-text">Cek Website</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out text-red"></i>
        <span class="nav-link-text">Logout</span>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </a>
    </li>

    <!-- <li class="nav-item">
      <a class="nav-link" href="{{url('admin')}}/buletin">
        <i class="ni ni-books text-green"></i>
        <span class="nav-link-text">Buletin</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin')}}/ormawa">
        <i class="ni ni-circle-08 text-red"></i>
        <span class="nav-link-text">Ormawa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin')}}/data_kampus">
        <i class="ni ni-hat-3 text-grey"></i>
        <span class="nav-link-text">Data Kampus</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin')}}/divisi">
        <i class="ni ni-chart-pie-35 text-blue"></i>
        <span class="nav-link-text">Divisi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin')}}/jurusan">
        <i class="ni ni-building text-orange"></i>
        <span class="nav-link-text">Jurusan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin')}}/kalender">
        <i class="ni ni-calendar-grid-58 text-green"></i>
        <span class="nav-link-text">Kalender</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin')}}/peminjaman">
        <i class="ni ni-folder-17 text-primary"></i>
        <span class="nav-link-text">Peminjaman</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin')}}/produk/">
        <i class="ni ni-bag-17 text-grey"></i>
        <span class="nav-link-text">Produk</span>
      </a>
    </li>
      

    <li class="nav-item">
      <a class="nav-link" href='{{url('admin')}}'>
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/user')}}">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">User</span>
      </a>
    </li> -->
    
    </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="main-content" id="panel">
      <!-- Topnav -->
      <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Search form -->
              {{-- <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                  <div class="input-group input-group-alternative input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control" placeholder="Search" type="text">
                  </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </form> --}}
              <h1 class="d-none d-lg-inline text-white">Pondok Pesantren Bahrul Ulum Tajinan</h1>
              <!-- Navbar links -->
              <ul class="navbar-nav align-items-center ml-12 ml-md-auto ">
                <li class="nav-item d-xl-none">
                  <!-- Sidenav toggler -->
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </div>
                </li>
                <li class="nav-item d-sm-none">
                  <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                    <i class="ni ni-zoom-split-in"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                    <!-- Dropdown header -->
                    {{-- <div class="px-3 py-3">
                      <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                    </div> --}}
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                      {{-- <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="default.png">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a> --}}
                      
                    </div>
                    <!-- View all -->
                    <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">No Notification yet</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-ungroup"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                    <div class="row shortcuts px-4 py-2 g-2 text-center text-white">
                      <a href="{{ url('admin/user')}}" class="col-4 mb-2 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                          <i class="ni ni-single-02"></i>
                        </span>
                        <small>User</small>
                      </a>
                      <a href="{{ url('admin/buletin')}}" class="col-4 mb-2 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                          <i class="ni ni-books"></i>
                        </span>
                        <small>Buletin</small>
                      </a>
                      <a href="{{ url('admin/ormawa')}}" class="col-4 mb-2 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                          <i class="ni ni-circle-08"></i>
                        </span>
                        <small>Ormawa</small>
                      </a>
                      <a href="{{ url('admin/data_kampus')}}" class="col-4 mb-2 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                          <i class="ni ni-hat-3"></i>
                        </span>
                        <small>Data</small>
                      </a>
                      <a href="{{ url('admin/kalender')}}" class="col-4 mb-2 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                          <i class="ni ni-calendar-grid-58"></i>
                        </span>
                        <small>Kalender</small>
                      </a>
                      <a href="{{ url('admin/divisi')}}" class="col-4 mb-2 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                          <i class="ni ni-chart-pie-35"></i>
                        </span>
                        <small>Divisi</small>
                      </a>
                      <a href="{{ url('admin/jurusan') }}" class="col-4 mb-2 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                          <i class="ni ni-building"></i>
                        </span>
                        <small>Jurusan</small>
                      </a>
                      <a href="{{ url('admin/peminjaman') }}" class="col-4 mb-2 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                          <i class="ni ni-folder-17"></i>
                        </span>
                        <small>Peminjaman</small>
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                      <span class="avatar avatar-sm rounded-circle">
                          <img src="{{asset('storage/img/logo.png') }}" alt="Card image cap">
                      </span>
                      <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold"></span>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                      <h6 class="text-overflow m-0">Welcome {{Auth::user()->username}}!</h6>
                    </div>
                    <a href="{{ url('admin/user') }}" class="dropdown-item">
                      <i class="ni ni-single-02"></i>
                      <span>My profile</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-settings-gear-65"></i>
                      <span>Settings</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-calendar-grid-58"></i>
                      <span>Activity</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-support-16"></i>
                      <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      <i class="ni ni-user-run"></i>
                      <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
      </nav>
      
      <main class="main-content" id="panel">
        @yield('content')
      </main>
    </div>

    
    
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/js.cookie.js')}}"></script>
    <script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('js/jquery-scrollLock.min.js')}}"></script>
    <!-- Optional JS -->
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <script src="{{asset('js/Chart.extension.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{asset('js/argon.js?v=1.2.0')}}"></script>
    {{-- Datepicker --}}
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    {{-- Datatables --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    

    @yield('modal')

    <script>
      $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(document).ready(function() {
        $('.datatables').DataTable();
        const headerTable = $('.search-place');
        const headerTable2 = $('.search-place2');
        $('.dataTables_filter input').addClass('form-control')
        $('.dataTables_filter').find(`[aria-controls='DataTables_Table_0']`).appendTo(headerTable)
        $('.dataTables_filter').find(`[aria-controls='DataTables_Table_1']`).appendTo(headerTable2)
        $('.search-place input, .search-place2 input').attr("placeholder", "Cari data ...");
        $('.dataTables_filter label').html('');
        $('.dataTables_paginate span').addClass('page-item');
        $('.dataTables_paginate span a').addClass('page-link');

        $('.dataTables_length').html('');

    } );
    
    </script>
    @if(Session::has('success'))
    <script>
        Swal.fire(
          'Berhasil!',
          '{{session()->get('success')}}',
          'success'
        )
    </script>
    @endif
  @isset($errors)
    @foreach ($errors->all() as $message)
      <script>let errMsg += '{{$message}}';</script>  
    @endforeach
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: errMsg
      })
    </script>
  @endisset

  @yield('script')
  </body>

</html>