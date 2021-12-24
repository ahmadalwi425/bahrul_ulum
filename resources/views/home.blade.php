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
                    <a href="{{url('admin/siswa/export')}}" class="btn btn-success">export siswa</a>
                </div>
            </div>
            <div class="card bg-light mt-3">
                <div class="card-header">
                    Laravel 8 Import Export Excel to database Example - ItSolutionStuff.com
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/siswa/import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Siswa Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
