<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;

class bannerController extends Controller
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
        $data = banner::get();
        $nav = "banner";
        return view('admin.adminBanner',compact('data','nav'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = "banner";
        return view('admin.adminBannerCreate', compact('nav'));
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
            'banner_judul' => 'required',
            'gambar' => 'required|mimes:jpeg,bmp,png',
        ]);

        $current = Carbon::now()->format('YmdHs');
        $file = $request->file('gambar') ;
        $image_name = $current.$file->getClientOriginalName() ;
        $destinationPath = public_path().'/img_banner' ;
        $file->move($destinationPath,$image_name);
        
        $banner = banner::create([
            'banner_judul'=> $request->banner_judul,
            'banner_image'=> $image_name,
        ]);
        return redirect('admin/banner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = banner::find($id);
        $nav = "banner";
        return view('admin.adminBannerEdit', compact('nav','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            'banner_judul' => ['required'],
        ]);
        $data = banner::where('id',$id)->first();
        if ($request->file('gambar')) {
            $current = Carbon::now()->format('YmdHs');
            $file = $request->file('gambar') ;
            $image_name = $current.$file->getClientOriginalName() ;
            $destinationPath = public_path().'/img_banner' ;
            $file->move($destinationPath,$image_name);
            $data->banner_cover = $image_name;
        }
        $data->banner_judul= $request->banner_judul;
        $data->save();
        return redirect('admin/banner');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = banner::where('id',$id)->first();
        $data->delete();
        return redirect('admin/banner');
    }
}
