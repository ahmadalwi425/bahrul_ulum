@extends('mainLayout')

@section('content')

    <div class="container-fluid mt-5 py-5" style="background-color: #CDEEC8; min-height:500px;">
      <div class="container px-2">
        <div class="row">
            <div height="300" style="object-fit: cover" class="text-center mb-4">
                <img height="300" style="object-fit: cover" src="{{asset('img/'.$data->berita_cover)}}" class="" alt="...">
            </div>
            <h1 class="display-3 fontJumbotron text-center">{{ $data->berita_judul }}</h1>
            <!--{!! $data !!}-->
            {!! html_entity_decode($data->berita_konten)!!}
            </div>
            </div>
    </div>
    
@endsection