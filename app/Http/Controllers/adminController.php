<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use App\Models\siswa;
use App\Models\menu;
use App\Models\lembaga;
use App\Models\data_ortu;
use App\Imports\siswaImport;
use App\Exports\siswaExport;
use Maatwebsite\Excel\Facades\Excel;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function exportSiswa() 
    {
        return Excel::download(new siswaExport, 'data_siswa.xlsx');
    }

    public function importSiswa() 
    {
        Excel::import(new siswaImport,request()->file('file'));
        return back();
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
        $datasiswa = siswa::orderBy('id','desc')->first();
        $data_ortu = data_ortu::create([
            'siswa_id'=>$datasiswa->id,
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
        $jumlahrequest = pendaftaran::where('pendaftaran_status','diminta')->get()->count();
        return view('admin.adminPendaftaran',compact('data','jumlahrequest'));
    }
    public function siswa()
    {
        $data = siswa::with('lembaga')->get();
        return view('admin.adminStudent',compact('data'));
    }
    public function siswaDetail($id)
    {
        $data = siswa::where('id',$id)->first();
        return view('admin.adminStudentDetail',compact('data'));
    }
    public function siswaUpdate(Request $request,$id)
    {
        $data = siswa::where('id',$id)->first();
        $data->siswa_no_kk= $request->siswa_no_kk;
        $data->siswa_nisn= $request->siswa_nisn;
        $data->siswa_no_kip= $request->siswa_no_kip;
        $data->siswa_nama= $request->siswa_nama;
        $data->siswa_jenis_kelamin= $request->siswa_jenis_kelamin;
        $data->siswa_tempat_lahir= $request->siswa_tempat_lahir;
        $data->siswa_tanggal_lahir= $request->siswa_tanggal_lahir;
        $data->siswa_alamat= $request->siswa_alamat;
        $data->siswa_kelurahan= $request->siswa_kelurahan;
        $data->siswa_provinsi= $request->siswa_provinsi;
        $data->siswa_kota= $request->siswa_kota;
        $data->siswa_kecamatan= $request->siswa_kecamatan;
        $data->siswa_kode_pos= $request->siswa_kode_pos;
        $data->siswa_agama= $request->siswa_agama;
        $data->siswa_no_hp= $request->siswa_no_hp;
        $data->siswa_anak_ke= $request->siswa_anak_ke;
        $data->siswa_jumlah_saudara= $request->siswa_jumlah_saudara;
        $data->siswa_status_tempat_tinggal= $request->siswa_status_tempat_tinggal;
        $data->siswa_pembiaya= $request->siswa_pembiaya;
        $data->siswa_kewarganegaraan= $request->siswa_kewarganegaraan;
        $data->siswa_kebutuhan_khusus= $request->siswa_kebutuhan_khusus;
        $data->siswa_kebutuhan_disabilitas= $request->siswa_kebutuhan_disabilitas;
        $data->siswa_kepala_keluarga= $request->siswa_kepala_keluarga;
        $data->siswa_pernah_paud= $request->siswa_pernah_paud;
        $data->siswa_pernah_tk= $request->siswa_pernah_tk;   
        $data->siswa_jarak_tempuh= $request->siswa_jarak_tempuh;
        $data->siswa_waktu_tempuh= $request->siswa_waktu_tempuh;
        $data->siswa_cita_cita= $request->siswa_cita_cita;
        $data->siswa_hobi= $request->siswa_hobi;
        $data->siswa_media_sosial= $request->siswa_media_sosial;
        $data->lembaga_id= $request->lembaga_id;
        $data->save();
        return redirect('/admin/siswa');
    }
    

}
