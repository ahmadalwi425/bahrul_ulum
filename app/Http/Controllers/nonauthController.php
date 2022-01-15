<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\berita;
use App\Models\kata_mereka;

class nonauthController extends Controller
{
    public function indexMenu($id)
    {
        $data = menu::where('id',$id)->first();
        $nav = "menu";
        return view('menu',compact('data','nav'));
    }
    public function indexBerita($id)
    {
        $data = berita::where('id',$id)->first();
        $nav = "menu";
        return view('menu',compact('data','nav'));
    }
    public function index()
    {
        $data = berita::get();
        $data2 = kata_mereka::where('status','verified')->get();
        return view('homeReal',compact('data','data2'));
    }
    public function registrasi()
    {
        return view('register');
    }

    public function feedback()
    {
        return view('feedback');
    }

    public function feedbackStore(Request $request){
        $validated = $request->validate([
            'nama' => 'required',
            'kata' => 'required',
            'foto' => 'required|mimes:jpeg,bmp,png',
        ]);

        $image_name = $request->file('foto')->store('img-berita', 'public');
        
        $berita = kata_mereka::create([
            'nama'=> $request->nama,
            'kata'=> $request->kata,
            'foto'=> $image_name,
        ]);
        return redirect('/')->with('alert-success', 'User was successful added!');
    }
}
