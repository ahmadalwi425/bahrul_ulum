<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use App\Models\data_ortu;
use App\Models\personal_ortu;
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
        return view('register');
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
    public function modal()
    {
        return redirect('/registrasi')-> with('alert-success', 'data success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
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
            'data_ortu_nama_wali' => ['required'],
            'data_ortu_status_wali' => ['required'],
            'data_ortu_no_hp_wali' => ['required'],
            'data_ortu_alamat' => ['required'],
            'data_ortu_kelurahan' => ['required'],
            'data_ortu_provinsi' => ['required'],
            'data_ortu_kota' => ['required'],
            'ibu_personal_ortu_nik' => ['required'],
            'ibu_personal_ortu_nama' => ['required'],
            'ibu_personal_ortu_status' => ['required'],
            'ibu_personal_ortu_tempat_lahir' => ['required'],
            'ibu_personal_ortu_tanggal_lahir' => ['required'],
            'ibu_personal_ortu_pendidikan_terakhir' => ['required'],
            'ibu_personal_ortu_pekerjaan' => ['required'],
            'ibu_personal_ortu_no_hp' => ['required'],
            'ibu_personal_ortu_penghasilan' => ['required'],
            'ayah_personal_ortu_nik' => ['required'],
            'ayah_personal_ortu_nama' => ['required'],
            'ayah_personal_ortu_status' => ['required'],
            'ayah_personal_ortu_tempat_lahir' => ['required'],
            'ayah_personal_ortu_tanggal_lahir' => ['required'],
            'ayah_personal_ortu_pendidikan_terakhir' => ['required'],
            'ayah_personal_ortu_pekerjaan' => ['required'],
            'ayah_personal_ortu_no_hp' => ['required'],
            'ayah_personal_ortu_penghasilan' => ['required'],
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

        $data_ortu = data_ortu::create([
            'data_ortu_nama_wali'=> $request->data_ortu_nama_wali,
            'data_ortu_status_wali'=> $request->data_ortu_status_wali,
            'data_ortu_no_hp_wali'=> $request->data_ortu_no_hp_wali,
            'data_ortu_alamat'=> $request->data_ortu_alamat,
            'data_ortu_kelurahan'=> $request->data_ortu_kelurahan,
            'data_ortu_provinsi'=> $request->data_ortu_provinsi,
            'data_ortu_kota'=> $request->data_ortu_kota,
            'data_ortu_kecamatan'=> $request->data_ortu_kecamatan,
            'siswa_nisn' => $request->pendaftaran_nisn,
        ]);
        $personal_ortu = personal_ortu::create([
            'personal_ortu_nik' => $request->ibu_personal_ortu_nik,
            'personal_ortu_nama' => $request->ibu_personal_ortu_nama,
            'personal_ortu_status' => $request->ibu_personal_ortu_status,
            'personal_ortu_tempat_lahir' => $request->ibu_personal_ortu_tempat_lahir,
            'personal_ortu_tanggal_lahir' => $request->ibu_personal_ortu_tanggal_lahir,
            'personal_ortu_pendidikan_terakhir' => $request->ibu_personal_ortu_pendidikan_terakhir,
            'personal_ortu_pekerjaan' => $request->ibu_personal_ortu_pekerjaan,
            'personal_ortu_no_hp' => $request->ibu_personal_ortu_no_hp,
            'personal_ortu_penghasilan' => $request->ibu_personal_ortu_penghasilan,
        ]);
        $personal_ortu = personal_ortu::create([
            'personal_ortu_nik' => $request->ayah_personal_ortu_nik,
            'personal_ortu_nama' => $request->ayah_personal_ortu_nama,
            'personal_ortu_status' => $request->ayah_personal_ortu_status,
            'personal_ortu_tempat_lahir' => $request->ayah_personal_ortu_tempat_lahir,
            'personal_ortu_tanggal_lahir' => $request->ayah_personal_ortu_tanggal_lahir,
            'personal_ortu_pendidikan_terakhir' => $request->ayah_personal_ortu_pendidikan_terakhir,
            'personal_ortu_pekerjaan' => $request->ayah_personal_ortu_pekerjaan,
            'personal_ortu_no_hp' => $request->ayah_personal_ortu_no_hp,
            'personal_ortu_penghasilan' => $request->ayah_personal_ortu_penghasilan,
        ]);
        $dataupdate = data_ortu::where('siswa_nisn',$request->pendaftaran_nisn)->first();
        $dataibu = personal_ortu::where('personal_ortu_nik',$request->ibu_personal_ortu_nik)->first();
        $dataayah = personal_ortu::where('personal_ortu_nik',$request->ayah_personal_ortu_nik)->first();
        $dataupdate->ibu_id = $dataibu->id;
        $dataupdate->ayah_id = $dataayah->id;
        $dataupdate->save();
        return redirect('/registrasi')-> with('alert-success', 'data success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        pendaftaran::find($id)->delete();
        return redirect('pendaftaran')
            ->with('Sukses, data pendaftar berhasil dihapus');
    }
}
