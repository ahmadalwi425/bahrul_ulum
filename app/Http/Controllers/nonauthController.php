<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class nonauthController extends Controller
{
    public function indexMenu($id)
    {
        $data = menu::where('id',$id)->first();
        $nav = "menu";
        return view('non-auth.tampilMenu',compact('data','nav'));
    }
}
