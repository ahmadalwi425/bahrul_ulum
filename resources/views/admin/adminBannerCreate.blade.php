@extends('admin.adminLayout')

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
    <div class="header-body">
        <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-3">Banner</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item">
                <a href="{{url('/admin')}}"><i class="fa fa-home text-primary"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{url('/admin/berita')}}"></i> Banner</a></li>
                <li class="breadcrumb-item active" aria-current="page">tambah</li>
            </ol>
            </nav>
        </div>
        {{-- <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
        </div> --}}
        </div>
    </div>
    </div>
</div>
<!-- Page content -->

<div class="container-fluid mt--6">
    <div class="row">
    <div class="col">
        <div class="card">
        <!-- Card header -->
        <div class="card-header border-0 pb-0">
            <h3 class="text-lg">Halaman Creator</h3>
        </div>
        <!-- Light table -->
        <div class="card-body pt-0">
            <form action="{{url('admin/banner/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if(count($errors) > 0)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                <h6 class="heading-small text-muted mb-4">Tambahkan Banner Baru</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="judul">Judul</label>
                            <input type="text" id="judul" class="form-control" name="banner_judul" placeholder="judul">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="gambar">Gambar</label>
                            <input type="file" id="gambar" class="form-control" name="gambar" placeholder="Banner">
                        </div>
                    </div>
                </div>
                
                </div>
            <hr class="my-4" />
            <div class="row justify-content-end">
                <button type="submit" class="col-2 btn btn-primary align-self-end ">Unggah</button>
                <a class="col-2 btn btn-secondary align-self-end " href="" onclick="return confirm('Are you sure wanna delete this user?');">Kembali</a>
            </div>
                
            </form>
        </div>
        <!-- Card footer -->
        <!-- <div class="card-footer py-4">
            <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                </li>
                <li class="page-item active">
                <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
                </li>
            </ul>
            </nav>
        </div> -->
        </div>
    </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
        <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">SantriNgoding</a>
        </div>
        </div>
        <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
        </ul>
        </div>
    </div>
    </footer>
</div>


@endsection