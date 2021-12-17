@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @isset($errors)
                        @foreach ($errors->all() as $message)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endisset
                    <form method="POST" action="{{ url('pendaftaran/store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="pendaftaran_nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Siswa') }}</label>

                            <div class="col-md-6">
                                <input id="pendaftaran_nama" type="text" class="form-control @error('name') is-invalid @enderror" name="pendaftaran_nama"   required autocomplete="pendaftaran_nama" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pendaftaran_alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Siswa') }}</label>

                            <div class="col-md-6">
                                <input id="pendaftaran_alamat" type="text" class="form-control @error('name') is-invalid @enderror" name="pendaftaran_alamat"   required autocomplete="pendaftaran_alamat" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pendaftaran_jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin Siswa') }}</label>

                            <div class="col-md-6">
                                <select id="pendaftaran_jenis_kelamin" class="form-control" name="pendaftaran_jenis_kelamin" required autocomplete="pendaftaran_jenis_kelamin">
                                    <option class="form-control" value="laki-laki">Laki-laki</option>
                                    <option class="form-control" value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pendaftaran_foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto Siswa') }}</label>

                            <div class="col-md-6">
                                <input id="pendaftaran_foto" type="file" class="form-control @error('name') is-invalid @enderror" name="pendaftaran_foto"   required autocomplete="pendaftaran_foto" autofocus>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection