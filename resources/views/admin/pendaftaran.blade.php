@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->pendaftaran_nama}}</td>
                        <td>{{$row->pendaftaran_alamat}}</td>
                        <td>{{$row->pendaftaran_jenis_kelamin}}</td>
                        <td>{{$row->pendaftaran_status}}</td>
                        <td>
                            @if($row->pendaftaran_status == "diminta")
                                <a href="{{url('admin/pendaftaran/diterima/'.$row->id)}}" class="btn btn-primary">Terima</a>
                                <a href="{{url('admin/pendaftaran/ditolak/'.$row->id)}}" class="btn btn-danger">Tolak</a>
                            @else
                                {{$row->pendaftaran_status}}
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection