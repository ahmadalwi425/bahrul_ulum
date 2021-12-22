<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use Carbon\Carbon;

class pendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('non-auth.pendaftaran');
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
        $this->validate($request, [
            'pendaftaran_no_kk' => ['required'],
            'pendaftaran_nisn' => ['required'],
            'pendaftaran_no_kip' => ['required'],
            'pendaftaran_nama' => ['required'],
            'pendaftaran_jenis_kelamin' => ['required'],
            'pendaftaran_tempat_lahir' => ['required'],
            'pendaftaran_tanggal_lahir' => ['required'],
            'pendaftaran_alamat' => ['required'],
            'pendaftaran_kelurahan' => ['required'],
            'pendaftaran_provinsi' => ['required'],
            'pendaftaran_kota' => ['required'],
            'pendaftaran_kecamatan' => ['required'],
            'pendaftaran_kode_pos' => ['required'],
            'pendaftaran_agama' => ['required'],
            'pendaftaran_no_hp' => ['required'],
            'pendaftaran_anak_ke' => ['required'],
            'pendaftaran_jumlah_saudara' => ['required'],
            'pendaftaran_status_tempat_tinggal' => ['required'],
            'pendaftaran_pembiaya' => ['required'],
            'pendaftaran_kewarganegaraan' => ['required'],
            'pendaftaran_kebutuhan_khusus' => ['required'],
            'pendaftaran_kebutuhan_disabilitas' => ['required'],
            'pendaftaran_kepala_keluarga' => ['required'],
            'pendaftaran_pernah_paud' => ['required'],
            'pendaftaran_pernah_tk' => ['required'],   
            'pendaftaran_jarak_tempuh' => ['required'],
            'pendaftaran_waktu_tempuh' => ['required'],
            'pendaftaran_cita_cita' => ['required'],
            'pendaftaran_hobi' => ['required'],
            'pendaftaran_media_sosial' => ['required'],
        ]);
        $pendaftaran = pendaftaran::create([
            'pendaftaran_no_kk'=> $request->pendaftaran_no_kk,
            'pendaftaran_nisn'=> $request->pendaftaran_nisn,
            'pendaftaran_no_kip'=> $request->pendaftaran_no_kip,
            'pendaftaran_nama'=> $request->pendaftaran_nama,
            'pendaftaran_jenis_kelamin'=> $request->pendaftaran_jenis_kelamin,
            'pendaftaran_tempat_lahir'=> $request->pendaftaran_tempat_lahir,
            'pendaftaran_tanggal_lahir'=> $request->pendaftaran_tanggal_lahir,
            'pendaftaran_alamat'=> $request->pendaftaran_alamat,
            'pendaftaran_kelurahan'=> $request->pendaftaran_kelurahan,
            'pendaftaran_provinsi'=> $request->pendaftaran_provinsi,
            'pendaftaran_kota'=> $request->pendaftaran_kota,
            'pendaftaran_kecamatan'=> $request->pendaftaran_kecamatan,
            'pendaftaran_kode_pos'=> $request->pendaftaran_kode_pos,
            'pendaftaran_agama'=> $request->pendaftaran_agama,
            'pendaftaran_no_hp'=> $request->pendaftaran_no_hp,
            'pendaftaran_anak_ke'=> $request->pendaftaran_anak_ke,
            'pendaftaran_jumlah_saudara'=> $request->pendaftaran_jumlah_saudara,
            'pendaftaran_status_tempat_tinggal'=> $request->pendaftaran_status_tempat_tinggal,
            'pendaftaran_pembiaya'=> $request->pendaftaran_pembiaya,
            'pendaftaran_kewarganegaraan'=> $request->pendaftaran_kewarganegaraan,
            'pendaftaran_kebutuhan_khusus'=> $request->pendaftaran_kebutuhan_khusus,
            'pendaftaran_kebutuhan_disabilitas'=> $request->pendaftaran_kebutuhan_disabilitas,
            'pendaftaran_kepala_keluarga'=> $request->pendaftaran_kepala_keluarga,
            'pendaftaran_pernah_paud'=> $request->pendaftaran_pernah_paud,
            'pendaftaran_pernah_tk'=> $request->pendaftaran_pernah_tk,   
            'pendaftaran_jarak_tempuh'=> $request->pendaftaran_jarak_tempuh,
            'pendaftaran_waktu_tempuh'=> $request->pendaftaran_waktu_tempuh,
            'pendaftaran_cita_cita'=> $request->pendaftaran_cita_cita,
            'pendaftaran_hobi'=> $request->pendaftaran_hobi,
            'pendaftaran_media_sosial'=> $request->pendaftaran_media_sosial,
            'pendaftaran_tanggal_masuk'=> Carbon::today()->toDateString(),
            'lembaga_id'=> $request->lembaga_id,
        ]);
        return view('non-auth.selesaidaftar')-> with('success', 'Anda berhasil mendaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
