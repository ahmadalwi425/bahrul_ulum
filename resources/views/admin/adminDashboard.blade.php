@extends('admin.adminLayout')

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-3">Dashboard</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item">
                  <a href="{{url('/admin')}}"><i class="fa fa-home text-primary"></i> Dashboard</a></li>
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
    @foreach($data as $row)
    <div class="col-xl-3 col-md-6">
      <div class="card card-stats">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">{{$row[0]}}</h5>
              <span class="h2 font-weight-bold mb-0">{{$row[1]}} Siswa</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->
            <span class="text-nowrap">{{$row[2]}} jumlah menu</span>
          </p>
        </div>
      </div>
    </div>
    @endforeach
	</div>

  <div class="row">
    @foreach ($lembaga as $row)
    
      <div class="col-xl-4">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0 pb-0">
            <div class="mb-0 pb-0 row justify-content-between">
              <h3 class="mb-0 col-5 text-lg-left">Siswa {{$row->lembaga_nama}}</h3>
              <br>
            </div>
          </div>
          <!-- Light table -->
          <div class="card-body pt-0">
            <div class="table-responsive">
              <table class="table align-items-center table-flush datatables">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">NISN</th>
                    <th scope="col" class="sort" data-sort="name">Nama</th>
                    <th scope="col" class="sort" data-sort="completion">Jenkel</th>
                  </tr>
                </thead>
                <tbody class="list">                    
                    @foreach($siswa as $row2)
                    @if($row2->lembaga_id == $row->id)
                    <tr>
                      <td>{{$row2->siswa_nisn}}</td>
                      <td>{{$row2->siswa_nama}}</td>
                      <td>{{$row2->siswa_jenis_kelamin}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    @endforeach
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