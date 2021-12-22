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

    public function daftarTerima($id)
    {
        $data = pendaftaran::where('id',$id)->first();
        $data->pendaftaran_status = "diterima";
        $data->save();
        $siswa = siswa::create([
            'siswa_foto'     => $data->pendaftaran_foto,
            'siswa_nama'     => $data->pendaftaran_nama,
            'siswa_alamat'     => $data->pendaftaran_alamat,
            'siswa_jenis_kelamin'   => $data->pendaftaran_jenis_kelamin,
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
