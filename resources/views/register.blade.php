@extends('mainLayout')

@section('content')

    {{-- pendaftaran --}}
    
    <div class="container-fluid mt-5 py-5" style="background-color: #CDEEC8;">
      <div class="container px-2">
        <div class="row">
          <h1 class="display-3 fontJumbotron">Selamat Datang</h1>
          <span class="display-6 fontJumbotron mb-5">di Halaman Pendaftaran {{$data->lembaga_nama}}</span>
          <p class="fontNavFooter text-danger text-end mb-5">Silahkan lengkapi formulir di bawah ini !</p>
          <div class="flash-message container-fluid" style="background-color: #CDEEC8;">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

              <p class="alert alert-{{ $msg }}">Pendaftaran berhasil</p>
              @endif
            @endforeach
          </div> <!-- end .flash-message -->
          <form method="POST" action="{{ url('pendaftaran/store') }}">
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
              <input name="lembaga_id" type="text" class="form-control font-primer d-none" placeholder="" aria-label="Nama" value="{{$data->id}}">
              <div class="col-lg mb-3 col-12">
                <label for="pendaftaran_nama" class="form-label fontFormRegister">Nama Lengkap <span style="color:red;font-weight:bold;">*</span></label>
                <input name="pendaftaran_nama" type="text" class="form-control font-primer" placeholder="" aria-label="Nama" autofocus>
              </div>
              <div class="col-lg mb-3 col-12">
                <label for="pendaftaran_nisn" class="form-label fontFormRegister">NISN <span style="color:red;font-weight:bold;">*</span></label>
                <input name="pendaftaran_nisn" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
              </div>
            </div>
            <div class="row">
              <div class="col-lg mb-3 col-12">
                <label class="form-label fontFormRegister" for="pendaftaran_jenis_kelamin">Jenis Kelamin <span style="color:red;font-weight:bold;">*</span></label>
                <select name="pendaftaran_jenis_kelamin" class="form-select font-primer" id="pendaftaran_jenis_kelamin">
                  <option selected disabled>Pilih salah satu...</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="col-lg mb-3 col-12">
                <label for="pendaftaran_no_kip" class="form-label fontFormRegister">No KIP <span style="color:red;font-weight:bold;">*</span></label>
                <input name="pendaftaran_no_kip" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
              </div>
            </div>
            <div class="row">
              <div class="col-lg mb-3 col-12">
                <label for="pendaftaran_no_kk" class="form-label fontFormRegister">No KK <span style="color:red;font-weight:bold;">*</span></label>
                <input name="pendaftaran_no_kk" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
              </div>
              <div class="col-lg mb-3 col-12">
                <label for="pendaftaran_no_hp" class="form-label fontFormRegister">No HP <span style="color:red;font-weight:bold;">*</span></label>
                <input name="pendaftaran_no_hp" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
              </div>
            </div>
            <div class="row">
              <div class="col-lg mb-3 col-12">
                <label for="pendaftaran_tempat_lahir" class="form-label fontFormRegister">Tempat Lahir <span style="color:red;font-weight:bold;">*</span></label>
                <input name="pendaftaran_tempat_lahir" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
              </div>
              <div class="col-lg mb-3 col-12">
                <label for="pendaftaran_tanggal_lahir" class="form-label fontFormRegister">Tanggal Lahir <span style="color:red;font-weight:bold;">*</span></label>
                <input name="pendaftaran_tanggal_lahir" type="date" class="datepicker form-control font-primer" data-date-format="yyyy/mm/dd" placeholder="" aria-label="Last name">
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-lg-6 mb-3 col-12">
                <label for="pendaftaran_agama" class="form-label fontFormRegister">Agama <span style="color:red;font-weight:bold;">*</span></label>
                <select name="pendaftaran_agama" class="form-select font-primer" id="pendaftaran_agama">
                  <option selected disabled>Pilih salah satu...</option>
                  <option value="islam">Islam</option>
                  <option value="protestan">Protestan</option>
                  <option value="katolik">Katolik</option>
                  <option value="hindu">Hindu</option>
                  <option value="budha">Budha</option>
                  <option value="khonghucu">Khonghucu</option>
                </select>
              </div>
            </div>
            <hr>

            {{-- section 2 --}}
            <div class="col mt-5 mb-3 col-12">
              <div class="row">
                <div class="col-lg col-12 mb-3">
                  <label for="pendaftaran_alamat" class="form-label fontFormRegister">Alamat <span style="color:red;font-weight:bold;">*</span></label>
                  <textarea class="form-control font-primer" name="pendaftaran_alamat" id="" cols="30" rows="5" placeholder=""></textarea>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="pendaftaran_kelurahan" class="form-label fontFormRegister">Kecamatan <span style="color:red;font-weight:bold;">*</span></label>
                    <input name="pendaftaran_kelurahan" type="text" class="datepicker form-control font-primer" placeholder="" aria-label="kecamatan">
                  </div>
                  <div class="mb-3">
                    <label for="pendaftaran_kecamatan" class="form-label fontFormRegister">Kelurahan <span style="color:red;font-weight:bold;">*</span></label>
                    <input name="pendaftaran_kecamatan" type="text" class="datepicker form-control font-primer" placeholder="" aria-label="kecamatan">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 mb-3 col-12">
                  <label for="pendaftaran_kode_pos" class="form-label fontFormRegister">Kode POS <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_kode_pos" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-4 mb-3 col-12">
                  <label for="pendaftaran_kota" class="form-label fontFormRegister">Kota <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_kota" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-4 mb-3 col-12">
                  <label for="pendaftaran_provinsi" class="form-label fontFormRegister">Provinsi <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_provinsi" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-4 mb-3 col-12">
                  <label for="pendaftaran_status_tempat_tinggal" class="form-label fontFormRegister">Status Tempat Tinggal <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_status_tempat_tinggal" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
            </div>
            <hr>
            
            {{-- section3 --}}
            <div class="col mt-5 mb-3 col-12">
              <div class="row">
                <div class="col-3 mb-3">
                  <label for="pendaftaran_anak_ke" class="form-label fontFormRegister">Anak Ke- <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_anak_ke" type="number" class="form-control font-primer" placeholder="" aria-label="Last name" max="99">
                </div>
                <div class="col-3 mb-3">
                  <label for="pendaftaran_jumlah_saudara" class="form-label fontFormRegister">Jumlah Saudara <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_jumlah_saudara" type="text" class="form-control font-primer" placeholder="" aria-label="Last name" max="99">
                </div>
                <div class="col-3 mb-3">
                  <label for="pendaftaran_cita_cita" class="form-label fontFormRegister">Cita-cita <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_cita_cita" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-3 mb-3">
                  <label for="pendaftaran_hobi" class="form-label fontFormRegister">Hobi <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_hobi" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="pendaftaran_pembiaya" class="form-label fontFormRegister">Pembiaya <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_pembiaya" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="pendaftaran_kepala_keluarga" class="form-label fontFormRegister">Keluarga <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_kepala_keluarga" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="pendaftaran_media_sosial" class="form-label fontFormRegister">Media Sosial <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_media_sosial" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="pendaftaran_kewarganegaraan" class="form-label fontFormRegister">Kewarganegaraan <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_kewarganegaraan" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
            </div>
            <hr>
            
            {{-- section-4 --}}
            <div class="col mt-5 mb-3 col-12">
              <div class="row">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="pendaftaran_pernah_paud" class="form-label fontFormRegister">Pernah PAUD <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_pernah_paud" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="pendaftaran_pernah_tk" class="form-label fontFormRegister">Pernah TK <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_pernah_tk" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label for="pendaftaran_kebutuhan_disabilitas" class="form-label fontFormRegister">Kebutuhan Disabilitas <span style="color:red;font-weight:bold;">*</span></label>
                  <select name="pendaftaran_kebutuhan_disabilitas" class="form-select font-primer" placeholder="" aria-label="Last name">
                    <option value="" disabled selected>Pilih salah satu ...</option>
                    <option value="ada" class="form-control font-primer">Ada</option>
                    <option value="tidak" class="form-control font-primer">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="pendaftaran_jarak_tempuh" class="form-label fontFormRegister">Jarak Tempuh <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_jarak_tempuh" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="pendaftaran_waktu_tempuh" class="form-label fontFormRegister">Waktu Tempuh <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="pendaftaran_waktu_tempuh" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label for="pendaftaran_kebutuhan_khusus" class="form-label fontFormRegister">Kebutuhan Khusus <span style="color:red;font-weight:bold;">*</span></label>
                  <select name="pendaftaran_kebutuhan_khusus" class="form-select font-primer" placeholder="" aria-label="Last name">
                    <option value="" disabled selected>Pilih salah satu ...</option>
                    <option value="ada" class="form-control font-primer">Ada</option>
                    <option value="tidak" class="form-control font-primer">Tidak</option>
                  </select>
                </div>
              </div>
            </div>
            <hr>

            {{-- section-5 (data wali general) --}}
            <div class="col mt-5 mb-3 col-12">
              <div class="row">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="data_ortu_nama_wali" class="form-label fontFormRegister">Nama Wali <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="data_ortu_nama_wali" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="data_ortu_status_wali" class="form-label fontFormRegister">Status Wali <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="data_ortu_status_wali" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label for="data_ortu_no_hp_wali" class="form-label fontFormRegister">No Hp <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="data_ortu_no_hp_wali" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
              <div class="row">
                <div class="col-lg col-12 mb-3">
                  <label for="data_ortu_alamat" class="form-label fontFormRegister">Alamat <span style="color:red;font-weight:bold;">*</span></label>
                  <textarea class="form-control font-primer" name="data_ortu_alamat" id="" cols="30" rows="5" placeholder=""></textarea>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="data_ortu_kecamatan" class="form-label fontFormRegister">Kecamatan <span style="color:red;font-weight:bold;">*</span></label>
                    <input name="data_ortu_kecamatan" type="text" class="datepicker form-control font-primer" placeholder="" aria-label="kecamatan">
                  </div>
                  <div class="mb-3">
                    <label for="data_ortu_kelurahan" class="form-label fontFormRegister">Kelurahan <span style="color:red;font-weight:bold;">*</span></label>
                    <input name="data_ortu_kelurahan" type="text" class="datepicker form-control font-primer" placeholder="" aria-label="kecamatan">
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="data_ortu_provinsi" class="form-label fontFormRegister">Provinsi <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="data_ortu_provinsi" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label for="data_ortu_kota" class="form-label fontFormRegister">Kota <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="data_ortu_kota" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
            </div>
            <hr>

            {{-- section-7 data ayah --}}
            <div class="col mt-5 mb-3 col-12">
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <label for="ayah_personal_ortu_nama" class="form-label fontFormRegister">Nama ayah <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ayah_personal_ortu_nama" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ayah_personal_ortu_nik" class="form-label fontFormRegister">NIK ayah <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ayah_personal_ortu_nik"" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ayah_personal_ortu_no_hp" class="form-label fontFormRegister">No Hp ayah <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ayah_personal_ortu_no_hp" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ayah_personal_ortu_tempat_lahir" class="form-label fontFormRegister">Tempat Lahir ayah <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ayah_personal_ortu_tempat_lahir" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ayah_personal_ortu_tanggal_lahir" class="form-label fontFormRegister">Tanggal Lahir ayah <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ayah_personal_ortu_tanggal_lahir" type="date" class="datepicker form-control font-primer" data-date-format="yyyy/mm/dd" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label for="ayah_personal_ortu_pendidikan_terakhir" class="form-label fontFormRegister">Pendidikan Terakhir <span style="color:red;font-weight:bold;">*</span></label>
                  <select name="ayah_personal_ortu_pendidikan_terakhir" class="form-control font-primer" placeholder="" aria-label="Last name">
                    <option value="SD" class="form-control font-primer">SD</option>
                    <option value="SMP" class="form-control font-primer">SMP</option>
                    <option value="SMA/SMK" class="form-control font-primer">SMA/SMK</option>
                    <option value="D3" class="form-control font-primer">D3</option>
                    <option value="D4/S1" class="form-control font-primer">D4/S1</option>
                    <option value="S2" class="form-control font-primer">S2</option>
                    <option value="S3" class="form-control font-primer">S3</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ayah_personal_ortu_status" class="form-label fontFormRegister">Status ayah <span style="color:red;font-weight:bold;">*</span></label>
                  <select name="ayah_personal_ortu_status" class="form-select font-primer" placeholder="" aria-label="Last name">
                    <option value="" disabled selected>Pilih salah satu ...</option>
                    <option value="masih hidup" class="form-control font-primer">Masih Hidup</option>
                    <option value="sudah meninggal" class="form-control font-primer">Sudah Meninggal</option>
                  </select>
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ayah_personal_ortu_pekerjaan" class="form-label fontFormRegister">Pekerjaan ayah <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ayah_personal_ortu_pekerjaan" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label for="ayah_personal_ortu_penghasilan" class="form-label fontFormRegister">Penghasilan ayah (rata-rata) <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ayah_personal_ortu_penghasilan" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
            </div>
            <hr>

            {{-- section-6 data ibu --}}
            <div class="col mt-5 mb-3 col-12">
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <label for="ibu_personal_ortu_nama" class="form-label fontFormRegister">Nama Ibu <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ibu_personal_ortu_nama" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ibu_personal_ortu_nik" class="form-label fontFormRegister">NIK Ibu <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ibu_personal_ortu_nik"" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ibu_personal_ortu_no_hp" class="form-label fontFormRegister">No Hp Ibu <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ibu_personal_ortu_no_hp" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ibu_personal_ortu_tempat_lahir" class="form-label fontFormRegister">Tempat Lahir ibu <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ibu_personal_ortu_tempat_lahir" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ibu_personal_ortu_tanggal_lahir" class="form-label fontFormRegister">Tanggal Lahir ibu <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ibu_personal_ortu_tanggal_lahir" type="date" class="datepicker form-control font-primer" data-date-format="yyyy/mm/dd" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label for="ibu_personal_ortu_pendidikan_terakhir" class="form-label fontFormRegister">Pendidikan Terakhir <span style="color:red;font-weight:bold;">*</span></label>
                  <select name="ibu_personal_ortu_pendidikan_terakhir" class="form-control font-primer" placeholder="" aria-label="Last name">
                    <option value="SD" class="form-control font-primer">SD</option>
                    <option value="SMP" class="form-control font-primer">SMP</option>
                    <option value="SMA/SMK" class="form-control font-primer">SMA/SMK</option>
                    <option value="D3" class="form-control font-primer">D3</option>
                    <option value="D4/S1" class="form-control font-primer">D4/S1</option>
                    <option value="S2" class="form-control font-primer">S2</option>
                    <option value="S3" class="form-control font-primer">S3</option>
                  </select>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ibu_personal_ortu_status" class="form-label fontFormRegister">Status Ibu <span style="color:red;font-weight:bold;">*</span></label>
                  <select name="ibu_personal_ortu_status" class="form-select font-primer" placeholder="" aria-label="Last name">
                    <option value="" disabled selected>Pilih salah satu ...</option>
                    <option value="masih hidup" class="form-control font-primer">Masih Hidup</option>
                    <option value="sudah meninggal" class="form-control font-primer">Sudah Meninggal</option>
                  </select>
                </div>
                <div class="col-lg-3 col-12 mb-3">
                  <label for="ibu_personal_ortu_pekerjaan" class="form-label fontFormRegister">Pekerjaan Ibu <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ibu_personal_ortu_pekerjaan" type="text" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label for="ibu_personal_ortu_penghasilan" class="form-label fontFormRegister">Penghasilan Ibu (rata-rata) <span style="color:red;font-weight:bold;">*</span></label>
                  <input name="ibu_personal_ortu_penghasilan" type="number" class="form-control font-primer" placeholder="" aria-label="Last name">
                </div>
              </div>
            </div>
            <hr>

            <div class="col mt-5 col-12 text-end">
              <button class="btn btn-primer font-primer-b px-3 py-2">Daftar</button>
            </div>

          </form>
        </div>
      </div>
    </div>

@endsection