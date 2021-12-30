@extends('admin.adminLayout')

@section('content')


<!-- Header -->
<div class="header pb-6 d-flex align-items-center" style="min-height: 400px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h1 class="display-2 text-white"> {{$data->siswa_nama}}</h1>
          <p class="text-white mt-0 mb-3">Ini adalah halaman profil <strong>{{$data->siswa_nama}}</strong>.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Edit profile </h3>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form action="{{url('admin/siswa/update/'.$data->id)}}" method="post">
              @csrf
              @method('PUT')
              <h6 class="heading-small text-muted mb-4">User information</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="nama">Nama</label>
                      <input type="text" id="nama" class="form-control" name="siswa_nama" placeholder="Nama" value="{{$data->siswa_nama}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="nokk">No KK</label>
                      <input type="name" name="siswa_no_kk" id="nokk" class="form-control" placeholder="Nomor KK" value="{{$data->siswa_no_kk}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="no_hp">NISN</label>
                      <input type="text" name="siswa_nisn" id="siswa_nisn" class="form-control" placeholder="NISN" value="{{$data->siswa_nisn}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">No KIP</label>
                      <input type="text" name="siswa_no_kip" id="input-last-name" class="form-control" placeholder="No KIP" value="{{$data->siswa_no_kip}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="jenkel">Jenis Kelamin</label>
                      <select name="siswa_jenis_kelamin" id="jenkel" class="form-control">
                        @if($data->siswa_jenis_kelamin == "laki-laki")
                        <option value="laki-laki" selected>Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                        @else
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan" selected>Perempuan</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="tempatlahir">Tempat Lahir</label>
                      <input type="text" name="siswa_tempat_lahir" id="tempatlahir" class="form-control" placeholder="Tempat lahir" value="{{$data->siswa_tempat_lahir}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="tanggallahir">Tempat Lahir</label>
                      <input type="date" data-date-format="yyyy-mm-dd" name="siswa_tanggal_lahir" id="tanggallahir" class="form-control" placeholder="Tanggal Lahir" value="{{$data->siswa_tanggal_lahir}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="alamat">Alamat</label>
                      <input type="text" name="siswa_alamat" id="alamat" class="form-control" placeholder="Nama Jalan" value="{{$data->siswa_alamat}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="kelurahan">Kelurahan</label>
                      <input type="text" name="siswa_kelurahan" id="kelurahan" class="form-control" placeholder="Kelurahan" value="{{$data->siswa_kelurahan}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="provinsi">Provinsi</label>
                      <input type="text" name="siswa_provinsi" id="provinsi" class="form-control" placeholder="Provinsi" value="{{$data->siswa_provinsi}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="kota">Kota</label>
                      <input type="text" name="siswa_kota" id="kota" class="form-control" placeholder="Kota" value="{{$data->siswa_kota}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="kecamatan">Kecamatan</label>
                      <input type="text" name="siswa_kecamatan" id="kecamatan" class="form-control" placeholder="Kecamatan" value="{{$data->siswa_kecamatan}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="kode_pos">Kode Pos</label>
                      <input type="text" name="siswa_kode_pos" id="kode_pos" class="form-control" placeholder="Kode Pos" value="{{$data->siswa_kode_pos}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="agama">Agama</label>
                      <select name="siswa_agama" id="jenkel" class="form-control">
                        @if($data->siswa_agama == "islam")
                        <option value="islam" selected>Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        @elseif($data->siswa_agama == "kristen")
                        <option value="islam">Islam</option>
                        <option value="kristen" selected>Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        @elseif($data->siswa_agama == "hindu")
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu" selected>Hindu</option>
                        <option value="budha">Budha</option>
                        @elseif($data->siswa_agama == "budha")
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha" selected>Budha</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="no_hp">No Hp</label>
                      <input type="text" name="siswa_no_hp" id="no_hp" class="form-control" placeholder="No Hp" value="{{$data->siswa_no_hp}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="anak_ke">Anak Ke-</label>
                      <input type="number" name="siswa_anak_ke" id="anak_ke" class="form-control" placeholder="Anak Ke-" value="{{$data->siswa_anak_ke}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="jumlah_saudara">Jumlah Saudara</label>
                      <input type="number" name="siswa_jumlah_saudara" id="jumlah_saudara" class="form-control" placeholder="Jumlah Saudara" value="{{$data->siswa_jumlah_saudara}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="status_tempat_tinggal">Tempat Tinggal (Rumah, Kost, Dll)</label>
                      <input type="text" name="siswa_status_tempat_tinggal" id="status_tempat_tinggal" class="form-control" placeholder="Tempat Tinggal (Rumah, Kost, Dll)" value="{{$data->siswa_status_tempat_tinggal}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="pembiaya">Pembiaya</label>
                      <input type="text" name="siswa_pembiaya" id="pembiaya" class="form-control" placeholder="Pembiaya" value="{{$data->siswa_pembiaya}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="kewarganegaraan">Kewarganegaraan</label>
                      <input type="text" name="siswa_kewarganegaraan" id="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan" value="{{$data->siswa_kewarganegaraan}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="kebutuhan_khusus">Kebutuhan Khusus</label>
                      <select name="siswa_kebutuhan_khusus" id="kebutuhan_khusus" class="form-control">
                        @if($data->siswa_kebutuhan_khusus == "tidak ada")
                        <option value="Tidak ada" selected>Tidak Ada</option>
                        <option value="Ada">Ada</option>
                        @else
                        <option value="Tidak ada">Tidak Ada</option>
                        <option value="Ada" selected>Ada</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="kebutuhan_disabilitas">Kebutuhan Disabilitas</label>
                      <select name="siswa_kebutuhan_disabilitas" id="kebutuhan_disabilitas" class="form-control">
                        @if($data->siswa_kebutuhan_disabilitas == "tidak ada")
                        <option value="Tidak ada" selected>Tidak Ada</option>
                        <option value="Ada">Ada</option>
                        @else
                        <option value="Tidak ada">Tidak Ada</option>
                        <option value="Ada" selected>Ada</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="kepala_keluarga">Kepala Keluarga</label>
                      <input type="text" name="siswa_kepala_keluarga" id="kepala_keluarga" class="form-control" placeholder="Kepala Keluarga" value="{{$data->siswa_kepala_keluarga}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="pernah_paud">Pernah PAUD</label>
                      <select name="siswa_pernah_paud" id="pernah_paud" class="form-control">
                        @if($data->siswa_pernah_paud == "tidak pernah")
                        <option value="tidak pernah" selected>Tidak Pernah</option>
                        <option value="pernah">Pernah</option>
                        @else
                        <option value="tidak pernah">Tidak Pernah</option>
                        <option value="pernah" selected>Pernah</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="pernah_tk">Pernah TK</label>
                      <select name="siswa_pernah_tk" id="pernah_tk" class="form-control">
                        @if($data->siswa_pernah_tk == "tidak pernah")
                        <option value="tidak pernah" selected>Tidak Pernah</option>
                        <option value="pernah">Pernah</option>
                        @else
                        <option value="tidak pernah">Tidak Pernah</option>
                        <option value="pernah" selected>Pernah</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="jarak_tempuh">Jarak Tempuh (contoh : 2 KM)</label>
                      <input type="text" name="siswa_jarak_tempuh" id="jarak_tempuh" class="form-control" placeholder="Jarak Tempuh (contoh : 2 KM)" value="{{$data->siswa_jarak_tempuh}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="waktu_tempuh">Waktu Tempuh (contoh : 10 Menit)</label>
                      <input type="text" name="siswa_waktu_tempuh" id="waktu_tempuh" class="form-control" placeholder="Waktu Tempuh (contoh : 10 Menit)" value="{{$data->siswa_waktu_tempuh}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="cita_cita">Cita Cita</label>
                      <input type="text" name="siswa_cita_cita" id="cita_cita" class="form-control" placeholder="Cita Cita" value="{{$data->siswa_cita_cita}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="hobi">Hobi</label>
                      <input type="text" name="siswa_hobi" id="hobi" class="form-control" placeholder="Hobi" value="{{$data->siswa_hobi}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="media_sosial">Media Sosial (contoh : ig:ex123))</label>
                      <input type="text" name="siswa_media_sosial" id="media_sosial" class="form-control" placeholder="Media Sosial" value="{{$data->siswa_media_sosial}}">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="lembaga_id">Pendidikan</label>
                      <select name="lembaga_id" id="lembaga_id" class="form-control">
                        @foreach($datalembaga as $row)
                          @if($row->id == $data->lembaga_id)
                            <option value="{{$row->id}}" selected>{{$row->lembaga_nama}}</option>
                          @else
                            <option value="{{$row->id}}">{{$row->lembaga_nama}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>
              </div>
              <!-- <hr class="my-4" /> -->
              <!-- <h6 class="heading-small text-muted mb-4">Education</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="fakultas">Fakultas</label>
                      <input type="text" id="fakultas" class="form-control" placeholder="Fakultas" value="Teknik">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="jurusan">Jurusan</label>
                      <input name="jurusan" type="text" id="jurusan" class="form-control" placeholder="Jurusan" value="jurusan->nama_jurusan}}">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="level">Level</label>
                      <input type="text" id="level" class="form-control" placeholder="Postal code" value="level->nama_level}}">
                    </div>
                  </div>
                </div> 
            </div>-->
            <hr class="my-4" />
            <div class="row justify-content-end">
              <button type="submit" class="col-2 btn btn-primary align-self-end ">Edit</button>
              <a class="col-2 btn btn-secondary align-self-end " href="" onclick="return confirm('Are you sure wanna delete this user?');">Kembali</a>
            </div>
              
            </form>
          </div>
        </div>
      </div>
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