<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = Kriteria::select('id','kode_kriteria','nama','bobot')->simplepaginate(10);
        return view('menu/kriteria/index', compact('kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu/kriteria/create');
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
            'kode_kriteria'=>'required',
            'nama' => 'required',
            'bobot' => 'required'
        ]);

        Kriteria::create([
            'kode_kriteria' => $request->kode_kriteria,
            'nama' => Str::title($request->nama),
            'bobot' => $request->bobot,

        ]);

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil ditambahkan
        </div>
        ');
        return redirect('/kriteria');
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
    public function edit($id)
    {
        $kriteria = Kriteria::select('id','kode_kriteria','bobot')->whereId($id)->first();
        return view('menu/kriteria/edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_kriteria'=>'required',
            'nama' => 'required',
            'bobot' => 'required'
        ]);
        Kriteria::whereId($id)->update([
            'kode_kriteria' => $request->kode_kriteria,
            'nama' => Str::title($request->nama),
            'bobot' => $request->bobot
        ]);

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil di ubah
        </div>
        ');
        return redirect('/kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request, $id)
    {
        Kriteria::whereId($id)->delete();

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil di hapus
        </div>
        ');
        return redirect('/kriteria');
    }
}
