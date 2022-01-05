<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = menu::where('id_lembaga',$id)->get();
        $nav = "menu";
        return view('admin.adminMenu',compact('data','nav'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = "menu";
        return view('admin.adminMenuCreate',compact('nav'));
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
            
            'menu_judul' => ['required'],
            'menu_konten' => ['required'],
            'id_lembaga' => ['required'],
        ]);
        $menu = menu::create([
            'menu_judul'=> $request->menu_judul,
            'menu_konten'=> $request->menu_konten,
            'id_lembaga'=> $request->id_lembaga,
        ]);
        return redirect('admin/lembaga/menu/'.$request->id_lembaga);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nav = "menu";
        $data = menu::find($id);
        return view('admin.adminMenuEdit',compact('data','nav'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = menu::find($id);
        $data->menu_judul = $request->menu_judul;
        $data->menu_konten = $request->menu_konten;
        $data->id_lembaga = $request->id_lembaga;
        $id_temp = $data->id_lembaga;
        $data->save();
        return redirect('admin/lembaga/menu/'.$id_temp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = menu::where('id',$id)->first();
        $id_temp = $data->id_lembaga;
        $data->delete();
        return redirect('admin/lembaga/menu/'.$id_temp);
    }
}
