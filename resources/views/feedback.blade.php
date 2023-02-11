@extends('mainLayout')

@section('content')

    <div class="container-fluid mt-5 py-5" style="background-color: #CDEEC8;">
      <div class="container px-2">
        <div class="row">
          <h1 class="display-3 fontJumbotron">Selamat Datang</h1>
          <span class="display-6 fontJumbotron mb-5">di Halaman Feedback</span>
          <p class="fontNavFooter text-danger text-end mb-5">Silahkan lengkapi formulir di bawah ini !</p>
          <form method="POST" action="{{ url('feedback/store') }}" enctype="multipart/form-data">
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
            {{-- section 1 --}}
            <div class="row">
              <div class="col-lg mb-6 col-12">
                <label for="pendaftaran_nama" class="form-label fontFormRegister">Nama Lengkap</label>
                <input name="nama" type="text" class="form-control font-primer" placeholder="Nama (max 15 huruf)" aria-label="" autofocus>
              </div>
              <div class="col-lg mb-6 col-12">
                <label for="pendaftaran_nama" class="form-label fontFormRegister">Foto (maks ukuran 2mb)</label>
                <input name="foto" type="file" class="form-control font-primer" placeholder="" aria-label="Nama (max 15 huruf)" autofocus>
              </div>
            </div>
            <div class="row">
              <div class="col-lg mb-12 col-12">
                <label for="pendaftaran_nisn" class="form-label fontFormRegister">Kata</label>
                <input name="kata" type="text" class="form-control font-primer" placeholder="Feedback anda (max 30 huruf)" aria-label="Last name">
              </div>
            </div>
            <div class="col mt-5 col-12 text-end">
              <button class="btn btn-primer font-primer-b px-3 py-2">Kirim Feedback</button>
            </div>

          </form>
        </div>
      </div>
    </div>

@endsection