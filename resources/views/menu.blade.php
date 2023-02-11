@extends('mainLayout')

@section('content')


    {{-- Menu --}}
    <div class="container-fluid mt-5 py-5" style="background-color: #CDEEC8; min-height:500px;">
      <div class="container px-2">
        <div class="row">
            <h1 class="display-3 fontJumbotron text-center">{{ $data->menu_judul }}</h1>
            <div class="col-12 fontNavbar">
                {!!$data->menu_konten!!}
            </div>
        </div>
      </div>
    </div>

@endsection