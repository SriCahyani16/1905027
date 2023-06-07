<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = Alternatif::select('id_test','no_test','nama','jk','asal_sekolah')->simplepaginate(10);
        return view('menu/alternatif/index', compact('alternatif'));
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu/alternatif/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_test'=>'required',
            'nama' => 'required',
            'asal_sekolah' => 'required'
        ]);

        Alternatif::create([
            'no_test' => $request->no_test,
            'nama' => Str::title($request->nama),
            'jk' => $request->jk,
            'asal_sekolah' => $request->asal_sekolah,


        ]);

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil ditambahkan
        </div>
        ');
        return redirect('/alternatif');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_test)
    {
        $alternatif = Alternatif::select('id_test','no_test','nama','jk','asal_sekolah')->whereId_test($id_test)->first();
        return view('menu/alternatif/edit', compact('alternatif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_test)
    {
        $request->validate([
            'no_test'=>'required',
            'nama' => 'required',
            'jk' => 'required',
            'asal_sekolah' => 'required'
        ]);
        Alternatif::whereId_test($id_test)->update([
            'no_test' => $request->no_test,
            'nama' => Str::title($request->nama),
            'jk' => $request->jk,
            'asal_sekolah' => $request->asal_sekolah
        ]);

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil di ubah
        </div>
        ');
        return redirect('/alternatif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id_test)
    {
        Alternatif::whereId_test($id_test)->delete();

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil di hapus
        </div>
        ');
        return redirect('/alternatif');
    }
}
