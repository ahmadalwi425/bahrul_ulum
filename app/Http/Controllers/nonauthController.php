<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\berita;

class nonauthController extends Controller
{
    public function indexMenu($id)
    {
        $data = menu::where('id',$id)->first();
        $nav = "menu";
        return view('non-auth.tampilMenu',compact('data','nav'));
    }
    public function index()
    {
        $data = berita::get();
        $nav = "menu";
        return view('homeReal',compact('data'));
    }
    public function registrasi()
    {
        $nav = "menu";
        return view('register');
    }
}
