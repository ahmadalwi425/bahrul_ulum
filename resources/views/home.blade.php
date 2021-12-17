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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
