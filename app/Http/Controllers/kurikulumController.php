<?php

namespace App\Http\Controllers;

use App\kurikulum;
use Illuminate\Http\Request;
use Session;


class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.kurikulum.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.kurikulum.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
           $this->validate($request, [
            'nama'=>'required|unique:,title',
            'jabatan'=>'required|exists:kurikulums,id',
            'foto'=>'image|max:2048']);
        $kurikulum = Kurikulum::create($request->except('foto'));
        if($request->hasFile('foto'))
        {
            $uploaded_cover=$request->file('foto');
            $extension=$uploaded_foto->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'image';
            $uploaded_foto->move($destinationPath, $filename);
            $kurikulum->foto=$filename;
            $kurikulum->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $kurikulum->title"]);
        return redirect()->route('kurikulum.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(kurikulum $kurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(kurikulum $kurikulum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kurikulum $kurikulum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(kurikulum $kurikulum)
    {
        //
    }
}
