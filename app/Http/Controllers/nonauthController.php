<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\berita;
use App\Models\kata_mereka;
use Carbon\Carbon;

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
        $current = Carbon::now()->format('YmdHs');
        $file = $request->file('foto') ;
        $fileName = $current.$file->getClientOriginalName() ;
        $destinationPath = public_path().'/img' ;
        $file->move($destinationPath,$fileName);
        
        $berita = kata_mereka::create([
            'nama'=> $request->nama,
            'kata'=> $request->kata,
            'foto'=> $fileName,
        ]);
        return redirect('/')->with('alert-success', 'User was successful added!');
    }
}
