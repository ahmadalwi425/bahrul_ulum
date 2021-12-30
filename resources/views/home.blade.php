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

                    {{ __('You are logged in!') }}
                    <a href="{{url('admin/pendaftaran')}}" class="btn btn-success">Cek tabel pendaftaran</a>
                    <a href="{{url('admin/siswa')}}" class="btn btn-success">Cek tabel siswa</a>
                    <a href="{{url('dashboard')}}" class="btn btn-success">Ke halaman admin</a>
                </div>
            </div>
            <div class="card bg-light mt-3">
                <div class="card-header">
                    Test fitur excel
                </div>
                <div class="card-body">
                    <a href="{{url('admin/siswa/export')}}" class="btn btn-success">export siswa</a>
                    <br>
                    <form action="{{ url('admin/siswa/import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Siswa Data</button>
                    </form>
                </div>
            </div>
            <div class="card bg-light mt-3">
                <div class="card-header">
                    Test fitur menu
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/menu/store') }}" method="POST">
                        @csrf
                        <input type="text" name="menu_judul" id="" class="form-control" placeholder="Judul Menu">
                        <br>
                        <textarea name="menu_konten" class="form-control" id="" cols="30" rows="10" placeholder="Konten Menu"></textarea>
                        <br>
                        <select name="id_lembaga" id="" class="form-control">
                            @foreach($datalembaga as $row)
                                <option value="{{$row->id}}">{{$row->lembaga_nama}}</option>
                            @endforeach
                        </select>
                        <br>
                        <button class="btn btn-success">Tambahkan Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
