<?php

namespace App\Http\Controllers;

use App\Models\lembaga;
use Illuminate\Http\Request;

class lembagaController extends Controller
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
        $data = lembaga::get();
        $nav = "lembaga";
        return view('admin.adminLembaga',compact('data','nav'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = "lembaga";
        return view('admin.adminLembagaCreate',compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'lembaga_nama' => 'required',
        ]);

        $image_name = $request->file('gambar')->store('img-berita', 'public');
        
        $lembaga = lembaga::create([
            'lembaga_nama'=> $request->lembaga_nama,
        ]);
        return redirect('admin/lembaga');
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
        $data = lembaga::where('id',$id)->first();
        $data->lembaga_nama = $request->lembaga_nama;
        $data->save();
        return redirect('admin/lembaga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lembaga::find($id)->delete();
        return redirect('admin/lembaga');
    }
}
