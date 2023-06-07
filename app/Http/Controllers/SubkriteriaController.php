<?php

namespace App\Http\Controllers;

use App\Models\Subkriteria;
use Illuminate\Http\Request;

class SubkriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subkriteria=Subkriteria::select('id','id_kriteria','jenis')->simplepaginate(10);
        return view('menu/subkriteria/index', compact('subkriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu/subkriteria/create');
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

            'jenis' => 'required',
            'id_kriteria' => 'required'

        ]);

        Subkriteria::create([
            'jenis' => $request->jenis,
            'id_kriteria' => $request->id_kriteria


        ]);

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil ditambahkan
        </div>
        ');
        return redirect('/subkriteria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subkriteria=Subkriteria::select('id','id_kriteria','jenis','nilai')->simplepaginate(10);
        return view('menu/subkriteria/show', compact('subkriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subkriteria = Subkriteria::select('id','id_kriteria','jenis')->whereId($id)->first();
        return view('menu/subkriteria/edit', compact('subkriteria'));

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
            'jenis' => 'required',
            'id_kriteria' => 'required'

        ]);
        Subkriteria::whereId($id)->update([
            'jenis' => $request->jenis,
            'id_kriteria' => $request->id_kriteria

        ]);

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil di ubah
        </div>
        ');
        return redirect('/subkriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Subkriteria::whereId($id)->delete();

        $request->session()->flash('sukses','
        <div class="alert alert-succes" role="alert">
            Data berhasil di hapus
        </div>
        ');
        return redirect('/subkriteria');
    }
}
