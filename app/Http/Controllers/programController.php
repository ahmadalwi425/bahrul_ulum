<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;

class programController extends Controller
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
        $data = program::get();
        $nav = "program";
        return view('admin.AdminProgram',compact('data','nav'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nav = "program";
        return view('admin.adminProgramCreate', compact('nav'));
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
            'program_judul' => 'required',
            'program_konten' => 'required',
            'gambar' => 'required|mimes:jpeg,bmp,png',
        ]);

        $current = Carbon::now()->format('YmdHs');
        $file = $request->file('gambar') ;
        $image_name = $current.$file->getClientOriginalName() ;
        $destinationPath = public_path().'/img_program' ;
        $file->move($destinationPath,$image_name);
        
        $program = program::create([
            'program_judul'=> $request->program_judul,
            'program_konten'=> $request->program_konten,
            'program_cover'=> $image_name,
        ]);
        return redirect('admin/program');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = program::find($id);
        $nav = "program";
        return view('admin.adminProgramEdit', compact('nav','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            'program_judul' => ['required'],
            'program_konten' => ['required'],
        ]);
        $data = program::where('id',$id)->first();
        if ($request->file('gambar')) {
            $current = Carbon::now()->format('YmdHs');
            $file = $request->file('gambar') ;
            $image_name = $current.$file->getClientOriginalName() ;
            $destinationPath = public_path().'/img_program' ;
            $file->move($destinationPath,$image_name);
            $data->program_cover = $image_name;
        }
        $data->program_judul= $request->program_judul;
        $data->program_konten= $request->program_konten;
        $data->save();
        return redirect('admin/program');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = program::where('id',$id)->first();
        $data->delete();
        return redirect('admin/program');
    }
}
