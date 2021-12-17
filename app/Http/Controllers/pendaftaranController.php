<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;

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
            'pendaftaran_foto' => ['required','mimes:jpg,png'],
            'pendaftaran_nama' => ['required'],
            'pendaftaran_alamat' => ['required'],
            'pendaftaran_jenis_kelamin' => ['required'],
        ]);
        $image = $request->file('pendaftaran_foto');
        // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
        $image_name = $request->file('pendaftaran_foto')->store('img-foto','public');
        $pendaftaran = pendaftaran::create([
            'pendaftaran_foto'     => $image_name,
            'pendaftaran_nama'     => $request->pendaftaran_nama,
            'pendaftaran_alamat'     => $request->pendaftaran_alamat,
            'pendaftaran_jenis_kelamin'   => $request->pendaftaran_jenis_kelamin,
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
