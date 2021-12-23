<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use App\Models\siswa;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPendaftaran($id)
    {
        pendaftaran::where('id',$id)->first();
        return view('admin.detailPendaftaran');
    }
    public function showSiswa($id)
    {
        pendaftaran::where('id',$id)->first();
        return view('admin.detailSiswa');
    }
    public function hapusSiswa($id)
    {
        siswa::find($id)->delete();
        return redirect('admin/siswa');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function daftarTerima($id)
    {
        $data = pendaftaran::where('id',$id)->first();
        $data->pendaftaran_status = "diterima";
        $data->save();
        $siswa = siswa::create([
            'siswa_no_kk'=> $data->pendaftaran_no_kk,
            'siswa_nisn'=> $data->pendaftaran_nisn,
            'siswa_no_kip'=> $data->pendaftaran_no_kip,
            'siswa_nama'=> $data->pendaftaran_nama,
            'siswa_jenis_kelamin'=> $data->pendaftaran_jenis_kelamin,
            'siswa_tempat_lahir'=> $data->pendaftaran_tempat_lahir,
            'siswa_tanggal_lahir'=> $data->pendaftaran_tanggal_lahir,
            'siswa_alamat'=> $data->pendaftaran_alamat,
            'siswa_kelurahan'=> $data->pendaftaran_kelurahan,
            'siswa_provinsi'=> $data->pendaftaran_provinsi,
            'siswa_kota'=> $data->pendaftaran_kota,
            'siswa_kecamatan'=> $data->pendaftaran_kecamatan,
            'siswa_kode_pos'=> $data->pendaftaran_kode_pos,
            'siswa_agama'=> $data->pendaftaran_agama,
            'siswa_no_hp'=> $data->pendaftaran_no_hp,
            'siswa_anak_ke'=> $data->pendaftaran_anak_ke,
            'siswa_jumlah_saudara'=> $data->pendaftaran_jumlah_saudara,
            'siswa_status_tempat_tinggal'=> $data->pendaftaran_status_tempat_tinggal,
            'siswa_pembiaya'=> $data->pendaftaran_pembiaya,
            'siswa_kewarganegaraan'=> $data->pendaftaran_kewarganegaraan,
            'siswa_kebutuhan_khusus'=> $data->pendaftaran_kebutuhan_khusus,
            'siswa_kebutuhan_disabilitas'=> $data->pendaftaran_kebutuhan_disabilitas,
            'siswa_kepala_keluarga'=> $data->pendaftaran_kepala_keluarga,
            'siswa_pernah_paud'=> $data->pendaftaran_pernah_paud,
            'siswa_pernah_tk'=> $data->pendaftaran_pernah_tk,   
            'siswa_jarak_tempuh'=> $data->pendaftaran_jarak_tempuh,
            'siswa_waktu_tempuh'=> $data->pendaftaran_waktu_tempuh,
            'siswa_cita_cita'=> $data->pendaftaran_cita_cita,
            'siswa_hobi'=> $data->pendaftaran_hobi,
            'siswa_media_sosial'=> $data->pendaftaran_media_sosial,
            'lembaga_id'=> $data->lembaga_id,
        ]);
        return redirect('admin/pendaftaran');
    }
    public function daftarTolak($id)
    {
        $data = pendaftaran::where('id',$id)->first();
        $data->pendaftaran_status = "ditolak";
        $data->save();
        return redirect('admin/pendaftaran');
    }
    public function pendaftaran()
    {
        $data = pendaftaran::get()->sortBy('pendaftaran_status');
        return view('admin.pendaftaran',compact('data'));
    }
    public function siswa()
    {
        $data = siswa::get();
        return view('admin.adminStudent',compact('data'));
    }
    public function siswaDetail()
    {
        $data = siswa::get();
        return view('admin.adminStudentDetail',compact('data'));
    }
}
