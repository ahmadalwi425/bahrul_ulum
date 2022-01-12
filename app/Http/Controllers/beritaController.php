<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class beritaController extends Controller
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
        $data = berita::get();
        $nav = "berita";
        return view('admin.adminBerita', compact('nav','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = "berita";
        return view('admin.adminBeritaCreate', compact('nav'));
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
            'berita_judul' => 'required',
            'berita_konten' => 'required',
            'gambar' => 'required|mimes:jpeg,bmp,png',
        ]);

        $image_name = $request->file('gambar')->store('img-berita', 'public');
        
        $berita = berita::create([
            'berita_judul'=> $request->berita_judul,
            'berita_konten'=> $request->berita_konten,
            'berita_cover'=> $image_name,
        ]);
        return redirect('admin/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = berita::find($id);
        $nav = "berita";
        return view('admin.adminBeritaEdit', compact('nav','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            'berita_judul' => ['required'],
            'berita_konten' => ['required'],
        ]);
        $data = berita::where('id',$id)->first();
        if ($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('img-berita', 'public');
            $data->berita_cover = $image_name;
        }
        $data->berita_judul= $request->berita_judul;
        $data->berita_konten= $request->berita_konten;
        $data->save();
        return redirect('admin/berita');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = berita::where('id',$id)->first();
        $data->delete();
        return redirect('admin/berita');
    }
}
