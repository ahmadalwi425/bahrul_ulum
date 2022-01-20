<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kata_mereka;

class kata_merekaController extends Controller
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
        $data = kata_mereka::get();
        $nav = "kata mereka";
        return view('admin.adminkata_mereka', compact('nav','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = "kata mereka";
        return view('admin.adminkata_merekaCreate', compact('nav'));
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
            'nama' => 'required',
            'kata' => 'required',
            'foto' => 'required|mimes:jpeg,bmp,png',
        ]);

        $image_name = $request->file('foto')->store('img-kata_mereka', 'public');
        
        $kata_mereka = kata_mereka::create([
            'nama'=> $request->nama,
            'kata'=> $request->kata,
            'kata_mereka_cover'=> $image_name,
        ]);
        return redirect('admin/kata_mereka');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kata_mereka  $kata_mereka
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kata_mereka  $kata_mereka
     * @return \Illuminate\Http\Response
     */
    public function verify($id)
    {
        $data = kata_mereka::find($id);
        $data->status = "verified";
        $data->save(); 
        $nav = "feedback";
        return redirect('admin/kata_mereka');
    }

    public function unverify($id)
    {
        $data = kata_mereka::find($id);
        $data->status = "unverified";
        $data->save(); 
        $nav = "feedback";
        return redirect('admin/kata_mereka');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kata_mereka  $kata_mereka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            'nama' => ['required'],
            'kata' => ['required'],
        ]);
        $data = kata_mereka::where('id',$id)->first();
        if ($request->file('foto')) {
            $current = Carbon::now()->format('YmdHs');
            $file = $request->file('foto') ;
            $image_name = $current.$file->getClientOriginalName() ;
            $destinationPath = public_path().'/img' ;
            $file->move($destinationPath,$image_name);
            $data->kata_mereka_cover = $image_name;
        }
        $data->nama= $request->nama;
        $data->kata= $request->kata;
        $data->save();
        return redirect('admin/kata_mereka');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kata_mereka  $kata_mereka
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = kata_mereka::where('id',$id)->first();
        $data->delete();
        return redirect('admin/kata_mereka');
    }
}
