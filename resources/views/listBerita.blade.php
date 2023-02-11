@extends('mainLayout')

@section('content')


    {{-- FullPage --}}
    <div class="container-lg" style="background-color: white; padding-top: 70px; padding-bottom: 100px;">
      <div class="container py-2 pb-5">
        <div class="row">
          <h1 class="display-3 fontJumbotron text-center pb-5">
            Berita
          </h1>
          <div class="col-12">
              
              <div class="row">
                  @foreach($data as $row)
                  <div class="col-12">
                  <div class="card mb-3 mx-auto" style="max-width: 540px;"  onclick="location.href='{{url('berita', $row->id)}}';" style="cursor: pointer;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{asset('img/'.$row->berita_cover)}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">{{$row->berita_judul}}</h5>
                            <p class="card-text"><small class="text-muted">Klik untuk baca selengkapnya</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  @endforeach
              </div>
             
          </div>
        </div>
      </div>
    </div>

@endsection